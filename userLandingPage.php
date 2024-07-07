<?php 
session_start();
include('adminConn.php');
if(!isset($_SESSION['ID'])){
    header('location:front.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userLandingPage.css">
    <link rel="icon" href="./Assets/Agahozo+Shalom+Logo.png">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <title>Home Page</title>
</head>
<body>
    <section class="navigationBar">
        <div class="logo">
            <img src="./Assets/Agahozo+Shalom+Logo.png" alt="Agahozo Shalom Youth Village logo" class="logo-image">
        </div>
        <div class="navLinks">
        <ul>
                <a href="#candidateDisplay"><li>ONGOING ELECTIONS</li></a>
            
                <a href="#" onclick="showPop()"><li>CHANGE PASSWORD</li></a>
                <li>
                    <svg onclick="showPopup()" width="24px" height="24px" viewBox="-8.8 -8.8 37.60 37.60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#fff" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-8.8" y="-8.8" width="37.60" height="37.60" rx="18.8" fill="#EdA246" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.04"></g><g id="SVGRepo_iconCarrier"> <title>profile_round [#1342]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -2159.000000)" fill="#fff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M100.562548,2016.99998 L87.4381713,2016.99998 C86.7317804,2016.99998 86.2101535,2016.30298 86.4765813,2015.66198 C87.7127655,2012.69798 90.6169306,2010.99998 93.9998492,2010.99998 C97.3837885,2010.99998 100.287954,2012.69798 101.524138,2015.66198 C101.790566,2016.30298 101.268939,2016.99998 100.562548,2016.99998 M89.9166645,2004.99998 C89.9166645,2002.79398 91.7489936,2000.99998 93.9998492,2000.99998 C96.2517256,2000.99998 98.0830339,2002.79398 98.0830339,2004.99998 C98.0830339,2007.20598 96.2517256,2008.99998 93.9998492,2008.99998 C91.7489936,2008.99998 89.9166645,2007.20598 89.9166645,2004.99998 M103.955674,2016.63598 C103.213556,2013.27698 100.892265,2010.79798 97.837022,2009.67298 C99.4560048,2008.39598 100.400241,2006.33098 100.053171,2004.06998 C99.6509769,2001.44698 97.4235996,1999.34798 94.7348224,1999.04198 C91.0232075,1998.61898 87.8750721,2001.44898 87.8750721,2004.99998 C87.8750721,2006.88998 88.7692896,2008.57398 90.1636971,2009.67298 C87.1074334,2010.79798 84.7871636,2013.27698 84.044024,2016.63598 C83.7745338,2017.85698 84.7789973,2018.99998 86.0539717,2018.99998 L101.945727,2018.99998 C103.221722,2018.99998 104.226185,2017.85698 103.955674,2016.63598" id="profile_round-[#1342]"> </path> </g> </g> </g> </g></svg>
                </li>
            </ul>
        </div>
    </section>
    
    <section class="heroSection">
        <h1 style="position: absolute; top: 10rem; left: 14rem; color: #ffff; font-size: 4rem; z-index: 10;">
            Welcome & <span id="typed-text" style="color: #EDA246;">Enjoy!</span> 
        </h1>
        <script>
            const options = {
                strings: ['Relish!', 'Be fond!', 'Vote!'],
                typeSpeed: 50, // Typing speed in milliseconds
                backSpeed: 40, // Backspacing speed in milliseconds
                loop: true, // Set to true if you want to loop the strings
                showCursor: false, // Option to show cursor
            };
            
            const typed = new Typed('#typed-text', options);
        </script>
        <a href="votingInterface.php"><button class="voteBtn">VOTE</button></a>
        
        <ul class="slides">
            <input type="radio" name="radio-btn" id="img-1" checked />
            <li class="slide-container">
            <div class="slide">
              <img src="./Assets/cover.png" />
                </div>
            <div class="nav">
              <label for="img-6" class="prev">&#x2039;</label>
              <label for="img-2" class="next">&#x203a;</label>
            </div>
            </li>
        
            <input type="radio" name="radio-btn" id="img-2" />
            <li class="slide-container">
                <div class="slide">
                  <img src="./Assets/22541.jpg" />
                </div>
            <div class="nav">
              <label for="img-1" class="prev">&#x2039;</label>
              <label for="img-3" class="next">&#x203a;</label>
            </div>
            </li>
        
            <input type="radio" name="radio-btn" id="img-3" />
            <li class="slide-container">
                <div class="slide">
                  <img src="./Assets/337667699_900988587619904_3285560462582121940_n.jpg" />
                </div>
            <div class="nav">
              <label for="img-2" class="prev">&#x2039;</label>
                <label for="img-4" class="next">&#x203a;</label>
            </div>
            </li>
        
            <input type="radio" name="radio-btn" id="img-4" />
            <li class="slide-container">
                <div class="slide">
                    <img src="./Assets/P1370380.JPG" />
                </div>
            <div class="nav">
                <label for="img-3" class="prev">&#x2039;</label>
                <label for="img-5" class="next">&#x203a;</label>
            </div>
            </li>
        
            <input type="radio" name="radio-btn" id="img-5" />
            <li class="slide-container">
                <div class="slide">
                    <img src="./Assets/436209933_18425329258023513_4466184935530401292_n.jpg" />
                </div>
            <div class="nav">
                <label for="img-4" class="prev">&#x2039;</label>
                <label for="img-6" class="next">&#x203a;</label>
            </div>
            </li>
        
            <input type="radio" name="radio-btn" id="img-6" />
            <li class="slide-container">
                <div class="slide">
                    <img src="./Assets/440218527_18427464418023513_8275753052759737294_n.jpg" />
                </div>
            <div class="nav">
                <label for="img-5" class="prev">&#x2039;</label>
                <label for="img-1" class="next">&#x203a;</label>
            </div>
            </li>
        
            <li class="nav-dots">
                <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                <label for="img-5" class="nav-dot" id="img-dot-5"></label>
                <label for="img-6" class="nav-dot" id="img-dot-6"></label>
            </li>
        </ul>
    </section>
    
    
    <section id="candidateDisplay" class="thirdCandidateDisplay">
        <h5>16 CANDIDATES FOR THE STUDENT REPRESENTATIVES</h5>
        <div class="profiles">
    <?php 
        include('adminConn.php');
        $query1 = "SELECT * FROM positions";
        $data = mysqli_query($conn,$query1);
        while($record=mysqli_fetch_assoc($data)){
            $positionId = $record['positionId'];
            $positionName = $record['Name']; // Fetch positionId from the current record
            $query2 = "SELECT * FROM candidate WHERE `PositionId`= '$positionId'";
            $data1 = mysqli_query($conn,$query2); // Changed from mysqli_connect to mysqli_query
            // Fetch candidate data using mysqli_fetch_assoc
            while($candidate = mysqli_fetch_assoc($data1)) {
                echo"<div class=\"candidateProfile\">";
                echo"<p style=\"font-size: 0.9rem; color: #48805F; font-weight: 600;\">{$positionName}</p>";
                echo"<img src=\"./Assets/candimages/{$candidate['candimages']}\" alt=\"profile image\" style=\"height: 70px; width: 70px; border-radius: 50%;\">";
                 // Use $record instead of $data
                echo"<p style=\"font-size: 0.8rem; color: #EDA246; font-weight: 600;\">{$candidate['Name']}</p>"; // Fetch candidate name from $candidate array
                echo"</div>";
            }
        }
    ?>
</div>

            <!-- Add more profiles as needed -->
        </div>
    </section>
    
    <!-- Pop-up section -->

    <div id="Background">
        <div id="changePass">
        <div class="addPos">
                <svg style="position: absolute; cursor: pointer; margin-left: 14rem; top: 1rem; display: inline-block;" onclick="hidePop()" width="20px" height="20px" viewBox="-133.12 -133.12 778.24 778.24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet" fill="#000000" stroke="#000000" stroke-width="0.00512"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-133.12" y="-133.12" width="778.24" height="778.24" rx="389.12" fill="#eda246" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#fff" d="M325.297 256l134.148-134.148c19.136-19.136 19.136-50.161 0-69.297c-19.137-19.136-50.16-19.136-69.297 0L256 186.703L121.852 52.555c-19.136-19.136-50.161-19.136-69.297 0s-19.136 50.161 0 69.297L186.703 256L52.555 390.148c-19.136 19.136-19.136 50.161 0 69.297c9.568 9.567 22.108 14.352 34.648 14.352s25.081-4.784 34.648-14.352L256 325.297l134.148 134.148c9.568 9.567 22.108 14.352 34.648 14.352s25.08-4.784 34.648-14.352c19.136-19.136 19.136-50.161 0-69.297L325.297 256z"></path></g></svg>
                <form action="adminConn.php" method="POST">
                    <h1 style="font-size: 20px; color: #48805F;">Change Password</h1>
                    <div class="inputbox">
                        <input type="password" name="old"required>
                        <label for="" id="label">Old Password</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="new" required>
                        <label for="" id="label">New Password</label>
                    </div>
                    <button onclick="changeArlet()" style="margin-top: 7rem;" type="submit" name="changePswd">Change</button>
                </form>
            </div>
        </div>
    </div>

    <div id="popBackground">
        <div id="popup">
            <div class="headClose">
                <h1 style="font-family: 'Poppins', sans-serif;
                font-weight: 600; color: #48805F;
                font-style: normal; font-size: 1.5em;">Account</h1>
                <svg class="icon5" onclick="hidePopup()" width="20px" height="20px" viewBox="-133.12 -133.12 778.24 778.24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet" fill="#000000" stroke="#000000" stroke-width="0.00512"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-133.12" y="-133.12" width="778.24" height="778.24" rx="389.12" fill="#eda246" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#fff" d="M325.297 256l134.148-134.148c19.136-19.136 19.136-50.161 0-69.297c-19.137-19.136-50.16-19.136-69.297 0L256 186.703L121.852 52.555c-19.136-19.136-50.161-19.136-69.297 0s-19.136 50.161 0 69.297L186.703 256L52.555 390.148c-19.136 19.136-19.136 50.161 0 69.297c9.568 9.567 22.108 14.352 34.648 14.352s25.081-4.784 34.648-14.352L256 325.297l134.148 134.148c9.568 9.567 22.108 14.352 34.648 14.352s25.08-4.784 34.648-14.352c19.136-19.136 19.136-50.161 0-69.297L325.297 256z"></path></g></svg>
                <img src="./Assets/Rectangle.png" alt="profile" height="100px" width="100px"
                style="margin-top: 2rem;">
                <p style="font-family: 'Poppins', sans-serif; font-weight: 600; color:#EDA246 ;
                font-style: normal; font-size: 0.8em;"><?php echo $_SESSION['name']; ?></p>
            </div>
            <br>
            <hr>
            <br>
            <h2 style="font-family: 'Poppins', sans-serif;
            font-weight: 600; color: #EDA246;
            font-style: normal; font-size: 1.2em;margin-left: 2rem;">Account Settings</h2>
            <p style="font-family: 'Poppins', sans-serif;
            font-style: normal; font-size: 0.8em;margin-left: 2rem;">Edit your personal information</p>
            <p style="font-family: 'Poppins', sans-serif;
            font-style: normal; font-size: 0.8em;margin-left: 2rem;">Passord reset</p>
            <br>
            <hr>
            <br>
            <h2 style="font-family: 'Poppins', sans-serif;
            font-weight: 600; color: #EDA246;
            font-style: normal; font-size: 1.2em;margin-left: 2rem;">Web Settings</h2>
            <p style="font-family: 'Poppins', sans-serif;
            font-style: normal; font-size: 0.8em;margin-left: 2rem;">Notifications</p>
            <br>
            <hr>
            <br>
            <h2 style="font-family: 'Poppins', sans-serif;
            font-weight: 600; color: #EDA246;
            font-style: normal; font-size: 1.2em;margin-left: 2rem;">Support</h2>
            <p style="font-family: 'Poppins', sans-serif;
            font-style: normal; font-size: 0.8em;margin-left: 2rem;">Contact us</p>
            <a href="front.php"><button id="closeButton" onclick="hidePopup()">LOG OUT</button></a>
        </div>
    </div>
    </div>
    <footer>
        <div class="logo2">
            <img src="./Assets/Agahozo+Shalom+Logo.png" alt="logo" style="height: 50px; width: 50px; margin-left: -2rem;">
        </div>
        <div class="copyRight">
        <p style="font-size: 0.8em;">&copy; 2024. Developed by <span style="color: #48805F; font-weight: 600;">Alain</span> and <span style="color: #48805F; font-weight: 600;">Emmanuel</span>. All rights reserved.
                By using this site, you agree to all terms and conditions.</p>  
        </div>
        <div class="footerLinks">
            <ul class="socialMedia">
                <li>
                    <a href="https://www.youtube.com/results?search_query=agahozo+shalom+youth+village" target="_blank"><svg width="24px" height="24px" viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="none" fill-rule="evenodd"> <path d="M36,72 L36,72 C55.882251,72 72,55.882251 72,36 L72,36 C72,16.117749 55.882251,-3.65231026e-15 36,0 L36,0 C16.117749,3.65231026e-15 -2.4348735e-15,16.117749 0,36 L0,36 C2.4348735e-15,55.882251 16.117749,72 36,72 Z" fill="#FF0002"></path> <path d="M31.044,42.269916 L31.0425,28.6877416 L44.0115,35.5022437 L31.044,42.269916 Z M59.52,26.3341627 C59.52,26.3341627 59.0505,23.003199 57.612,21.5363665 C55.7865,19.610299 53.7405,19.6012352 52.803,19.4894477 C46.086,19 36.0105,19 36.0105,19 L35.9895,19 C35.9895,19 25.914,19 19.197,19.4894477 C18.258,19.6012352 16.2135,19.610299 14.3865,21.5363665 C12.948,23.003199 12.48,26.3341627 12.48,26.3341627 C12.48,26.3341627 12,30.2467232 12,34.1577731 L12,37.8256098 C12,41.7381703 12.48,45.6492202 12.48,45.6492202 C12.48,45.6492202 12.948,48.9801839 14.3865,50.4470165 C16.2135,52.3730839 18.612,52.3126583 19.68,52.5135736 C23.52,52.8851913 36,53 36,53 C36,53 46.086,52.9848936 52.803,52.4954459 C53.7405,52.3821478 55.7865,52.3730839 57.612,50.4470165 C59.0505,48.9801839 59.52,45.6492202 59.52,45.6492202 C59.52,45.6492202 60,41.7381703 60,37.8256098 L60,34.1577731 C60,30.2467232 59.52,26.3341627 59.52,26.3341627 L59.52,26.3341627 Z" fill="#FFF"></path> </g> </g></svg></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/agahozoshalom/?hl=en" target="_blank"><svg width="22px" height="22px" viewBox="0 0 2500 2500" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><radialGradient id="0" cx="332.14" cy="2511.81" r="3263.54" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#fa8f21"></stop><stop offset=".78" stop-color="#d82d7e"></stop></radialGradient><radialGradient id="1" cx="1516.14" cy="2623.81" r="2572.12" gradientUnits="userSpaceOnUse"><stop offset=".64" stop-color="#8c3aaa" stop-opacity="0"></stop><stop offset="1" stop-color="#8c3aaa"></stop></radialGradient></defs><path d="M833.4,1250c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7S833.4,1480.11,833.4,1250m-225.26,0c0,354.5,287.36,641.86,641.86,641.86S1891.86,1604.5,1891.86,1250,1604.5,608.14,1250,608.14,608.14,895.5,608.14,1250M1767.27,582.69a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M745,2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27s373.28,1.31,505.15,7.27c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M734.65,7.57c-133.07,6.06-224,27.16-303.41,58.06C349,97.54,279.38,140.35,209.81,209.81S97.54,349,65.63,431.24c-30.9,79.46-52,170.34-58.06,303.41C1.41,867.93,0,910.54,0,1250s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43S349,2402.37,431.24,2434.37c79.56,30.9,170.34,52,303.41,58.06C868,2498.49,910.54,2500,1250,2500s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95,97.54,2068.86,65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17,1.51,1589.56,0,1250.1,0S868,1.41,734.65,7.57" fill="url(#0)"></path><path d="M833.4,1250c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7S833.4,1480.11,833.4,1250m-225.26,0c0,354.5,287.36,641.86,641.86,641.86S1891.86,1604.5,1891.86,1250,1604.5,608.14,1250,608.14,608.14,895.5,608.14,1250M1767.27,582.69a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M745,2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27s373.28,1.31,505.15,7.27c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M734.65,7.57c-133.07,6.06-224,27.16-303.41,58.06C349,97.54,279.38,140.35,209.81,209.81S97.54,349,65.63,431.24c-30.9,79.46-52,170.34-58.06,303.41C1.41,867.93,0,910.54,0,1250s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43S349,2402.37,431.24,2434.37c79.56,30.9,170.34,52,303.41,58.06C868,2498.49,910.54,2500,1250,2500s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95,97.54,2068.86,65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17,1.51,1589.56,0,1250.1,0S868,1.41,734.65,7.57" fill="url(#1)"></path></g></svg></a>
                </li>
                <li>
                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fasyv" target="_blank"><svg width="24px" height="24px" viewBox="126.444 2.281 589 589" xmlns="http://www.w3.org/2000/svg" fill="#000000"><circle cx="420.944" cy="296.781" r="294.5" fill="#2daae1"></circle><path d="M609.773 179.634c-13.891 6.164-28.811 10.331-44.498 12.204 16.01-9.587 28.275-24.779 34.066-42.86a154.78 154.78 0 0 1-49.209 18.801c-14.125-15.056-34.267-24.456-56.551-24.456-42.773 0-77.462 34.675-77.462 77.473 0 6.064.683 11.98 1.996 17.66-64.389-3.236-121.474-34.079-159.684-80.945-6.672 11.446-10.491 24.754-10.491 38.953 0 26.875 13.679 50.587 34.464 64.477a77.122 77.122 0 0 1-35.097-9.686v.979c0 37.54 26.701 68.842 62.145 75.961-6.511 1.784-13.344 2.716-20.413 2.716-4.998 0-9.847-.473-14.584-1.364 9.859 30.769 38.471 53.166 72.363 53.799-26.515 20.785-59.925 33.175-96.212 33.175-6.25 0-12.427-.373-18.491-1.104 34.291 21.988 75.006 34.824 118.759 34.824 142.496 0 220.428-118.052 220.428-220.428 0-3.361-.074-6.697-.236-10.021a157.855 157.855 0 0 0 38.707-40.158z" fill="#ffffff"></path></svg></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/AgahozoShalom/" target="_blank"><svg width="24px" height="24px" viewBox="126.445 2.281 589 589" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><circle cx="420.945" cy="296.781" r="294.5" fill="#3c5a9a"></circle><path d="M516.704 92.677h-65.239c-38.715 0-81.777 16.283-81.777 72.402.189 19.554 0 38.281 0 59.357H324.9v71.271h46.174v205.177h84.847V294.353h56.002l5.067-70.117h-62.531s.14-31.191 0-40.249c0-22.177 23.076-20.907 24.464-20.907 10.981 0 32.332.032 37.813 0V92.677h-.032z" fill="#ffffff"></path></g></svg></a>
                </li>
            </ul>
        </div>
    </footer>
    <script src="userLandingPage.js"></script>
</body>
</html>
