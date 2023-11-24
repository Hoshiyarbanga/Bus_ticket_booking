<?php
include_once('connection.php');
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
if(isset($_POST)){
   echo $name=$_POST['name'];
  echo $phone=$_POST['phone'];
   echo $email=$_POST['email'];
   echo $password = $_POST['password'];
   $stmt = $conn->prepare("INSERT INTO `users`(`id`, `name`, `phone`, `email`, `password`) VALUES (NULL,?,?,?,?)");
   $stmt->bind_param('ssss', $name, $phone, $email, $password);
   $stmt->execute();
   $stmt->close();
   header("location:loginform.php");
}
?>