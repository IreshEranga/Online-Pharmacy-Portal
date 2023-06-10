

<?php

$localhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "pharmacy2";

$conn = mysqli_connect($localhost, $dbusername, $dbpassword, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST['psw'];

    $query = "SELECT * FROM user WHERE Email = '$email' AND Password = '$password'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) == 1) {
        // User found, login successful
        echo "Login successful!";
        // Add your code to redirect the user to the desired page
    } else {
        // User not found or invalid credentials
        echo "Invalid email or password!";
    }
}

?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Pharmacy Log In</title>
    <link rel="icon" href="../images/mcare.png">
    <link rel="stylesheet" href="../css/SignIn.css">
</head>
<body>
       <!--LogIn form--> 
    <div class="login_form">
        <form  class="form" method="post">
            <h1 class="form_title"> Log In </h1>

            <div class="form_div">
                <input type="email" class="form_input" placeholder=" " name="email" required>
                <label class="form_label">Email</label>
            </div>

            <div class="form_div">
                <input type="password" class="form_input" placeholder=" " name="psw" required>
                <label class="form_label">Password</label>
            </div>

            <!--captcha-->
            <div id="captcha" class="form_div">
                <div class="preview"></div>
                <div class="captcha_form"> 
                    <input type="text" id="captcha_form" class="form_input_captcha" placeholder=" " required>
                    <label class="form_label_captcha">Enter Captcha</label>

                    <button class="captcha_refersh">

                        <!--reload image-->
                        <img src="../images/reload.jpeg" alt="" width="35px" height="60px">
                        <i class="fa fa-refresh"></i>
                    </button>
                </div>
            </div>

            <!--Submit button-->
            <input type="submit" class="form_button" value="Log In">

            <p>If you don't have an account <br> click here to <a href="signUp.html">Sign Up</a> </p> <br>
            <label>Forgot password? <a href="..//html/pwreset1.html">Reset password</a></label>
        </form>
        
    </div>
    
    <div class="boxright">
        <h3>MediCare Pharmacy</h3><br><br><br>
        <p>We are the leading online pharmacy in Sri Lanka. <br>
            We are ready to supply your medication whenever you want.</p>
    </div>
    
    <script src="../js/signin.js"></script>
</body>
</html>