<?php

$conn = mysqli_connect("localhost:3306", "root", "Nghia123", "cow");
if(!$conn)
  {
    die("Cannot connect, check database setting".mysqli_connect_error());
  }

 ?>
