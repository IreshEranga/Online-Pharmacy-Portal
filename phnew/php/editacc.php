
<?php
/*
session_start();
$_SESSION['email']= $email;

include_once 'config.php';

if (isset($_POST['signupbtn'])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $mnumber = $_POST["mnumber"];
    
    $adrs = $_POST["adrs"];
    $dob = $_POST["dob"];
    
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['gender'] = $gender;
    $_SESSION['mnumber'] = $mnumber;
    $_SESSION['adrs'] = $adrs;
    $_SESSION['dob'] = $dob;

    $Update = "UPDATE user SET Fname = '$Fname', Lname= '$Lname', Gender = '$Gender', Mobile_Number = '$Mobile_Number', Email = '$Email'";

    $RunUpdate = mysqli_query($conn, $Update);

    if ($RunUpdate) {
        echo "<script>alert('Updated successfully!')</script>";
    } else {
        echo "<script>alert('Update unsuccessful!')</script>";
    }
}

mysqli_close($conn);*/
?>
      

      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Pharmacy - Edit Account</title>
    <link rel="icon" href="../images/mcare.png">
    <link rel="stylesheet" href="../css/editacc.css">
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
                        <li><a href="../html/SignIn.html">Sign In</a></li><!--
                        <li><a href="#"><img src="../images/cart.png" alt=""></a></li>-->
    
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
                <a href="../html/HEART.html"><h5>HEART</h5></a>
                    <a href="../html/CENTRAL NERVOUS SYSTEM.html"><h5>CENTRAL NERVOUS SYSTEM</h5></a>
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
                <a href="../html/HEART.html"><h5>HEART</h5></a>
                <a href="../html/FIRST AID.html"><h5>FIRST AID</h5></a>
                <a href="../html/HEALTH DEVICES.html"><h5>HEALTH DEVICES</h5></a>
                <a href="#"><h5>SUPPORTS & BRACES</h5></a>
              </div>
            </div> 
            
            <div class="dropdown">
              <button class="dropbtn">Wellness 
                
              </button>
              <div class="dropdown-content">
                <a href="../html/MOTHER & BABY.html"><h5>MOTHER & BABY</h5></a>
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
                <a href="../html/NOURISHMENT.html"><h5>NOURISHMENT</h5></a>
                    <a href="#"><h5>ACCESSORIES</h5></a>
                    <a href="#"><h5>SKIN CARE</h5></a>
                    <a href="#"><h5>HAND & FOOT CARE</h5></a>
                    <a href="#"><h5>BODY CARE</h5></a>
                    <a href="#"><h5>WOMENS PERSONAL CARE</h5></a>
                    <a href="#"><h5>ORAL CARE</h5></a>
              </div>
            </div>
            
            <input type="button" value="logout" class = "right"> 
            <?php if(isset($_POST["logout"])){
            header('Location: logout.php');
            echo "Logout success";
        } ?>
          </div>
    </div>
    
    <!--Form-->
    <div class="frm">
        <form action="../html/SignIn.html" method="post">
            
            <div class="container">
                <h1>Edit Account Details</h1>
                <p><center>Please fill in this form to create an account.</center></p><br><hr><br>

                
                <label for="fname"><b>First Name</b></label><br><br>
                <input type="text" name="fname" placeholder="Enter First Name" required><br><br>

                <label for="lname"><b>Last Name</b></label><br><br>
                <input type="text" name="lname" placeholder="Enter Last Name" required><br><br>

                <label for="gender"><b>Gender</b></label><br><br>
                <input type="radio" name="gender" id="" value="Male"> Male <br>
                <input type="radio" name="gender" id=""> Female <br>
                <input type="radio" name="gender" id=""> Other

                <br><br>
                <label for="mnumber"><b>Mobile Number</b></label><br><br>
                <input type="tel" name="mnumber" placeholder="Enter Mobile Number" pattern="07[0,1,2,5,6,7,8][0-9]{7}" maxlength="10"  required><br><br>

                

                <label for="adrs"><b>Address</b></label><br><br>
                <input type="text" name="adrs" placeholder="Enter Address" required><br><br>

                <label for="dob"><b>Date Of Birth</b></label><br><br>
                <input type="date" name="dob" required><br><br>


                <input type="submit" class="sbtn" name="signupbtn" value="Save">
            
            </div>
            <div class="system">
                <img class="sys" src="../images/37.jpg" alt="">
            </div>

        </form>

       <!---- <div class="login">
            <img class="log" src="../images/signup.jpg" alt="">
        </div>-->

        <!--velidation message-->
        <div id="message" class="container2">

            <div class="container3">
                <h3>Password must contain the following:</h3>

                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    
                <p id="number" class="invalid">A <b>number</b></p>
    
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
            

          </div>

    </div><br><br><br>

    <!--Footer-->
    
<div class="footer">

    <div class="footer-yellow">

        <div class="product-range">
            <br><h2>Product Range</h2><br>
            <a href="../html/HEALTH DEVICES.html">Health</a><br><br>
            <a href="#">Skin Care</a><br><br>
            <a href="#">Hair Care</a><br><br>
            <a href="#">Personal Care</a><br><br>
            <a href="#">Baby</a><br><br>
            <a href="#">Cosmetic & Fragrances</a><br><br>
            <a href="#">Pet</a>
        </div>

        <div class="information"><br>
            <h2>Imformation</h2><br>
            <a href="../html/aboutUs.html">About Us</a><br><br>
            <a href="#">Privacy Policy</a><br><br>
        </div>

        <div class="customer-servise"><br><br>
            <h2>Customer Service</h2><br>
            <a href="../html/FAQ.html">FAQ</a><br><br>
            <a href="../html/contact.html">Contact Us</a><br><br>
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
        <center><h4 class="h4">ALL RIGHTS RESERVED © 2023 HEALTH CARE PHARMACY</h4></center>
    </div>
    <script src="../js/myaccountaccountinformation.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <script src="../js/signup.js"></script>
</body>
</html>
