<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Interface</title>
    <link rel="stylesheet" href="votingInterface.css">
    <link rel="icon" href="./Assets/Agahozo+Shalom+Logo.png">
    <!-- <link rel="stylesheet" href="votingInterface.js"> -->
    
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navigation bar styles */
        nav {
            background-color: #eda2464a;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            /* position: relative; */
            z-index: 10; /* Ensure the nav bar stays above the bubbles */
        }

        .logo {
            width: 80px; /* Adjust according to your logo size */
        }

        .nav-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #48805F;
            font-weight: 600;
        }

        .logout {
            padding: 8px 16px;
            border: none;
            background-color: #eda24600;
            color: #000;
            cursor: pointer;
        }
        a {
            color: #000;
            text-decoration: none;
        }
        .logout:link {
            color: #000;
        }
        .logout:hover {
            color: #48805F; 
            text-decoration: none;
            border-bottom: 2px solid transparent;
            transition: 0.8s ease;
        }

        /* Bubbles container */
        .bubbles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        /* Individual bubble style */
        .bubble {
            position: absolute;
            bottom: -150px;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            animation: rise 10s infinite ease-in;
        }

        .bubble:nth-child(2) {
            width: 20px;
            height: 20px;
            left: 20%;
            animation-duration: 12s;
            animation-delay: 2s;
        }

        .bubble:nth-child(3) {
            width: 25px;
            height: 25px;
            left: 40%;
            animation-duration: 14s;
            animation-delay: 4s;
        }

        .bubble:nth-child(4) {
            width: 15px;
            height: 15px;
            left: 60%;
            animation-duration: 16s;
            animation-delay: 6s;
        }

        .bubble:nth-child(5) {
            width: 30px;
            height: 30px;
            left: 80%;
            animation-duration: 18s;
            animation-delay: 8s;
        }

        @keyframes rise {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateY(-800px);
                opacity: 0;
            }
        }
        .welcomeBack {
            font-size: 1.5rem;
            color: #cf9830;
            margin-right: 0.5rem;
            font-weight: 600;
        }
    </style>
</head>
<body>

