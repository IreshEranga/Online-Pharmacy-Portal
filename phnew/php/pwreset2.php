<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmacy2";

//require 'config.php';

$con = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['pwresetbtn'])){

    $email = $_POST['Email'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['conf-pass'];
    
    //sanitize and escape the user inputs
    
    $email = mysqli_real_escape_string($con, $email);
    $newPassword = mysqli_real_escape_string($con, $newPassword);
    $confirmPassword = mysqli_real_escape_string($con, $confirmPassword);
    
    //check the email exist on database
    
    $query = "SELECT * FROM user WHERE Email = '$email'";
    
    $result = mysqli_query($con,$query);
    
    // Check if a user with the given email exists
    if (mysqli_num_rows($result) == 1) {
    
        // Validate the new password and confirmation
    
        if ($newPassword === $confirmPassword) {
    
            // Update the user's password in the database
    
            $updateQuery = "UPDATE user SET Password = '$newPassword' WHERE Email = '$email'";
            $updateResult = mysqli_query($con, $updateQuery);
    
            if ($updateResult) {
                // Password reset successful
                echo "Password reset successful!";
            
                header("Location: ../php/home.php");
               // exit();
            } else {
                // Error updating password
                echo "Error updating password.";
            }
        } else {
            // New password and confirmation do not match
            echo "New password and confirmation do not match.";
        }
    } else {
        // No user found with the given email
        echo "User not found.";
    }

}


// Close the database connection
mysqli_close($con);





?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password reset</title>
    <link rel="icon" href="../images/mcare.png">
    <link rel="stylesheet" href="../css/pwreset2.css">
</head>
<body>

    <div class="form-box">
                <!--text description field-->
                <div class="description-field" id="desc-field">

                    <div class="home-btn">
                        <img id="back-logo" src="../images/back logo.png" alt="">
                        <button type="button" id="H-btn"><a href="../php/home.php">Home</a></button>
                    </div>
        
                    <div class="text-description">
                        <h2>Welcome to MediCare Pharmacy</h2>
        
                        <p>We are here to provide a good service for you <br>and we will try to give our best for you. <br>
                            You are our wealth.</p>
                    </div>
        
                    <div class="read-more">
                        <button type="button" id="RM-btn"><a href="../html/aboutUs.html">Read more</a></button>
                    </div>
        
                </div>
                <!--text description field end-->

        
        <!--form-->
   

        <form id="form-container" action="" method="post">
            <img src="../images/mcare.png" alt="" width="75px">
            <h2>Forgot Your Password?</h2>

            <div class="input-field">
                <input type="text" name="Email" id="email" placeholder="Enter Email..." required>
            </div>

            <div class="input-field">
                <input type="password" name="newPassword" id="newPassword" placeholder="New Password" required>
            </div>

            <div class="input-field">
                <input type="password" name="conf-pass" id="conf-pass" placeholder="Confirm Password" required>
            </div>

            <div class="submit"><a href="../html/pwreset3.html"><button id="next" type="submit" name="pwresetbtn" value="pwresetbtn">Reset Password</button></a>
                
            </div>

        </form>
        <!--form end-->
    </div>

    <script src="../js/pwreset2.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>