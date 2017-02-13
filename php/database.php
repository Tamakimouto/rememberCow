<?php

$conn = mysqli_connect("localhost", "root", "10068366", "cow");

if(!$conn) {
    die("Cannot connect, check database setting".mysqli_connect_error());
}

?>
