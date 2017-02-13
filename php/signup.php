<?php

session_start();
include 'database.php';

$un = $_POST['username'];
$pw = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$un', '$pw')";
$success = $conn->query($sql);

$_SESSION['user'] = $un;

$result = array("Location" => "php/list.php");

header("Content-Type: application/json");
echo json_encode($result);

?>
