 <?php
include_once('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $stmt =$conn->prepare("SELECT *FROM `users` WHERE `name` = ?");
  $stmt->execute();
  $user= $stmt->mysqli_fetch_assoc();
  

}
 ?>
 
 <section>
      <nav class="navbar navbar-expand-lg bg-primary">
          <div class="container">
            <a class="navbar-brand" href="#">HRTC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Ticket Enquery</a>
                <a class="nav-link" href="#">Cancel Ticket</a>
                <a class="nav-link" href="#">Feedback</a>
                <a class="nav-link" href="#">About Us</a>
                <a class="nav-link" href="http://localhost/bus_ticket_booking/loginform.php">log in</a>
              </div>
            </div>
          </div>
        </nav>    
  </section>