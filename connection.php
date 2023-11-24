<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus_ticket_book";

   $conn = new mysqli($servername,$username,$password,$dbname);
   if($conn->connect_error){
      die("connection error");
   }
?>