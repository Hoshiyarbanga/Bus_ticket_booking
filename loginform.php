<?php
include_once('connection.php');
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
 
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $stmt =$conn->prepare("SELECT *FROM `users` WHERE `email` = ?");
  $stmt->bind_param('s',$email);
  $stmt->execute();
  $result = $stmt->get_result();
  $stmt->close();
  if($user && $password === $user['password']){
    echo "login succesfull";
  }else{
    echo "invalid username or password";
  }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN BUS TICKET BOOKING</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
     
      </style>
</head>
<body>
    

    
     <section class="logInForm">
        <div class="container login-container">
            <h2 class="text-center mb-4">Bus Reservation Login</h2>
            <form action="submitlogin.php" method="post" onsubmit="return validateForm()">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" >
                <p class="error" id="usernameError"></p>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" >
                <p class="error" id="passwordError"></p>
              </div>
              <input type="submit" value="Log In" class="btn btn-primary btn-block signbtn login-btn">
            </form><hr>
            <h5>Don't have an account <a href="http://localhost/bus_ticket_booking/Bus_ticket_booking/">Sign Up</a> </h5>
         

          </div>
     </section>
          <!-- script -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/validations.js"></script>

</body>
</html>