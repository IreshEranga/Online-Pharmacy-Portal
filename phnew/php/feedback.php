<?php

$localhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "pharmacy2";

$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

if (isset($_POST["submit"])){

  $rating = $_POST["rating"];
  $comment = $_POST["comment"];

  $sql = "INSERT INTO feedback (Rating, comment) VALUES (?,?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("is", $rating, $comment);

  if ($stmt->execute()){
    echo "Inserted Successfully";
  } else{
    echo "Error : " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Pharmacy - Feedback</title>
    <link rel="icon" href="../images/mcare.png">
    <link rel="stylesheet" href="../css/feedback.css">
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
                    <li><a href="http://google.com">My Account</a></li>
                    <li><a href="http://facebook.com">Sign In</a></li>
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
        <a href="..//html/home.html">Home</a>
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
        <h2>Give Your Feedback</h2>

        <form action="" method="post">

            <div class="rating">
                <input type="radio" id="star1" name="rating" value="5">
                <label for="star1"></label>
                <input type="radio" id="star2" name="rating" value="4">
                <label for="star2"></label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3"></label>
                <input type="radio" id="star4" name="rating" value="2">
                <label for="star4"></label>
                <input type="radio" id="star5" name="rating" value="1">
                <label for="star5"></label>
                
              </div>
          </div>
            
              <div class="comment-box">
                  <textarea id="comment" name="comment" placeholder="Leave a comment..."></textarea>
                  <button type="submit" name="submit">Submit</button>
              </div>
              
        </form>
       

      <br><br><br><br><br><br><br><br>

          
          
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