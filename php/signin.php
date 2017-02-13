<?php

session_start();
include 'database.php';

$un = $_POST['username'];
$pw = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$un' AND password = '$pw'";
$success = $conn->query($sql);

$res = array();

if (!$result = $success->fetch_assoc()) {
    $res["error"] = "Username or password is incorrect";
} else {
    $_SESSION["user"] = $un;
    $res["location"] = "php/list.php";
    $res["error"] = "";
}

header("Content-Type: application/json");
echo json_encode($res);

?>