<?php 
    session_start();
    include('adminConn.php');
    if(!ISSET($_SESSION['ID'])){
        header('location:front.php');
    }
    $qury = "SELECT * FROM votes WHERE `UserId`='{$_SESSION['ID']}'";
    $r=mysqli_query($conn,$qury);
    $w=mysqli_fetch_assoc($r);
    if($w){
        header('location: congs.php'); 
    }
    else{
        echo "<nav>
        <img src='.\Assets\Agahozo+Shalom+Logo.png' alt='Logo' class='logo'>
        <div class='nav-brand'><span class=\"welcomeBack\">Welcome</span> {$_SESSION['name']}</div>
        <a href='front.php' class='logout'>LOG OUT</a>
    </nav>";

?>
    

    <section class='mainContainer'>
    <!-- <h1 style="text-align: center; padding: 3rem 0; font-size: 25px; color: #EDA246;">CHOOSE A CANDIDATE</h1> -->
    <h2 style="margin-left: 3rem; font-size: 32px; color: #48805F;font-weight: 700; padding-top: 2.6rem;
    text-align: center;" >Choose Your Prefered Candidate</h2>
    <div class="candCont">
        <?php 
        include('adminConn.php');
        $levels=$_SESSION['Level'];

    if($levels==111){
        $query1 = "SELECT * FROM positions WHERE (positionId = 22 OR positionId = 23)";
    }else{

        $query1 = "SELECT * FROM positions WHERE NOT (positionId = 22 OR positionId = 23)";
    }
        $record1 = mysqli_query($conn, $query1);
        echo "<form action=\"votesSubmit.php\" method=\"POST\">";
        while($row1 = mysqli_fetch_assoc($record1)){
            
                echo " <h1 style=\"text-align: center; padding: 1rem 0; font-size: 18px; color: #48805F; margin-top: 5rem; font-weight: 600;\">". $row1['Name']."</h1>";
            echo "<div class=\"president\">";    
            $query = "SELECT * FROM `candidate` WHERE `PositionId` = " . $row1['positionId'];

                    $record = mysqli_query($conn, $query);
                

                    
            echo "<div class=\"displayCand\">";

            while ($row = mysqli_fetch_assoc($record)) {
                echo "
                <div class=\"cand1\" style=\"padding: 0 1rem;\">
                    <div class=\"profile\">
                        <img src=\"./Assets/candimages/{$row['candimages']}\" alt=\"\" height=\"100px\" width=\"100px\" class=\"images\">
                        <p style=\"font-weight: 600;\">{$row['Name']}</p>
                    </div>
                    <div class=\"desc\">
                        <p style=\"font-weight: 600;\">Biography</p>
                        <p>{$row['Bio']}</p>
                    </div>
                    <button onclick=\"showPopUp({$row['CandidateId']})\">VIEW PROFILE</button>
                    <label class=\"radio-container\">
                        <input type= \"radio\" value=\"{$row['CandidateId']}\" name=\"{$row1['positionId']}\" required>
                        <span class=\"checkmark\"></span>   
                    </label>
                </div>";
            }
            echo "</div>";
            
            }
                
                    echo "<div style='text-align: center; float:right'>"; // Start a container with center alignment
                    echo "<button type=\"submit\" name=\"submitVotes\" style=\"    margin-right: 33rem;
                    margin-top: 7rem;
                    width: 250px;
                    height: 50px;\" position: \"relative\";
                    bottom: 0;
                    right: 38rem;
                    top: 20rem;\">SUBMIT</button>";
                    echo "</div>"; // End of the container


                echo "</form>";

                ?>
            
        </div>
    </div>
    
    </section>
    <?php  }?>
    <footer>
        <div class="logo2">
            <img  src="./Assets/Agahozo+Shalom+Logo.png" alt="logo" style="height: 50px; width: 50px; margin-left: -2rem;">
        </div>
        <div class="copyRight">
            <p style="font-size: 0.8em;">&copy; 2024. Developed by <span style="color: #48805F; font-weight: 600;">Alain</span> and <span style="color: #48805F; font-weight: 600;">Emmanuel</span>. All rights reserved.
                By using this site, you agree to all terms and conditions.</p>
        </div>
        <div class="footerLinks">
            <ul class="socialMedia">
                <li>
                    <a href="https://www.youtube.com/results?search_query=agahozo+shalom+youth+village" target="_blank"><svg style="position: static; top: 0;" width="24px" height="24px" viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="none" fill-rule="evenodd"> <path d="M36,72 L36,72 C55.882251,72 72,55.882251 72,36 L72,36 C72,16.117749 55.882251,-3.65231026e-15 36,0 L36,0 C16.117749,3.65231026e-15 -2.4348735e-15,16.117749 0,36 L0,36 C2.4348735e-15,55.882251 16.117749,72 36,72 Z" fill="#FF0002"></path> <path d="M31.044,42.269916 L31.0425,28.6877416 L44.0115,35.5022437 L31.044,42.269916 Z M59.52,26.3341627 C59.52,26.3341627 59.0505,23.003199 57.612,21.5363665 C55.7865,19.610299 53.7405,19.6012352 52.803,19.4894477 C46.086,19 36.0105,19 36.0105,19 L35.9895,19 C35.9895,19 25.914,19 19.197,19.4894477 C18.258,19.6012352 16.2135,19.610299 14.3865,21.5363665 C12.948,23.003199 12.48,26.3341627 12.48,26.3341627 C12.48,26.3341627 12,30.2467232 12,34.1577731 L12,37.8256098 C12,41.7381703 12.48,45.6492202 12.48,45.6492202 C12.48,45.6492202 12.948,48.9801839 14.3865,50.4470165 C16.2135,52.3730839 18.612,52.3126583 19.68,52.5135736 C23.52,52.8851913 36,53 36,53 C36,53 46.086,52.9848936 52.803,52.4954459 C53.7405,52.3821478 55.7865,52.3730839 57.612,50.4470165 C59.0505,48.9801839 59.52,45.6492202 59.52,45.6492202 C59.52,45.6492202 60,41.7381703 60,37.8256098 L60,34.1577731 C60,30.2467232 59.52,26.3341627 59.52,26.3341627 L59.52,26.3341627 Z" fill="#FFF"></path> </g> </g></svg></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/agahozoshalom/?hl=en" target="_blank"><svg style="position: static; top: 0;" width="22px" height="22px" viewBox="0 0 2500 2500" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><radialGradient id="0" cx="332.14" cy="2511.81" r="3263.54" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#fa8f21"></stop><stop offset=".78" stop-color="#d82d7e"></stop></radialGradient><radialGradient id="1" cx="1516.14" cy="2623.81" r="2572.12" gradientUnits="userSpaceOnUse"><stop offset=".64" stop-color="#8c3aaa" stop-opacity="0"></stop><stop offset="1" stop-color="#8c3aaa"></stop></radialGradient></defs><path d="M833.4,1250c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7S833.4,1480.11,833.4,1250m-225.26,0c0,354.5,287.36,641.86,641.86,641.86S1891.86,1604.5,1891.86,1250,1604.5,608.14,1250,608.14,608.14,895.5,608.14,1250M1767.27,582.69a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M745,2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27s373.28,1.31,505.15,7.27c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M734.65,7.57c-133.07,6.06-224,27.16-303.41,58.06C349,97.54,279.38,140.35,209.81,209.81S97.54,349,65.63,431.24c-30.9,79.46-52,170.34-58.06,303.41C1.41,867.93,0,910.54,0,1250s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43S349,2402.37,431.24,2434.37c79.56,30.9,170.34,52,303.41,58.06C868,2498.49,910.54,2500,1250,2500s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95,97.54,2068.86,65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17,1.51,1589.56,0,1250.1,0S868,1.41,734.65,7.57" fill="url(#0)"></path><path d="M833.4,1250c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7S833.4,1480.11,833.4,1250m-225.26,0c0,354.5,287.36,641.86,641.86,641.86S1891.86,1604.5,1891.86,1250,1604.5,608.14,1250,608.14,608.14,895.5,608.14,1250M1767.27,582.69a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M745,2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27s373.28,1.31,505.15,7.27c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M734.65,7.57c-133.07,6.06-224,27.16-303.41,58.06C349,97.54,279.38,140.35,209.81,209.81S97.54,349,65.63,431.24c-30.9,79.46-52,170.34-58.06,303.41C1.41,867.93,0,910.54,0,1250s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43S349,2402.37,431.24,2434.37c79.56,30.9,170.34,52,303.41,58.06C868,2498.49,910.54,2500,1250,2500s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95,97.54,2068.86,65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17,1.51,1589.56,0,1250.1,0S868,1.41,734.65,7.57" fill="url(#1)"></path></g></svg></a>
                </li>
                <li>
                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fasyv" target="_blank"><svg style="position: static; top: 0;" width="24px" height="24px" viewBox="126.444 2.281 589 589" xmlns="http://www.w3.org/2000/svg" fill="#000000"><circle cx="420.944" cy="296.781" r="294.5" fill="#2daae1"></circle><path d="M609.773 179.634c-13.891 6.164-28.811 10.331-44.498 12.204 16.01-9.587 28.275-24.779 34.066-42.86a154.78 154.78 0 0 1-49.209 18.801c-14.125-15.056-34.267-24.456-56.551-24.456-42.773 0-77.462 34.675-77.462 77.473 0 6.064.683 11.98 1.996 17.66-64.389-3.236-121.474-34.079-159.684-80.945-6.672 11.446-10.491 24.754-10.491 38.953 0 26.875 13.679 50.587 34.464 64.477a77.122 77.122 0 0 1-35.097-9.686v.979c0 37.54 26.701 68.842 62.145 75.961-6.511 1.784-13.344 2.716-20.413 2.716-4.998 0-9.847-.473-14.584-1.364 9.859 30.769 38.471 53.166 72.363 53.799-26.515 20.785-59.925 33.175-96.212 33.175-6.25 0-12.427-.373-18.491-1.104 34.291 21.988 75.006 34.824 118.759 34.824 142.496 0 220.428-118.052 220.428-220.428 0-3.361-.074-6.697-.236-10.021a157.855 157.855 0 0 0 38.707-40.158z" fill="#ffffff"></path></svg></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/AgahozoShalom/" target="_blank"><svg style="position: static; top: 0;" width="24px" height="24px" viewBox="126.445 2.281 589 589" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><circle cx="420.945" cy="296.781" r="294.5" fill="#3c5a9a"></circle><path d="M516.704 92.677h-65.239c-38.715 0-81.777 16.283-81.777 72.402.189 19.554 0 38.281 0 59.357H324.9v71.271h46.174v205.177h84.847V294.353h56.002l5.067-70.117h-62.531s.14-31.191 0-40.249c0-22.177 23.076-20.907 24.464-20.907 10.981 0 32.332.032 37.813 0V92.677h-.032z" fill="#ffffff"></path></g></svg></a>
                </li>
            </ul>
        </div>
    </footer>
    <div class="popUpContainer" id="show">
   <div class="profilePopUp">
    <svg style="position: absolute; cursor: pointer; margin-left: 14rem; top: 1.2rem; display: inline-block;" onclick="hidePop()" width="20px" height="20px" viewBox="-133.12 -133.12 778.24 778.24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet\" fill="#000000" stroke="#000000" stroke-width="0.00512"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-133.12" y="-133.12\" width="778.24" height="778.24" rx="389.12" fill="#eda246" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#fff" d="M325.297 256l134.148-134.148c19.136-19.136 19.136-50.161 0-69.297c-19.137-19.136-50.16-19.136-69.297 0L256 186.703L121.852 52.555c-19.136-19.136-50.161-19.136-69.297 0s-19.136 50.161 0 69.297L186.703 256L52.555 390.148c-19.136 19.136-19.136 50.161 0 69.297c9.568 9.567 22.108 14.352 34.648 14.352s25.081-4.784 34.648-14.352L256 325.297l134.148 134.148c9.568 9.567 22.108 14.352 34.648 14.352s25.08-4.784 34.648-14.352c19.136-19.136 19.136-50.161 0-69.297L325.297 256z"></path></g></svg>
    <div class="upper">
        <img id='imi' src="" alt="" height="100px" width="100px">
        <h1 id='Cname' style=" font-size: 15px; font-family: 'Poppins', sans-serif; color: #EDA246;"></h1>
    </div>
    <div class="lower">
        <div class="bio">
            <h1 class="about">ABOUT</h1>
            <hr style="background-color: #EDA246;
            width: 110px;
            height: 5px;
            border: none;">
            <h1 style="padding: 1rem 0; font-size: 15px; font-family: 'Poppins', sans-serif;">SHORT BIOGRAPH</h1>
            <p id='bio' ></p>
        </div>
        <div class="manifesto">
            <h1 style="padding: 1rem 0; font-size: 15px; font-family: 'Poppins', sans-serif;">ELECTION MANIFESTO</h1>
            <p id='manifesto'></p>
        </div>
        <button onclick="hidePop()" class="backer">Back</button>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function showPopUp(CandidateId) {
    // AJAX request to fetch data from PHP script
    $.ajax({
        url: 'fetchData.php',
        type: 'GET',
        data: { CandidateId: CandidateId }, // Pass the userId as parameter
        dataType: 'json',
        success: function(response) {
            // Update HTML elements with fetched data
            $('#bio').text(response.Bio);
            $('#manifesto').text(response.Manifesto);
            $('#Cname').text(response.Name);

            var imagePath = './Assets/candimages/' + response.candimages;
            $('#imi').attr('src', imagePath);
            // Show the pop-up
            $('#show').fadeIn();
        },
        error: function(xhr, status, error) {
            // Handle error
            console.error('Error fetching data:', status, error);
        }
    });
}

    // function showPopUp(value) {
    //     const popUp = document.getElementById('show');
    //     const imi=document.getElementById('imi');
    //     const bio=document.getElementById('bio');
    //     const manifesto=document.getElementById('manifesto');
    // }
    // popUp.style.display = "flex";   
        function hidePop() {
            const popUp = document.getElementById('show');
            popUp.style.display = "none";   
        }
    </script>
   


</body>
</html>
