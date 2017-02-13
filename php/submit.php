<?php

$user = $_POST["user"];
$list = $_POST["list"];

$filename = "../lists/" . $user . ".txt";
$file = fopen($filename, "w");

foreach ($list as $todo) {
    fwrite($file, $todo.PHP_EOL);
}

fclose($file);

echo $filename;

?>
