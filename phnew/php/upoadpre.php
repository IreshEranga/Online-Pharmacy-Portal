
<?php

$localhost = "localhost"; // localhost
$dbusername = "root"; // username of phpmyadmin
$dbpassword = "";  // password of phpmyadmin
$dbname = "pharmacy2";  // database name
 
// connection string
$conn = mysqli_connect($localhost, $dbusername, $dbpassword, $dbname);

if (isset($_POST["submitbtn"])) {
  $fre = $_POST["frequency"];
  $fulfil = $_POST["fulfilment"];
  $subs = $_POST["substitutes"];

  // file name with a random number so that similar files don't get replaced
  $pname = rand(1000, 10000) . "-" . $_FILES["prescription-file"]["name"];
 
  // temporary file name to store file
  $tname = $_FILES["prescription-file"]["tmp_name"];
 
  // upload directory path
  $uploads_dir = '../filess';
  
  // TO move the uploaded file to a specific location
  move_uploaded_file($tname, $uploads_dir . '/' . $pname);

  // sql query to insert into database
  $sql = "INSERT into prescription (Frequency, Fulfilment, Substitutes, Prescription_File) VALUES ('$fre', '$fulfil', '$subs', '$pname')";

  if(mysqli_query($conn, $sql)) {
    echo "File Successfully uploaded";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}

?>








<!DOCTYPE html>
<html>

<head>
  <title>Prescription Upload Page</title>
  <link rel="icon" href="../images/mcare.png">
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
      color: #333333;
    }

    .container {
      max-width: 500px;
      margin: 50px auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #333333;
    }

    select,
    input[type="file"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #cccccc;
      border-radius: 5px;
      box-sizing: border-box;
      margin-bottom: 20px;
    }

    input[type="checkbox"] {
      margin-right: 10px;
    }

    .submit-btn {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .submit-btn:hover {
      background-color: #45a049;
    }


    /*header*/
    
*{
    padding: 0;
    margin: 0;
}

.header1{
    background-image: linear-gradient(to right, #defcf9,#cadefc,#c3bef0);
    /*position: sticky;*/
    top: 0;
    z-index: 10;
}
.header1 .name h1{
    text-align: center;
    font-weight: 900;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    margin-top: -20px;
}

.header1 .r2{
    width: 100%;
    display: inline;
}

.logo img{
    margin-bottom: -144px;
}

.r2 .maccount{
    display: inline;
}
.r2 .sbtn input{
    position: relative;
    left: 563px;
    width: 400px;
    height: 40px;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    background-color: white;
    padding-left:15px ;
}

.r2 .sbtn input{
    margin-right: 421px;
    margin-top: 31px;
}

.r2 .maccount ul{
    margin-left: 1200px;
    margin-top: -5px;
}

.r2 .maccount li{
    position: relative;
    bottom: 50px;
    list-style: none;
    display: inline;
    margin-left: 30px;
    margin-top: -20px;
}
a{
    text-decoration: none;
}

/*
.r2 .maccount a img{
  border-radius: 60%;
  background-color: yellow;
  width: 30px;
  height: 30px;
  margin-top: 5px;
}*/



.shopping{
  position: relative;
  right: 60px;
  margin-top:-5px ;
  text-align: right;
}
.header1 .shopping img{
  width: 30px;
  margin-top: -7px;
}
.shopping span{
  background: rgb(150, 12, 230);
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  position: absolute;
  top: -5px;
  left: 80%;
  padding: 3px 10px;
  margin-left: 65px;
}

ion-icon {
    font-size: 30px;
    margin-left: 100px;
    position: relative;
    top: 10px;
  }


  .navbar {
    overflow: hidden;
    background-color: #46acd8;
  }
  
  .navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  .dropdown {
    float: left;
    overflow: hidden;
    margin-left: 80px;
  }
  
  .dropdown .dropbtn {
    font-size: 16px;  
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }
  
  .navbar a:hover, .dropdown:hover .dropbtn {
    background-color: rgb(221, 17, 159);
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .dropdown-content a:hover {
    background-color: #ddd;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }


  /*Footer*/
  .footer {
    width: 1536px;
    margin-left: -8px;
    margin-bottom: -10px;
}

.footer-yellow {
    background-color: #59bae7;
    height: 350px;
}

.footer-black {
    background-color: black;
    height: 20px;
    color: white;
    margin-top: -22px;
}

.product-range {
    margin-left: 120px;
}

.product-range a{
    color: black;
    line-height: 15px;
    padding: 30px;
    margin-top: -25px;
    text-decoration: none;
    font-size: 18px;
    margin-left: -30px;
}

.information {
    margin-top: -310px;
    margin-left: 510px;
}

.information a{
    color: black;
    line-height: 15px;
    padding: 30px;
    margin-top: -250px;
    text-decoration: none;
    font-size: 18px;
    margin-left: -30px;
}

.customer-servise {
    margin-top: -150px;
    margin-left: 850px;
}

.customer-servise a{
    color: black;
    line-height: 15px;
    padding: 30px;
    margin-top: -250px;
    text-decoration: none;
    font-size: 18px;
    margin-left: -28px;
}

.followus {
    margin-left: 1200px;
    margin-top: -149px;
}

.followus img {
    width: 20px;
    height: 20px;
}

.followus .imgbtn {
    background-color: #59bae7;
    border-radius: 0px;
    border-color: #59bae7;
}
  </style>
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
        <a href="..//html/home.html">Home</a>
        <a href="..//html/aboutUs.html">About Us</a>
        <a href="#news">Contact Us</a>
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
    <h1>Prescription Upload Page </h1><br>
    <form  method="post" enctype="multipart/form-data">
      <label for="frequency">Frequency:</label>
      <select id="frequency" name="frequency">
        <option value="one-time" name="frequency">One Time</option>
        <option value="ongoing" name="frequency">Ongoing</option>
      </select>

      <label for="fulfilment">Fulfilment:</label>
      <select id="fulfilment" name="fulfilment">
        <option value="full" name="fulfilment">Full</option>
        <option value="partial" name="fulfilment">Partial</option>
      </select>

      <label for="substitutes">OK to Receive Substitutes:</label>
      <select id="substitutes" name="substitutes">
        <option value="yes" name="substitutes">Yes</option>
        <option value="no" name="substitutes">No</option>
      </select>

      <label for="prescription-file">Upload Prescription File:</label>
      <input type="file" id="prescription-file" name="prescription-file">

      <input type="submit" class="submit-btn" name="submitbtn" value="Submit">
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
          <a href="..//html/contact.html">Contact Us</a><br><br>
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
