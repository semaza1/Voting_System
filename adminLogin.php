<?php 
include('adminConn.php');
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Assets/Agahozo+Shalom+Logo.png">
    <link rel="stylesheet" href="adminLogin.css">
    <title>Admin Login</title>
</head>
<body>
    <section class="heroSectionRight">
        <img src="./Assets/Agahozo+Shalom+Logo.png" alt="ASYV logo" height="150px">
        <div class="headings">
            <h2>Welcome</h2>
            <h2>Administrator</h2>
        </div>
        <a href="adminLogin_2.php"><button type="button">LOG IN</button></a>
    </section>
    <section class="heroSectionLeft">
        <img src="./Assets/undraw_sign_up_ln1s 1.png" alt="" height="100%" style="width: 100%;
        max-width: 100%;
        margin-left: 16rem;">
    </section>
</body>
</html>