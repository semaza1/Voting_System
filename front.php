
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
    <link rel="stylesheet" href="front.css">
    <style>
        .center{
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.preloader {
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100vw;
    background-color: #EDA246;
    opacity: 1;
    transition: opacity 0.75s, visibility 0.75s;
}
.preloader--hidden {
    opacity: 0;
    visibility: hidden;
}
.ring{
  position: absolute;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  animation: ring 2s linear infinite;
}
@keyframes ring {
  0%{
    transform: rotate(0deg);
    box-shadow: 1px 5px 2px #e65c00;
  }
  50%{
    transform: rotate(180deg);
    box-shadow: 1px 5px 2px #18b201;
  }
  100%{
    transform: rotate(360deg);
    box-shadow: 1px 5px 2px #0456c8;
  }
}
.ring:before{
  position: absolute;
  content: '';
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  border-radius: 50%;
  box-shadow: 0 0 5px rgba(255,255,255,.3);
}
span{
  color: #737373;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 1px;
  line-height: 200px;
  animation: text 3s ease-in-out infinite;
}
@keyframes text {
  50%{
    color: #EDA246;
  }
}
    </style>
    <title>Get Started</title>
</head>
<body>
    <div class="preloader">
<div class="center">
        <div class="ring"></div>
        <span>loading...</span>
</div>
</div>
<script>
    
    function hidePreloader() {
        var preloader = document.querySelector('.preloader');
        preloader.style.display = 'none';
    }
    setTimeout(hidePreloader, 2000); // Hide after 3 seconds
    window.addEventListener("load", ()=>{
        document.querySelector(".preloader").classList.add(".preloader--hidden");

        document.querySelector(".preloader").addEventListener("transitionend",()=>{
            document.body.removeChild(document.querySelector(".preloader"));
        });
    });
  </script>
    <section class="heroSectionRight">
        <img src="./Assets/Agahozo+Shalom+Logo.png" alt="ASYV logo" height="150px">
        <div class="headings">
            <h2>Participate In ASYV</h2>
            <h2 style="margin-top: -4.4rem;">Elections <span style="color: #EDA246;">Easily!</span></h2>
        </div>
        <a href="Login.php" style="text-decoration: none;"><button type="button">LOG IN</button></a>
        <a href="adminLogin.php"><h1 class="Admin" style="margin-top: -4.5rem; font-size: 15px;
        font-weight: 600;">Login as Admin</h1></a>
    </section>
    <section class="heroSectionLeft">
        <img src="./Assets/undraw_sign_up_ln1s 1.png" alt="" height="100%" style="width: 100%;
        max-width: 100%;
        margin-left: 16rem;">
    </section>
</body>
</html>