<?php
// Linking the configuration file
require 'confi.php';

//get form input data
if(isset($_POST["paybtn"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $card = $_POST["card"];
    $expiry = $_POST["expiry"];
    $cvv = $_POST["cvv"];
    $delivery_address = $_POST["delivery_address"];
    $contact = $_POST["contact"];

    
}

?>