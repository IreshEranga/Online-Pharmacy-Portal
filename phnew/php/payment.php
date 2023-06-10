<?php

$localhost = "localhost"; // localhost
$dbusername = "root"; // username of phpmyadmin
$dbpassword = "";  // password of phpmyadmin
$dbname = "pharmacy2";  // database name
 
// connection string
$conn = mysqli_connect($localhost, $dbusername, $dbpassword, $dbname);

if (isset($_POST["paybtn"])) {
    // get form input data
    $card = $_POST["card"];
    $expiry = $_POST["expiry"];
    $cvv = $_POST["cvv"];
    $delivery_address = $_POST["delivery_address"];
    $contact = $_POST["contact"];

    // prepare the SQL statement
    $sql = "INSERT INTO payment (card_number, expire_date, cvv, delivery_address, contact_number) VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiisi", $card, $expiry, $cvv, $delivery_address, $contact);

    // create a prepared statement
   // $stmt = mysqli_prepare($conn, $sql);

    // bind the parameters with the form input data
   // mysqli_stmt_bind_param($stmt, "iiisi", $card, $expiry, $cvv, $delivery_address, $contact);

    // execute the prepared statement
    // Execute the statement
    if ($stmt->execute()) {
        echo "Inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Gateway</title>
  <link rel="icon" href="../images/mcare.png">
  <link rel="stylesheet" href="../css/payment.css">
</head>
<body>


  <!--header-->
  <div class="header1">
    <div class="logo">
        <img src="../images/mcare.png" alt="" width="150px">

    </div>
    <div class="name"><h1><center>MediCare Pharmacy</center> </h1></div>

    <div class="r2">
        

            <div class="sbtn">
                <input type="search" value="" placeholder="Search Here...."><ion-icon name="search"></ion-icon>
            </div>

            <div class="maccount">
                <ul>
                    <li><a href="../html/myaccountAccountinformation.html">My Account</a></li>
                    <li><a href="../html/SignIn.html">Sign In</a></li>
                    <!--
                        <li><a href="#"><img src="../images/cart.png" alt=""></a></li>
                       -->
                       <li><div class="shopping">
                        <img src="../images/cart.png" >
                        <span class="quantity">0</span>
                    </div></li>
                    
                </ul>
            </div>
       

        

    </div>

    <div class="navbar">
        <a href="../php/home.php">Home</a>
        <a href="..//html/aboutUs.html">About Us</a>
        <a href="../html/contact.html">Contact Us</a>
        <div class="dropdown">
          <button class="dropbtn">Medicine 
            
          </button>
          <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
        </div> 
        
        <div class="dropdown">
          <button class="dropbtn">Medical Devices 
            
          </button>
          <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
        </div> 
        
        <div class="dropdown">
          <button class="dropbtn">Wellness 
            
          </button>
          <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
        </div> 
        
        <div class="dropdown">
          <button class="dropbtn">Personal Care 
            
          </button>
          <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
        </div> 
      </div>
</div> <br><br>

  <div class="container">
    <h1>Payment Gateway</h1>
    
    <form method="post" action="../php/payment.php">
      <!--<h2>Billing Information</h2>
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
      </div>
      <div class="form-group">
        <label for="address">Billing Address</label>
        <textarea id="address" name="address" placeholder="Enter your billing address" required></textarea>
      </div>-->
      
      <h2>Payment Details</h2>
      <div class="form-group">
        <label for="card">Card Number</label>
        <input type="text" id="card" name="card" placeholder="Enter your card number" maxlength="16" required>
      </div>
      <div class="form-group">
        <label for="expiry">Expiration Date</label>
        <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>
      </div>
      <div class="form-group">
        <label for="cvv">CVV</label>
        <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required>
      </div>
      <!--
      <h2>Order Summary</h2>
     <div class="form-group">
        <label for="order-summery">Order Summury</label>
        <textarea id="order-summery" name="order-summery" placeholder="Enter your purchase details" required></textarea>
      </div>
    -->
      <h2>Delivery Details</h2>
      <div class="form-group">
        <label for="delivery-address">Delivery Address</label>
        <textarea id="delivery-address" name="delivery_address" placeholder="Enter your delivery address" required></textarea>
      </div>
      <div class="form-group">
        <label for="contact">Contact Number</label>
        <input type="text" id="contact" name="contact" placeholder="Enter your contact number" pattern="07[0,1,2,5,6,7,8][0-9]{7}" maxlength="10" required>
      </div>
      
      <button type="submit" name="paybtn">Pay Now</button>
    </form>
  </div>


  
<!--Footer-->
<div class="footer">

  <div class="footer-yellow">

      <div class="product-range">
          <br><h3>Product Range</h3><br>
          <a href="index2.html">Health</a><br><br>
          <a href="index2.html">Skin Care</a><br><br>
          <a href="index2.html">Hair Care</a><br><br>
          <a href="index2.html">Personal Care</a><br><br>
          <a href="index2.html">Baby</a><br><br>
          <a href="index2.html">Cosmetic & Fragrances</a><br><br>
          <a href="index2.html">Pet</a>
      </div>

      <div class="information"><br>
          <h3>Imformation</h3><br>
          <a href="..//html/aboutUs.html">About Us</a><br><br>
          <a href="index2.html">Privacy Policy</a><br><br>
      </div>

      <div class="customer-servise"><br><br>
          <h3>Customer Service</h3><br>
          <a href="..//html/FAQ.html">FAQ</a><br><br>
          <a href="../html/contact.html">Contact Us</a><br><br>
      </div>

      <div class="followus"><br><br>
          <h3>Follow Us</h3><br>
          <button class="imgbtn"><img src="../images/facebook.png"></button>
          <button class="imgbtn"><img src="../images/youtube.png"></button>
          <button class="imgbtn"><img src="../images/instagram.png"></button>
          <button class="imgbtn"><img src="../images/twitter.png"></button>
          <button class="imgbtn"><img src="../images/email.png"></button>
          <p>
              No 45/5 <br>
              Maradhana Road, <br>
              Colombo 09, <br>
              Sri Lanka. <br><br>
              <a href="tel:+94 77 123 4567">+94 77 123 4567</a>  <br>
              <a href="tel:+94 37 123 4356">+94 37 123 4356</a>
              
          </p>
      </div>

  </div>

  <div class="footer-black">
      <center><h4 class="h4">ALL RIGHTS RESERVED ©️ 2023 HEALTH CARE PHARMACY</h4></center>
  </div>
  
</div>

  
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
