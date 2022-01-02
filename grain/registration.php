<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $email = "";
$username_err = $password_err = $confirm_password_err = $email_err ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT UserID FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT UserID FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } elseif(strlen(trim($_POST["username"])) < 4){
                    $username_err = "Username must have atleast 4 characters.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);
            
            // Set parameters
            $param_email = $email;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav"> <!-- Creating the navbar for the registration page -->
        <div class="container"><a class="navbar-brand" href="index.php">Grain</a><button data-toggle="collapse" data-target="#navbarResponsive" 
        class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button> <!-- Grain's logo and link that redirects to the "index.php" page -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="login.php">Войти</a></li> <!-- navbar element 1 -->
                    <li class="nav-item"><a class="nav-link" href="registration.php">Регистрация</a></li> <!-- navbar element 2 -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="login-dark" style="background-image: url(&quot;assets/img/map-image.png&quot;);">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> <!-- registration form -->
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-person-stalker" style="color: rgb(254,209,54);"></i></div>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>"><input class="form-control" value="<?php echo $email; ?>" 
            type="email" name="email" placeholder="Email" required=""><span class="help-block"><?php echo $email_err; ?></span></div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>"><input class="form-control" value="<?php echo $username; ?>" 
            type="text" name="username" placeholder="Имя пользователя" required=""><span class="help-block"><?php echo $username_err; ?></span></div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>"><input class="form-control" value="<?php echo $password; ?>" 
            type="password" name="password" placeholder="Пароль" required=""><span class="help-block"><?php echo $password_err; ?></span></div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>"><input class="form-control" value="<?php echo $confirm_password; ?>" 
            type="password" name="confirm_password" placeholder="Подтвердите пароль" required=""><span class="help-block"><?php echo $confirm_password_err; ?></span></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(254,209,54);">Зарегистрироваться</button></div>
            <a class="forgot" href="login.php">Есть аккаунт? Войдите через него!</a> <!-- link redirecting to the "login.php" page if user already has an account -->
        </form>
    </div>
    <div class="footer-clean"> <!-- creating the footer for the registration page -->
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3 style="font-size: 20px;">Ссылки</h3> 
                        <ul>
                            <li><a href="https://www.instagram.com/astana_it_university/" style="font-size: 19px;" target="_blank">Инстаграм</a></li>  <!-- footer element 1 -->
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 style="font-size: 20px;">Контакты</h3> 
                        <ul>
                            <li style="font-size: 19px;"><i class="fa fa-home"></i>&nbsp;&nbsp;<a href="">Мәңгілік Ел, C1</a><br>
                            </li> <!-- footer element 2 -->
                            <li style="font-size: 19px;"><i class="fa fa-phone"></i>&nbsp;+7‒771‒181-77‒00<br></li> <!-- footer element 3 -->
                            <li style="font-size: 19px;"><i class="fa fa-envelope-o"></i>&nbsp;zhagyparoverulan@gmail.com<br></li> <!-- footer element 4 -->
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>