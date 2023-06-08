<?php


//The connection Object 

$con = new mysqli("localhost", "root","","pharmacy2");

//check connection
 if($con->connect_error){
    die("Connection failed: " .$con->connect_error);
 }


?>