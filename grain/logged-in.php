<?php
// Initialize the session
session_start();
require_once "config.php";

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Aituhana</title>
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
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Aituhana</a><button data-toggle="collapse"
                data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button"
                data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="#menuModal" data-toggle="modal">Меню</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Детали</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Галерея</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">О нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reservationModal"
                            data-toggle="modal">Резервировать</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Контакты</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Выйти</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/header-bg1.jpg');">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span>Welcome to&nbsp;</span></div>
                <div class="intro-heading text-uppercase"><span>Aituhana</span></div><a
                    class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button"
                    href="#services">learn more</a>
            </div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">What is Aituhana?&nbsp;</h2>
                    <h3 class="text-muted section-subheading">Cooking with love</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i
                            class="fa fa-circle fa-stack-2x text-primary"></i><i
                            class="fas fa-pizza-slice fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Delicious food</h4>
                    <p class="text-muted">Our kithcen "Aituhana" has been serving dozens of types of food since 2019, and every
                        every day to the delight of its customers.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i
                            class="fa fa-circle fa-stack-2x text-primary"></i><i
                            class="icon ion-happy-outline fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Quality service</h4>
                    <p class="text-muted">Quick and high-quality work is the key to the success of our kitchens. "Aituhana" always adheres to all standards.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i
                            class="fa fa-circle fa-stack-2x text-primary"></i><i
                            class="icon ion-ios-time fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Having a good time</h4>
                    <p class="text-muted">In addition to delicious meals, "Aituhana" provides customers with plenty of facilities: free use of appliances, microwaves, kettles and free bread, lemon, milk and sugar.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Gallery</h2>
                    <h3 class="section-subheading text-muted">The best kitchen among Nur-Sultan universities</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="https://images.pexels.com/photos/357573/pexels-photo-357573.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Sweets</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="https://images.pexels.com/photos/842571/pexels-photo-842571.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Drinks</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="https://images.pexels.com/photos/1109197/pexels-photo-1109197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Fish</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="https://images.pexels.com/photos/1092730/pexels-photo-1092730.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Baking</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid img-fluid" src="https://images.pexels.com/photos/406152/pexels-photo-406152.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Salads</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="https://images.pexels.com/photos/3186654/pexels-photo-3186654.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Soups</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">About us</h2>
                    <h3 class="text-muted section-subheading">Our mission and team</h3>
                    <p>The kitchen was founded in 2019, in the building of Astana IT University. Our goal is to provide quality and delicious food for the best price.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/1-2.jpg">
                    <h4>Elmuntovna Irina</h4>
                    <p class="text-muted">Vegetable shop preparer</p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/3-2.jpg">
                    <h4>Zhunusova Aigul Akhmetzhanovna</h4>
                    <p class="text-muted">Cashier</p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/2-2.jpg">
                    <h4>Zelenkov Timur</h4>
                    <p class="text-muted">Barista</p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" style="background-image: url('assets/img/contact-us-background.jpg');background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Contact us</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" action ="logged-in.php" name="contactForm" method="post">
                        <div class="form-row">
                            <div class="col col-md-6">
                                <div class="form-group"><input class="form-control" type="text" 
                                        placeholder="Ваше Имя *" required="" name="name_message"><small
                                        class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" name="email_message"
                                        placeholder="Ваш Email *" required=""><small
                                        class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="tel" name="phone"
                                        placeholder="Ваш номер телефона *" required="" onkeypress="return onlyNumberKey(event)" maxlength="11"  ><small
                                        class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><small class="form-text text-danger help-block lead"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea autocomplete = "off" class="form-control" name="text_message"
                                        placeholder="Ваше сообщение *" required=""></textarea><small
                                        class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col">
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <input class="btn btn-primary btn-xl text-uppercase" type="submit" name="someAction" value="Отправить" />
                                    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    {
        $username=$email=$phone=$text="";
        //$username=$_POST('name_message');
        $username = trim($_POST["name_message"]);
        
        $email = trim($_POST["email_message"]);
        
        $phone = trim($_POST["phone"]);
        
        $text = trim($_POST["text_message"]);

        if (!empty($username) && !empty($email) && !empty($phone) && !empty($text)){
            $sql = "INSERT INTO message(user,email,phone_number,text_message)VALUES ('$username','$email','$phone','$text')";
            if (mysqli_query($link, $sql)) {
                echo '<script>alert("Сообщение отправлено");</script>';
            } else {
                echo "Error: " . $sql . "" . mysqli_error($link);
            }
        }
        
    }
    
    
    ?>
    <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3 style="font-size: 20px;">Links</h3>
                        <ul>
                            <li><a class="js-scroll-trigger" href="#about" style="font-size: 19px;">About us</a></li>
                            <li><a class="js-scroll-trigger" href="#menuModal" style="font-size: 19px;">Menu</a></li>
                            <li><a href="https://www.instagram.com/astana_it_university/" style="font-size: 19px;"
                                    target="_blank">Instagram</a></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 style="font-size: 20px;">Contacts</h3>
                        <ul>
                            <li style="font-size: 19px;"><i class="fa fa-home"></i>&nbsp;<a
                                    href="https://2gis.kz/nur_sultan/firm/70000001036709805">Avenue Mangilik El, С1</a><br>
                            </li>
                            <li style="font-size: 19px;"><i class="fa fa-phone"></i>&nbsp;+7 (7172) 64-57-10<br></li>
                            <li style="font-size: 19px;"><i
                                    class="fa fa-envelope-o"></i>&nbsp;astanait.edu.kz<br></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Sweets</h2>
                                    <p class="item-intro text-muted">Cooking with Love.</p><img
                                        class="img-fluid d-block mx-auto" src="https://images.pexels.com/photos/406152/pexels-photo-406152.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                    <p style="font-size: 21px;font-family: Montserrat, sans-serif;">All types of chocolates.<br></p><button class="btn btn-primary"
                                        data-dismiss="modal" type="button"><i
                                            class="fa fa-times"></i><span>&nbsp;Close</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Drinks</h2>
                                    <p class="item-intro text-muted">Cooking with Love.</p><img
                                        class="img-fluid d-block mx-auto" src="https://images.pexels.com/photos/406152/pexels-photo-406152.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                    <p style="font-size: 21px;font-family: Montserrat, sans-serif;">Main types of drinks that you want.<br></p><button class="btn btn-primary" data-dismiss="modal"
                                        type="button"><i class="fa fa-times"></i><span>&nbsp;Close</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Fish</h2>
                                    <p class="item-intro text-muted">Cooking with Love.</p><img
                                        class="img-fluid d-block mx-auto" src="https://images.pexels.com/photos/406152/pexels-photo-406152.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                    <p style="font-size: 21px;font-family: Montserrat, sans-serif;">The freshest gifts of the sea.</p><button class="btn btn-primary" data-dismiss="modal" type="button"><i
                                            class="fa fa-times"></i><span>&nbsp;Close</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Baking</h2>
                                    <p class="item-intro text-muted">Cooking with Love.</p><img
                                        class="img-fluid d-block mx-auto" src="https://images.pexels.com/photos/406152/pexels-photo-406152.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                    <p style="font-size: 21px;font-family: Montserrat, sans-serif;">The tastiest and freshest baking.<br></p><button class="btn btn-primary"
                                        data-dismiss="modal" type="button"><i
                                            class="fa fa-times"></i><span>&nbsp;Close</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Salads</h2>
                                    <p class="item-intro text-muted">Cooking with Love.</p><img
                                        class="img-fluid d-block mx-auto" src="https://images.pexels.com/photos/406152/pexels-photo-406152.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                    <p style="font-size: 21px;font-family: Montserrat, sans-serif;">Salads made from natural vegetables and fresh ingredients.<br></p><button class="btn btn-primary"
                                        data-dismiss="modal" type="button"><i
                                            class="fa fa-times"></i>&nbsp;Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Soups</h2>
                                    <p class="item-intro text-muted">Cooking with Love.</p><img
                                        class="img-fluid d-block mx-auto" src="https://images.pexels.com/photos/406152/pexels-photo-406152.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                    <p style="font-size: 21px;font-family: Montserrat, sans-serif;">Different kinds of soups warming from the inside out.<br></p>
                                    <ul class="list-unstyled"></ul><button class="btn btn-primary" data-dismiss="modal"
                                        type="button"><i class="fa fa-times"></i><span>&nbsp;Close</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center bg-light" role="dialog" tabindex="-1" id="reservationModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <section id="reservation-1" class="bg-light" style="padding-top: 150px;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 text-center"
                                                    style="padding: 10px;padding-top: 0px;padding-bottom: 20px;">
                                                    <h1 class="section-heading text-uppercase">Make a reservation
                                                    </h1>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form id="reservationForm" name="reservationForm" action="logged-in.php" method="post">
                                                        <div class="form-row">
                                                            <div class="col col-md-6">
                                                                <div class="form-group"><input class="form-control"
                                                                 onkeypress="return onlyNumberKey(event)" maxlength="11"
                                                                        type="tel" placeholder="Ваш номер телефона *"
                                                                        required="" style="height: 66px;padding: 20px;" name="reservation_phone">
                                                                </div>
                                                                <div class="form-group"><input class="form-control"
                                                                        type="date" required=""
                                                                        style="height: 66px;padding: 20px;" name="reservation_date"></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"><select class="form-control"
                                                                        style="height: 66px;padding: 20px;" name="reservation_time">
                                                                        <optgroup label="Выберите время">
                                                                            <option value="10:00" selected="">10:00
                                                                            </option>
                                                                            <option value="11:00">11:00</option>
                                                                            <option value="12:00">12:00</option>
                                                                            <option value="13:00">13:00</option>
                                                                            <option value="14:00">14:00</option>
                                                                            <option value="15:00">15:00</option>
                                                                            <option value="16:00">16:00</option>
                                                                            <option value="17:00">17:00</option>
                                                                            <option value="18:00">18:00</option>
                                                                            <option value="19:00">19:00</option>
                                                                            <option value="20:00">20:00</option>
                                                                            <option value="21:00">21:00</option>
                                                                            <option value="22:00">22:00</option>
                                                                            <option value="23:00">23:00</option>
                                                                            <option value="00:00">00:00</option>
                                                                        </optgroup>
                                                                    </select></div>
                                                                <div class="form-group"><select class="form-control"
                                                                        style="padding: 20px;height: 66px;" name="reservation_person">
                                                                        <optgroup label="Количество персон">
                                                                            <option value="1" selected="">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </optgroup>
                                                                    </select></div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="col-lg-12 text-center" style="padding: 10px;">
                                                                <div id="reservationSuccess"></div><input
                                                                    class="btn btn-primary btn-xl text-uppercase"
                                                                    id="reservationButton" name="reservation"
                                                                    type="submit" value="Зарезервировать" />
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <?php
                                                    
                                                        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['reservation']))
                                                        {
                                                            $reserve_phone=$reserve_date=$reserve_time=$reserve_person="";
                                                            //$username=$_POST('name_message');
                                                            $reserve_phone = trim($_POST["reservation_phone"]);
                                                            
                                                            $reserve_date = trim($_POST["reservation_date"]);
                                                            
                                                            $reserve_time = trim($_POST["reservation_time"]);
                                                            
                                                            $reserve_person = trim($_POST["reservation_person"]);

                                                            if (!empty($reserve_person) && !empty($reserve_date) && 
                                                            !empty($reserve_time) && !empty($reserve_person)){
                                                                $UserID = $_SESSION["id"];
                                                                $sql_reserve = "INSERT INTO reservations(UserID,phone,date,time,person)VALUES 
                                                                ('$UserID','$reserve_phone','$reserve_date','$reserve_time','$reserve_person')";
                                                                if (mysqli_query($link, $sql_reserve)) {
                                                                    echo '<script>alert("Reserved");</script>';
                                                                } else {
                                                                    echo "Error: " . $sql_reserve . "" . mysqli_error($link);
                                                                }
                                                            }
                                                            
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </section><button class="btn btn-primary" data-dismiss="modal" type="button"><i
                                            class="fa fa-times"></i><span>&nbsp;Close</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="menuModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body" style="width: 837px;">
                                    <h2 class="text-uppercase" style="padding: 0px;padding-bottom: 40px;">Menu</h2>
                                    <div id="examples" class="text-center bg2-pattern">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div>
                                                        <h3 class="text-left font-weight-bold">
                                                            Snacks
                                                        </h3>
                                                        <br />

                                                        <!-- Item menu -->
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Meat plate</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>850tg/150gr</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Thai meat</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>700tg/100gr</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Lagman</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>700tg/300gr</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Fried chicken</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>650tg/300gr</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Beef with mushrooms</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>700tg/100gr</p>
                                                            </div>
                                                        </div><br>
                                                    </div>

                                                    <div>
                                                        <h3 class="text-left font-weight-bold">
                                                            Salads
                                                        </h3>
                                                        <br />

                                                        <!-- Item menu -->
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Greek</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>350tg/100gr</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Olivier
                                                                </p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>350tg/100gr</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Vegetable Funchesa
                                                                </p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>300tg/100gr</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Caesar</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>350tg/100gr</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Vinaigrette
                                                                </p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>300tg/100gr</p>
                                                            </div>
                                                        </div><br>
                                                    </div>

                                                    <div>
                                                        <h3 class="text-left font-weight-bold">
                                                            Soups
                                                        </h3>
                                                        <br />

                                                        <!-- Item menu -->
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Borsch</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>400tg/400gr</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Mushroom</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>450tg/400gr</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Lentil</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>400tg/400gr</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Kharcho</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>400tg/400gr</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Noodles</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>400tg/400gr</p>
                                                            </div>
                                                        </div><br>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-6">
                                                    <div>
                                                        <h3 class="text-left font-weight-bold">
                                                            Drinks
                                                        </h3>
                                                        <br />

                                                        <!-- Item menu -->
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Juice "DaDa"</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>550tg/1l</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Lemonade</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>400tg/1l</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>«Gorilla»
                                                                </p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>500tg/0.5l</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Water
                                                                </p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>250tg/0.5l</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Coca-Cola, Fanta, Sprite</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>300tg/0.5l</p>
                                                            </div>
                                                        </div><br>
                                                    </div>

                                                    <div>
                                                        <h3 class="text-left font-weight-bold">
                                                            Sweets
                                                        </h3>
                                                        <br />

                                                        <!-- Item menu -->
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Small bars (all kinds)</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>300tg</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Big bars (all kinds)</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>400tg</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Chocolate bar (any)</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>500tg</p>
                                                            </div>
                                                        </div><br>
                                                    </div>

                                                    <div>
                                                        <h3 class="text-left font-weight-bold">
                                                            Baking
                                                        </h3>
                                                        <br>

                                                        <!-- Item menu -->
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Samsa
                                                                </p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>200tg</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Sausage in dough</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>200tg</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Corge</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>200tg</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Croissant
                                                                </p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>300tg</p>
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <p class="text-left" style='font-size:20px;'>Biscuit cake</p>
                                                            </div>
                                                            <div class=" col-lg-6">
                                                                <p style='font-size:20px;'>350tg</p>
                                                            </div>
                                                        </div><br>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-5"><button class="btn btn-primary" data-dismiss="modal"
                                        type="button"><i class="fa fa-times"></i><span>&nbsp;Close</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <script> 
    function onlyNumberKey(evt) { 
          
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
</script>
</body>

</html>