<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Pharmacy - Home Page</title>
    <link rel="icon" href="../images/mcare.png">
    <link rel="stylesheet" href="../css/home.css">
    
    
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
                    <li><a href="../php/accinformation.php">My Account</a></li>
                    <li><a href="../php/SignIn.php">Sign In</a></li><!--
                    <li><a href="#"><img src="../images/cart.png" alt=""></a></li>-->

                    <li><div class="shopping">
                        <img src="../images/cart.png" >
                        <span class="quantity">0</span>
                    </div></li>
                    
                </ul>
            </div>
       
  
        
  
    </div>
  
    <div class="navbar">
        <a href="../php/home.php">Home</a>
        <a href="../php/aboutUs.php">About Us</a>
        <a href="../php/contact.php">Contact Us</a>
        <div class="dropdown">
          <button class="dropbtn">Medicine 
            
          </button>
          <div class="dropdown-content">
            < <a href="../php/heart.php"><h5>HEART</h5></a>
                <a href="../php/nervous.php"><h5>CENTRAL NERVOUS SYSTEM</h5></a>
                <a href="#"><h5>EAR, NOSE, THROAT</h5></a>
				<a href="#"><h5>DIABETES</h5></a>
				<a href="#"><h5>EYE</h5></a>
				<a href="#"><h5>GASTRO INTESTINAL SYSTEM</h5></a>
				<a href="#"><h5>INFECTIONS</h5></a>
				<a href="#"><h5>MALIGNANT DISEASE & IMMUNOSUPPRESSIONS</h5></a>
				<a href="#"><h5>MUSCLE & JOINT</h5></a>
				<a href="#"><h5>VITAMINS & MINERALS</h5></a>
				<a href="#"><h5>OBSTERICS & GYNAECOLOGY & URINARY TRACT</h5></a>
				<a href="#"><h5>RESPIRATORY</h5></a>
				<a href="#"><h5>SKIN (PHARMA)</h5></a>
          </div>
        </div> 
        
        <div class="dropdown">
          <button class="dropbtn">Medical Devices 
            
          </button>
          <div class="dropdown-content">
            <a href="../php/heart.php"><h5>HEART</h5></a>
            <a href="../php/firstaid.php"><h5>FIRST AID</h5></a>
            <a href="../php/healthdevices.php"><h5>HEALTH DEVICES</h5></a>
            <a href="#"><h5>SUPPORTS & BRACES</h5></a>
          </div>
        </div> 
        
        <div class="dropdown">
          <button class="dropbtn">Wellness 
            
          </button>
          <div class="dropdown-content">
            <a href="../php/motherbaby.php"><h5>MOTHER & BABY</h5></a>
                <a href="#"><h5>COUGH, COLD & ALLERGY</h5></a>
                <a href="#"><h5>DIET & NUTRITION</h5></a>
				<a href="#"><h5>BEAUTY SUPPLEMENTS</h5></a>
				<a href="#"><h5>ADULT & DIABETIC CARE</h5></a>
				<a href="#"><h5>PREVENTIVE CARE</h5></a>
				<a href="#"><h5>PAIN & FEVER</h5></a>
				<a href="#"><h5>EYES & EARS</h5></a>
				<a href="#"><h5>TRADITIONAL REMEDIES</h5></a>
				<a href="#"><h5>STOMACH & DIGESTION</h5></a>
				<a href="#"><h5>PET CARE</h5></a>
				<a href="#"><h5>MOSQUITO PROTECTION</h5></a>
				<a href="#"><h5>SEXUAL HEALTH</h5></a>
          </div>
        </div> 
        
        <div class="dropdown">
          <button class="dropbtn">Personal Care 
            
          </button>
          <div class="dropdown-content">
            <a href="../php/nourishment.php"><h5>NOURISHMENT</h5></a>
                <a href="#"><h5>ACCESSORIES</h5></a>
                <a href="#"><h5>SKIN CARE</h5></a>
				<a href="#"><h5>HAND & FOOT CARE</h5></a>
				<a href="#"><h5>BODY CARE</h5></a>
				<a href="#"><h5>WOMENS PERSONAL CARE</h5></a>
				<a href="#"><h5>ORAL CARE</h5></a>
              </div>
            </div> 
          </div>
    </div> <br><br>

    <!--slider-->
    <div class="slideshow-container">

        <!--Full width images and caption text-->
        <div class="mySlides fade">

            <div class="numbertext">1 / 4</div>

            <img src="../images/slider1.jpg" alt="slide image 1" style="width: 100%; height: 500px;">
            <div class="text t1"><p>Welcome to MediCare Pharmacy</p> </div>

        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>

            <img src="../images/slider2.jpg" alt="slide image 1" style="width: 100%; height: 500px;">
            <div class="text t2">Your health is our top priority, and we are dedicated to providing you with convenient access to a wide range of quality medications and healthcare products. MediCare pharmacy offers a seamless and secure shopping experience, allowing you to order your essential medications from the comfort of your own home.</div>
            
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>

            <img src="../images/slider3.jpg" alt="slide image 1" style="width: 100%; height: 500px;">
            <div class="text t3">Your trusted source for all your healthcare needs. <br> At Our Online Pharmacy, we understand the importance of easy access to quality medications and healthcare products. We strive to provide a convenient and reliable online platform where you can confidently order the products you need from the comfort of your own home.</div>
            
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>

            <img src="../images/slider4.jpg" alt="slide image 1" style="width: 100%; height: 500px;">
            <div class="text t4">You can upload your prescriptions and buy quality medications.</div>

        </div>

        <!--Next and previous buttons-->
        <a  class="prev" onclick="plusSlides(-1)">❮</a>

        <a  class="next" onclick="plusSlides(1)">❯</a>
        
    </div>
    <br>

    <!--Radio buttons-->
    <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>

    <br><br><hr>
    <div class="row">
        <div class="content2">
            <img src="../images/deliver.png" alt="">
            <p>Home Delivery</p>
        </div>

        <div class="content2">
            <img src="../images/paysec.png" alt="" style="width: 90px;">
            <p>Pay Securely</p>
        </div>

        <div class="content2">
            <img class="p3" src="../images/cs.jpg" style="width: 90px;" alt="">
            <p>Customer Service Support</p>
        </div>
    </div>
    <hr>
    <br><br><br>

    <div class="row2">
        <div class="content3">
            <img src="../images/prescription1.png" alt="">
           <center><h1 class="uppris">Upload Your Prescription</h1>
            <p class="det1">Upload your prescription and have your medication delivered straight to your home.</p></center> 
            <a href="../php/upoadpre.php"><button class="presbtn">Upload Prescription</button></a> 
           
        </div>

        <div class="content3">
            <img src="../images/Weight-Loss.jpg" alt="">
           <center><h1 class="uppris2">Weight Management</h1>
            <p class="det2">Upload your prescription and have your medication delivered straight to your home.</p></center> 
            <a href="../php/heart.php"><button class="presbtn">Shop Now</button></a>
            
           
        </div>
    </div>

