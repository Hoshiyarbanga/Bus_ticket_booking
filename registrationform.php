
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

    
     <section class="logInForm">
        <div class="container login-container">
            <h2 class="text-center mb-4" style="color: #fff;">Create Account</h2>
            <form action="registration.php" method="post" onsubmit="return validationOnRegistration()">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your username" >
                <p id="errorName" style="color:red;"></p>
              </div>
              
              <div class="mb-3">
                <label for="name" class="form-label">Phone</label>
                <input type="tel" class="form-control" name="phone"  id="username" placeholder="Enter your username" >
                <p id="errorPhone" style="color:red;"></p>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="password" placeholder="Enter your email" >
                <p id="errorEmail" style="color:red;"></p>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" >
                <p id="errorPassword" style="color:red;"></p>
              </div>
              <input type="submit" class="btn btn-primary signbtn btn-block"><hr>
              <h5>Alreday have an account <a href="http://localhost/bus_ticket_booking/loginform.php">Log In</a></h5>
            </form>
          </div>
     </section>
          <!-- script -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
      function validationOnRegistration(){
      let name = document.getElementById('name');
      let errorName = document.getElementById('errorName');
      if(name.value===""){
       errorName.innerHTML="please enter a name";
       return false;
      }

    }
    </script>

</body>
</html>