<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password reset</title>
    <link rel="icon" href="../images/mcare.png">
    <link rel="stylesheet" href="..//css/pwreset1.css">
</head>
<body>

    <div class="form-box">
                <!--text description field-->
                <div class="description-field" id="desc-field">

                    <div class="home-btn">
                        <img id="back-logo" src="../images/back logo.png" alt="">
                        <button type="button" id="H-btn"><a href="../html/home.html">Home</a></button>
                    </div>
        
                    <div class="text-description">
                        <h2>Welcome to MediCare Pharmacy</h2>
        
                        <p>We are here to provide a good service for you <br>and we will try to give our best for you. <br>
                        You are our wealth.</p>
                    </div>
        
                    <div class="read-more">
                        <button type="button" id="RM-btn"><a href="..//html/aboutUs.html">Read more</a></button>
                    </div>
        
                </div>
                <!--text description field end-->

        
        <!--form-->
        <form id="form-container" action="" method="post">
            <h2>Forgot Your Password?</h2>

            <div class="input-field">
                <input type="text" name="userName" id="userName" placeholder="Enter Username..." required>
            </div>

            <div class="input-field">
                <input type="text" name="Email" id="email" placeholder="Enter Email..." required>
            </div>

            <div class="submit"><a href="../html/pwreset2.html"><button id="next" type="submit" name="next" value="submit">Next</button></a>
                
            </div>

        </form>
        <!--form end-->
    </div>

    <script src="../js/pwreset1.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>
</html>