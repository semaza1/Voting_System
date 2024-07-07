<?php 
session_start();
include('adminConn.php');
if(!isset($_SESSION['name'])){
    header('location:Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="welcomeSuccessfully.css">
    <link rel="icon" href="./Assets/Agahozo+Shalom+Logo.png">
</head>
<body>
    <div class="container">
        <div class="message_one">
        <!--  -->
            <h2>HI <span style="color: #48805F;"><?php echo $_SESSION['name'];?>!</span></h2>
            <h2>WELCOME TO <span class="a_letter">A</span><span class="s_letter">S</span><span class="y_letter">Y</span><span class="v_letter">V</span></h2>
            <h2><span class="word">ELECTION</span> SYSTEM</h2>
            <div style="height: 25px; width: 183px; background-color: #EDA246;" class="behind"></div>
        </div>
        <div class="message_two">
            <p>Your account has been created</p>
            <p>successfully.</p>
        </div>
        <a href="userLandingPage.php" style="text-decoration: none;"><button>CONTINUE</button></a>
    </div>
</body>
</html>