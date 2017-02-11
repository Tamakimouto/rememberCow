<?php
session_start();
include 'database.php';//for connection

$un = $_POST['username'];//getting info from the index.php
$pw = $_POST['password'];

//$sql = "INSERT INTO info (username, password) VALUES ('$un', '$pw')";
//$success = $conn->query($sql); //tells the connection to execute the query
$sql = "SELECT * FROM info WHERE username = '$un' AND password = '$pw'";
$success = $conn->query($sql); //tells the connection to execute the query

if(!$result = $success->fetch_assoc())//if no results===============================
{
  echo "Username or password is incorrect";
}
else
{
    $_SESSION['first_name'] = $result['first_name'];
    $_SESSION['id'] = $result['id'];
}

header("Location: list.php");