<br><br><br><br>

<div class="row3">
    <div class="content4">
        <img src="../images/menhair.jpg" alt="">
       <h1 class="uppris">Men Hair Growth</h1><center>
        <p class="det1">Oils designed to give a healthy hair for you.</p></center> 
        <a href="../php/nourishment.php"><button class="presbtn">Shop Now</button></a>
       
       
    </div>

    <div class="content4">
        <img src="../images/supliment.jpg" alt="">
       <h1 class="uppris2">Weight Management</h1><center>
        <p class="det2">Provide your body with the necessary protein and other nutritions that your body needs.</p></center> 
        <a href="../php/healthdevices.php"> <button class="presbtn">Shop Now</button></a>
       
       
    </div>
</div>
<br><br><br><br>
<!--Video content-->
<div class="row4">
    <video width="400" controls>
        <source src="../videos/ph.mp4" type="video/mp4">
        Your browser does not support HTML video.
      </video>
</div> <br><br><br>

<!--Footer-->
  
<div class="footer">

    <div class="footer-yellow">

        <div class="product-range">
            <br><h2>Product Range</h2><br>
            <a href="../php/healthdevices.php">Health</a><br><br>
            <a href="#">Skin Care</a><br><br>
            <a href="#">Hair Care</a><br><br>
            <a href="#">Personal Care</a><br><br>
            <a href="#">Baby</a><br><br>
            <a href="#">Cosmetic & Fragrances</a><br><br>
            <a href="#">Pet</a>
        </div>

        <div class="information"><br>
            <h2>Imformation</h2><br>
            <a href="../php/aboutUs.php">About Us</a><br><br>
            <a href="#">Privacy Policy</a><br><br>
        </div>

        <div class="customer-servise"><br><br>
            <h2>Customer Service</h2><br>
            <a href="../php/FAQ.php">FAQ</a><br><br>
            <a href="../php/contact.php">Contact Us</a><br><br>
        </div>

        <div class="followus"><br><br>
            <h2>Follow Us</h2><br>
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

    <script src="../js/home.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>