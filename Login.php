<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <link rel="icon" href="./Assets/Agahozo+Shalom+Logo.png">
    <title>Student Login</title>
</head>
<body>
<section>
  
   <div class="form-box">
     <div class="form-value">
       <form action="adminConn.php" method="POST">
         <h2>LOG IN</h2>

         <div class="inputbox">
           <input type="text" name="studentid" required>
           <label for="" id="label">Student ID</label>
         </div>
         <div class="inputbox">
           <input type="password" id="password" name="studentpswd" required>
           <label for="password">Password</label>
         </div>
         <button type='submit' name='studentlogin'>LOG IN</button>
         <p style="text-align: center; padding-top: 10px;
         font-size: 12px; font-weight: 600; cursor: pointer; 
         " class="forget">Forgot Password</p>
       </form>
     </div>
     
   </div>
 </section>
</body>
</html>