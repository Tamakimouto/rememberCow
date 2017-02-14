<?php

session_start();
include 'database.php';

$un = $_POST['username'];
$pw = $_POST['password'];

/*
 *
 * Compares username and Password to Regular Expressions
 * Password: ^(?=.*[a-z])([0-9a-z]){3,8}$
 * Username: ^(?=.{6,12}$)([0-9])(.*)([^0-9A-Za-z]+)$
 */
if (preg_match("~^(?=.{6,12}$)([0-9])(.*)([^0-9A-Za-z]+)$~", $pw) && (preg_match("~^(?=.*[a-z])([0-9a-z]){3,8}$~", $un))){
    $sql = "INSERT INTO users (username, password) VALUES ('$un', '$pw')";
    $success = $conn->query($sql);

    $_SESSION['user'] = $un;

    $result = array("location" => "php/list.php");

    header("Content-Type: application/json");
    echo json_encode($result);
}
else {
    header("Location: start.php");
}

?>
