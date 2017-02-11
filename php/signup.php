<?php
session_start();
include 'database.php';

$un = $_POST['username'];//getting info from the index.php
$pw = $_POST['password'];
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];

$sql = "INSERT INTO info (username, password, first_name, last_name) VALUES ('$un', '$pw', '$fn', '$ln')";
$success = $conn->query($sql); //tells the connection to execute the query

header("Location: index.php");
