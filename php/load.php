<?php

session_start();

$filename = "../lists/" . $_SESSION['user'] . ".txt";
$file = fopen($filename, "r");

$result = array("user" => $_SESSION['user'], "data" => array());

if ($file) {
    while(($line = fgets($file)) !== false)
        array_push($result['data'], $line);
}

fclose($file);

header("Content-Type: application/json");
echo json_encode($result);

?>
