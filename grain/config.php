<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$data = array(
    array()
);
$names=array(            /* array is created */
    'server',
    'username',
    'password',
    'name'
);
$data[0][0]="localhost"; /* two dimensional array is initialized to store the database credentials */
$data[0][1]="root";
$data[0][2]="";
$data[0][3]="aituhana";
for($x=0;$x<1;$x++){
    for ($i=0;$i<4;$i++){
        define($names[$i],$data[$x][$i]);
    }
}
/* Attempt to connect to MySQL database */
$link = mysqli_connect(server, username, password, name);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>	