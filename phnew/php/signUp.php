<?php

// Linking the configuration file
require 'config.php';

// Get form input data
if (isset($_POST["signupbtn"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $mnumber = $_POST["mnumber"];
    $email = $_POST["email"];
    $adrs = $_POST["adrs"];
    $dob = $_POST["dob"];
    $psw = $_POST["psw"];
    $psw_repeat = $_POST["psw-repeat"];

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO user (Fname, Lname, Gender, Mobile_Number, Email, Address, Date_Of_Birth, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind the statement
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssissss", $fname, $lname, $gender, $mnumber, $email, $adrs, $dob, $psw);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $con->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Pharmacy - Sign Up</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
    

    <div class="frm">
        <form action="../php/signup.php" method="post">
            <div class="container">
                <h1>Sign Up</h1>
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
                <input type="tel" name="mnumber" placeholder="Enter Mobile Number" pattern="07[1,2,5,6,7,8][0-9]{7}" maxlength="10"  required><br><br>

                <label for="email"><b>E mail</b></label><br><br>
                <input type="email" name="email" placeholder="Enter Your E mail " required><br><br>

                <label for="adrs"><b>Address</b></label><br><br>
                <input type="text" name="adrs" placeholder="Enter Address" required><br><br>

                <label for="dob"><b>Date Of Birth</b></label><br><br>
                <input type="date" name="dob" required><br><br>

                <label for="psw"><b>Password</b></label><br><br>
                <input type="password" id="psw" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>

                <label for="psw-repeat"><b>Repeat Password</b></label><br><br>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" onkeyup="check()" required><br><br>
                <span id="msg"></span><br><br>

                <a href="../html/signIn.html"><input type="submit" class="sbtn" name="signupbtn" value="SignUp"></a> 
            
            </div>
        </form>

        <div class="login">
            <img class="log" src="../images/signup.jpg" alt="">
        </div>

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

    </div>


    
    <script src="../js/signup.js"></script>
</body>
</html>