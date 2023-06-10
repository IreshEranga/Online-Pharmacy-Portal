<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Pharmacy - Shopping Cart</title>
    <link rel="icon" href="../images/mcare.png">
    <link rel="stylesheet" href="../css/cart.css">
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
     </div>

    <h1>Shopping Cart</h1><br><br>

    <!--order details-->
    <div class="orderdetails">
        <form action="">
            <table border="1" width="50%">
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Qunatity</th>
                    <th>Sub Total</th>
                </tr>
                
                <tr>
                    <td>name</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <br><br><br>
            <button class="Clearcart" type="reset">Clear shopping Cart</button>
        </form>
    </div>

    <!--Summary-->

    <div class="summary">
        <h3>Summary</h3><br><hr><br>

        <form action="">
            <h4 class="q">Sub Total</h4>
            <h4 class="a">500.00</h4>
            <h4 class="q">Tax</h4>
            <h4 class="a">500.00</h4>
            <h4 class="q">Order Total</h4>
            <h4 class="a">500.00</h4>

            <button class="submit" type="submit">Proceed to Checkout</button> <br><br>
            <button class="Proceed">Continue Shopping</button>
        </form>
    </div>

<div class="accept">
    <h2>We Accept </h2>
    <img src="../images/card.png" alt="">
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

        <div class="information"><br><br>
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
<script src="../js/cart.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>