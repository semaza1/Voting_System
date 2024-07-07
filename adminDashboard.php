<?php 
session_start();
include('adminConn.php');
if(!isset($_SESSION['Email'])){
    header('location:adminLogin_2.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="icon" href="./Assets/Agahozo+Shalom+Logo.png">
    
    <title>Admin Dashboard</title>
</head>
<body>
    <section class="mainContainer">
        <div class="navigationBar" style="border-right: 1.5px solid rgb(134 124 124);">
            <div class="logoDiv">
                <img src="./Assets/Agahozo+Shalom+Logo.png" alt="logo" style="height: 90px; width: 90px;">
                <h2>ELECTION SYSTEM</h2>
            </div>
            
            <ul>
                <!-- dashboard -->
                <li>
                    <div class="navigationLinks">
                        <svg width="20px" height="20px" viewBox="0 0 24.00 24.00" id="meteor-icon-kit__solid-dashboard" fill="#EDA246" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, -1, 0, 0)rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 0H7C8.10457 0 9 0.89543 9 2V7C9 8.10457 8.10457 9 7 9H2C0.89543 9 0 8.10457 0 7V2C0 0.89543 0.89543 0 2 0ZM2 11H7C8.10457 11 9 11.8954 9 13V22C9 23.1046 8.10457 24 7 24H2C0.89543 24 0 23.1046 0 22V13C0 11.8954 0.89543 11 2 11ZM13 0H22C23.1046 0 24 0.89543 24 2V13C24 14.1046 23.1046 15 22 15H13C11.8954 15 11 14.1046 11 13V2C11 0.89543 11.8954 0 13 0ZM13 17H22C23.1046 17 24 17.8954 24 19V22C24 23.1046 23.1046 24 22 24H13C11.8954 24 11 23.1046 11 22V19C11 17.8954 11.8954 17 13 17Z" fill="#EDA246"></path></g></svg>
                        <a href="adminDashboard.php"><p style="margin-left: 0.3rem;">Dashboard</p></a>
                    </div>
                </li>
                <!-- Candidates -->
                <li>
                    <div class="navigationLinks">
                        <svg width="24px" height="24px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#EDA246"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.96991 12.89C10.6599 12.89 12.0299 11.5558 12.0299 9.91C12.0299 8.2642 10.6599 6.93 8.96991 6.93C7.27992 6.93 5.90991 8.2642 5.90991 9.91C5.90991 11.5558 7.27992 12.89 8.96991 12.89Z" stroke="#EDA246" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12.93 13.1C14.37 14.18 15.32 15.84 15.42 17.72C15.43 17.91 15.27 18.07 15.08 18.07H2.84996C2.64996 18.07 2.48996 17.91 2.49996 17.72C2.60996 15.84 3.55997 14.18 5.00997 13.1" stroke="#EDA246" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11.03 12.11H11.02" stroke="#EDA246" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17.1299 14.56C18.2787 14.56 19.2099 13.6556 19.2099 12.54C19.2099 11.4244 18.2787 10.52 17.1299 10.52C15.9812 10.52 15.0499 11.4244 15.0499 12.54C15.0499 13.6556 15.9812 14.56 17.1299 14.56Z" stroke="#EDA246" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M20.3 15.13C20.99 15.84 21.44 16.79 21.5 17.83C21.51 17.97 21.4 18.07 21.26 18.07H17.38" stroke="#EDA246" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <a href="adminRepresentativesPage.php"><p>Candidates</p></a>
                    </div>
                    </li>
                    <!-- students -->
                    <li>
                        <div class="navigationLinks">
                            <svg fill="#EDA246" height="20px" width="20px" version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 256" xml:space="preserve" stroke="#EDA246"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M41,53.1c9.1,0,16.6,7.4,16.6,16.6S50.2,86.2,41,86.2s-16.6-7.4-16.6-16.6S31.9,53.1,41,53.1z M84.7,53.1 c9.1,0,16.6,7.4,16.6,16.6s-7.4,16.6-16.6,16.6s-16.6-7.4-16.6-16.6S75.6,53.1,84.7,53.1z M62.2,11.9c9.1,0,16.6,7.4,16.6,16.6 S71.4,45,62.2,45s-16.6-7.4-16.6-16.6S53.1,11.9,62.2,11.9z M106.9,11.9c9.1,0,16.6,7.4,16.6,16.6S116.1,45,106.9,45 s-16.6-7.4-16.6-16.6S97.8,11.9,106.9,11.9z M149.3,11.9c9.1,0,16.6,7.4,16.6,16.6S158.5,45,149.3,45s-16.6-7.4-16.6-16.6 S140.2,11.9,149.3,11.9z M191.5,11.9c9.1,0,16.6,7.4,16.6,16.6S200.7,45,191.5,45S175,37.6,175,28.5S182.4,11.9,191.5,11.9z M171.1,53.1c9.1,0,16.6,7.4,16.6,16.6s-7.4,16.6-16.6,16.6c-9.1,0-16.6-7.4-16.6-16.6S161.9,53.1,171.1,53.1z M126.1,53.1 c9.1,0,16.6,7.4,16.6,16.6c0,9.1-7.4,16.6-16.6,16.6c-9.2,0-16.6-7.4-16.6-16.6C109.5,60.5,116.9,53.1,126.1,53.1z M214.6,53.1 c9.1,0,16.6,7.4,16.6,16.6c0,9.1-7.4,16.6-16.6,16.6c-9.2,0-16.6-7.4-16.6-16.6C198.1,60.5,205.5,53.1,214.6,53.1z M41.1,53.5 c9,0,16.3,7.3,16.3,16.3s-7.3,16.3-16.3,16.3s-16.3-7.3-16.3-16.3S32.1,53.5,41.1,53.5z M59.5,89.3H40.9H22.2 c-11.3,0-18.5,9.3-18.5,21.1V164c0,9.7,12.7,9.7,12.7,0v-50.2c0-1.2,1-2,2-2c1.2,0,2,0.8,2,2v121.8c0,5,4,9.1,9.1,9.1 c5,0,9.1-4,9.1-9.1v-60.6c0-1.2,1-2,2-2h0.4c1.2,0,2,1,2,2v60.6c0,5,4,9.1,9.1,9.1c5,0,9.1-4,9.1-9.1V113.7c0-1.2,1-2,2-2 c1.2,0,2,1,2,2v50.4c0,9.7,12.7,9.7,12.7,0v-53.6C78.2,98.6,71.1,89.3,59.5,89.3z M144.7,89.3h-18.7h-18.7 c-11.3,0-18.5,9.3-18.5,21.1V164c0,9.7,12.7,9.7,12.7,0v-50.2c0-1.2,1-2,2-2c1.2,0,2,0.8,2,2v121.8c0,5,4,9.1,9.1,9.1 c5,0,9.1-4,9.1-9.1v-60.6c0-1.2,1-2,2-2h0.4c1.2,0,2,1,2,2v60.6c0,5,4,9.1,9.1,9.1c5,0,9.1-4,9.1-9.1V113.7c0-1.2,1-2,2-2 c1.2,0,2,1,2,2v50.4c0,9.7,12.7,9.7,12.7,0v-53.6C163.4,98.6,156.3,89.3,144.7,89.3z M233.7,89.3h-18.7h-18.7 c-11.3,0-18.5,9.3-18.5,21.1V164c0,9.7,12.7,9.7,12.7,0v-50.2c0-1.2,1-2,2-2c1.2,0,2,0.8,2,2v121.8c0,5,4,9.1,9.1,9.1 c5,0,9.1-4,9.1-9.1v-60.6c0-1.2,1-2,2-2h0.4c1.2,0,2,1,2,2v60.6c0,5,4,9.1,9.1,9.1c5,0,9.1-4,9.1-9.1V113.7c0-1.2,1-2,2-2 c1.2,0,2,1,2,2v50.4c0,9.7,12.7,9.7,12.7,0v-53.6C252.4,98.6,245.3,89.3,233.7,89.3z"></path> </g></svg>
                            <a href="adminStudentDashboard.php"><p style="margin-left: 0.3rem;">Students</p></a>
                        </div>
                    </li>
                <!-- statistics -->
                <li>
                    <div class="navigationLinks">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.a{fill:none;stroke:#EDA246;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style></defs><line class="a" x1="2" x2="22" y1="20" y2="20"></line><path class="a" d="M5,20V8.2A.2.2,0,0,1,5.2,8H7.8a.2.2,0,0,1,.2.2V20"></path><path class="a" d="M11,20V4.26667C11,4.11939,11.08954,4,11.2,4h2.6c.11046,0,.2.11939.2.26667V20"></path><path class="a" d="M17,20V11.15c0-.08284.08954-.15.2-.15h2.6c.11046,0,.2.06716.2.15V20"></path></g></svg>
                        <a href="adminStatisticPage.php"><p>Statistics</p></a>
                    </div>
                </li>
                <!-- administrators -->
                <li>
                    <div class="navigationLinks">
                        <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="24px" height="24px" viewBox="0 0 30 30" version="1.1" id="svg822" inkscape:version="0.92.4 (f8dce91, 2019-08-02)" sodipodi:docname="admin.svg" fill="#EDA246"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.3"></g><g id="SVGRepo_iconCarrier"> <defs id="defs816"></defs> <sodipodi:namedview id="base" pagecolor="#EDA246" bordercolor="#EDA246DA246" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="12.610071" inkscape:cx="13.690863" inkscape:cy="14.709664" inkscape:document-units="px" inkscape:current-layer="layer1" showgrid="true" units="px" inkscape:window-width="1366" inkscape:window-height="713" inkscape:window-x="0" inkscape:window-y="0" inkscape:window-maximized="1" showguides="false" inkscape:snap-global="false"> <inkscape:grid type="xygrid" id="grid816"></inkscape:grid> </sodipodi:namedview> <metadata id="metadata819"> <rdf:rdf> <cc:work rdf:about=""> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type> <dc:title> </dc:title> </cc:work> </rdf:rdf> </metadata> <g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(0,-289.0625)"> <path style="opacity:0.91000001;fill:#EDA246;fill-opacity:1;stroke:none;stroke-width:0.5;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" d="M 11.916016 6.28125 A 4 4 0 0 0 7.9160156 10.28125 A 4 4 0 0 0 11.916016 14.28125 A 4 4 0 0 0 15.916016 10.28125 A 4 4 0 0 0 11.916016 6.28125 z M 8.4628906 15.115234 C 5.2252742 16.489124 3.0845987 19.623082 2.9824219 23.138672 C 5.1722039 25.642012 8.3828992 27.230469 11.972656 27.230469 C 13.939081 27.230469 15.782366 26.738864 17.416016 25.896484 C 16.972529 25.303803 16.599939 24.654546 16.285156 23.957031 C 15.297133 21.767701 14.789426 19.133132 14.728516 16.570312 L 14.722656 16.318359 L 12.001953 20.574219 L 8.4628906 15.115234 z M 22.037109 15.308594 C 20.292352 15.308594 17.177734 17.251953 17.177734 17.251953 C 17.287817 21.883593 19.126557 27.009156 22.037109 26.972656 C 22.040309 26.972626 22.043675 26.972696 22.046875 26.972656 C 22.864919 26.962256 23.588979 26.535536 24.179688 25.916016 C 24.770398 25.296496 25.255835 24.472265 25.654297 23.546875 C 26.45122 21.696085 26.896484 19.437792 26.896484 17.576172 L 26.896484 17.308594 L 26.671875 17.166016 C 26.671875 17.166016 25.951124 16.70805 25.029297 16.25 C 24.107471 15.79195 23.009546 15.308594 22.041016 15.308594 L 22.037109 15.308594 z M 22.037109 16.279297 L 22.041016 16.279297 C 22.641611 16.279297 23.726421 16.688174 24.597656 17.121094 C 25.326193 17.483104 25.720925 17.73488 25.896484 17.84375 C 25.857384 19.50574 25.45849 21.539389 24.759766 23.162109 C 24.392753 24.014469 23.950753 24.748774 23.476562 25.246094 C 23.003258 25.742454 22.526857 25.9928 22.037109 26 L 22.037109 16.279297 z " transform="translate(0,289.0625)" id="path852"></path> </g> </g></svg>
                        <a href="addAdminPage.php"><p>Administrators</p></a>
                    </div>
                </li>
            </ul>
            <!-- logout section -->
            <div>
                <div class="lastImg">
                    <img src="./Assets/Rectangle13.png" alt="logoout image" style="width: 100%; max-width: 70%; height: 100%; margin: 2rem 0 0 2rem; opacity: 90%;">
                </div>
                <p class="sleeve">You're on your <br><span>way out</span></p>
                <a href="front.php"><svg width="40px" height="40px" viewBox="-4.8 -4.8 33.60 33.60" fill="none" xmlns="http://www.w3.org/2000/svg" class="logoutSvg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-4.8" y="-4.8" width="33.60" height="33.60" rx="16.8" fill="#EDA246" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2929 4.29289C12.6834 3.90237 13.3166 3.90237 13.7071 4.29289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L13.7071 19.7071C13.3166 20.0976 12.6834 20.0976 12.2929 19.7071C11.9024 19.3166 11.9024 18.6834 12.2929 18.2929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L12.2929 5.70711C11.9024 5.31658 11.9024 4.68342 12.2929 4.29289Z" fill="#fff"></path> </g></svg></a>
            </div>
        </div>
        <!-- Right side -->
        <div class="heroSection">
            <div class="rightNavBar">
                <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-style: normal; color: #48805F; font-size: 1.7rem;">Overview</h1>
                <div class="notProf" style="gap: 2.5rem;">
                <div class="mainNotifications">
                    <a href="adminStatisticPage.php"><svg width="25px" height="25px" class="notifications" style="margin-top: -0.1rem;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(30)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#EDA246" stroke-width="0.288"></g><g id="SVGRepo_iconCarrier"> <path d="M18.7491 9.70957V9.00497C18.7491 5.13623 15.7274 2 12 2C8.27256 2 5.25087 5.13623 5.25087 9.00497V9.70957C5.25087 10.5552 5.00972 11.3818 4.5578 12.0854L3.45036 13.8095C2.43882 15.3843 3.21105 17.5249 4.97036 18.0229C9.57274 19.3257 14.4273 19.3257 19.0296 18.0229C20.789 17.5249 21.5612 15.3843 20.5496 13.8095L19.4422 12.0854C18.9903 11.3818 18.7491 10.5552 18.7491 9.70957Z" stroke="#EDA246" stroke-width="1.5"></path> <path d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="#EDA246" stroke-width="1.5" stroke-linecap="round"></path> </g></svg></a></div>
                    <div class="popup" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <img src="./Assets/Rectangle.png" alt="admin profile" height="35px" width="35px">
                        <span class="popuptext" id="myPopup" style="font-size: 9px;     text-align: center; margin: 0 !important;"><?php echo $_SESSION['Names']; ?></span>
                    </div>
                    
                </div>
            </div>
            <!-- top representatives -->
            <h4 style="margin-left: 2rem; margin-left: 3rem; margin-top: 1rem; font-family: 'Poppins', sans-serif; font-weight: 500; font-style: normal; color: #EDA246;">Top representatives</h4>
            <div class="repCarts">
            <?php 
include('adminConn.php');
$rep="SELECT * FROM `candidate` ORDER BY PositionId ASC";
$rep0 = mysqli_query($conn,$rep);

$count = 0; // Initialize counter variable

while ($r=mysqli_fetch_assoc($rep0)) {
    $CandidateId=$r['CandidateId'];
    $image = $r['candimages'];
    $PositionId=$r['PositionId'];
    $v="SELECT * FROM votes WHERE `CandidateId`=$CandidateId";
    $t="SELECT `Name` FROM `positions` WHERE positionId=$PositionId";
    $t0=mysqli_query($conn,$t);
    $t1=mysqli_fetch_assoc($t0);
    // to count total votes for each position
    $tv="SELECT * FROM votes WHERE PositionId=$PositionId";
    $tv0=mysqli_query($conn,$tv);
    $tv1=mysqli_fetch_assoc($tv0);
    $a=mysqli_query($conn,$v);
    $res=mysqli_fetch_assoc($a);
    if($res){
        $n_votes=mysqli_num_rows($a);
        $to_votes=mysqli_num_rows($tv0);
        $round=round((($n_votes/$to_votes)*100),1);
        $percentage =$round;
        echo "
        <div class=\"cart\">
            <h2 style='font-family: \"Poppins\", sans-serif; font-weight: 700; font-style: normal; color: #48805F; font-size: 1.2rem;'>{$r['Name']}</h2>
            <p style='font-size: 0.9em; color: #EDA246; margin-top: -0.6rem;'>{$t1['Name']}</p>
            <div class=\"perProf\">
                <h1 style='font-size: 2.7rem; color: #CCC6B4;'>$percentage%</h1>
                <img src=\"./Assets/candimages/{$r['candimages']}\" alt='profile pic' height='65px' width= '65px; margin-right='0.8rem' style=\"border-radius: 50%;\">
            </div>
        </div><br>";

        $count++; // Increment counter after displaying content

        if ($count >= 6) { // Check if counter reaches 6
            break; // Exit the loop
        }
    }
}
?>

                
                <!-- second candidate -->
                
            </div>
            <!-- statistics -->
            <h4 style="margin-bottom: 2rem; margin-left: 3rem; margin-top: 3rem; font-family: 'Poppins', sans-serif; font-weight: 500; font-style: normal; color: #EDA246;">Overview Statistics</h4>
            <div class="statisticsCart">
            <div id="piechartVoters"></div>
            </div>
            <!-- table overview -->
            <div class="table-container">
                <h4 style="margin-bottom: 2rem; margin-left: 3rem; margin-top: 3rem; font-family: 'Poppins', sans-serif; font-weight: 500; font-style: normal; color: #EDA246;">Students Voted</h4>
                <table>
                    <thead>
                        <tr>
                            <th>Profile</th>
                            <th>Reg ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Family</th>
                            <th>Grade</th>
                            <th>Class</th>
                            <th>Candidate</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
include('adminConn.php');
$disq = "SELECT users.Name as 'VOTER NAME', users.UserId as 'REG NO', users.Gender as 'Gender', users.Family as 'Family', users.Grade as 'Grade', users.Class as 'Class', candidate.Name as 'Candidaten'
        FROM users
        INNER JOIN votes ON votes.UserId = users.UserId 
        INNER JOIN candidate ON candidate.CandidateId = votes.CandidateId";

$recorquery = mysqli_query($conn, $disq);
while ($disp8 = mysqli_fetch_assoc($recorquery)) {
    echo "
    <tr>
        <td><img src='./Assets/img.png' alt='' style='height: 45px; width: 45px; border-radius: 50%;'></td>
        <td>" . $disp8['REG NO'] . "</td>
        <td>" . $disp8['VOTER NAME'] . "</td>
        <td>" . $disp8['Gender'] . "</td>
        <td>" . $disp8['Family'] . "</td>
        <td>" . $disp8['Grade'] . "</td>
        <td>" . $disp8['Class'] . "</td>
        <td>" . $disp8['Candidaten'] . "</td>
        <td style='color: #EDA246;'>Voted</td>
    </tr>
    ";
}
?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
<!--  this is for chart to load very fast -->

<?php
include('adminConn.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get total number of voters
$sql_total_voters = "SELECT COUNT(*) as total_voters FROM users";
$result_total_voters = mysqli_query($conn, $sql_total_voters);
$row_total_voters = mysqli_fetch_assoc($result_total_voters);
$total_voters = $row_total_voters['total_voters'];

// Get number of votes
$sql_votes = "SELECT COUNT(*) as total_votes FROM votes";
$result_votes = mysqli_query($conn, $sql_votes);
$row_votes = mysqli_fetch_assoc($result_votes);
$total_votes = $row_votes['total_votes'];

// Calculate number of people who did not vote
$not_voted = $total_voters - $total_votes;

// Create data array
$data = array(
    "total_votes" => $total_votes,
    "not_voted" => $not_voted
);

// Encode data as JSON
$chartData = json_encode($data);
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(function() {
        drawChart(<?php echo $chartData; ?>);
    });

    function drawChart(chartData) {
        var container = document.createElement('div');
        container.id = 'chart_container';
        document.getElementById('piechartVoters').appendChild(container);

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Data');
        data.addColumn('number', 'Value');
        data.addRows([
            ['Total Votes', parseInt(chartData.total_votes)],
            ['Not Voted', parseInt(chartData.not_voted)]
        ]);

        var options = {
            title: 'Voting Statistics',
            is3D: true,
            height: 300,
            width: 600,
            pieHole: 0.4,
            colors: ['#48805F', '#EDA246'],
        };

        var chart = new google.visualization.PieChart(container);
        chart.draw(data, options);
    }
</script>

</body>
</html>