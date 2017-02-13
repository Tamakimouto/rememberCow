<?php
session_start();
session_destroy();


date_default_timezone_set('AMERICA/NEW_YORK');
$oneMonth = 60 * 60 * 24 * 30 + time();
$date_and_time_temp = new DateTime();
$date_and_time = date_format($date_and_time_temp, 'm/d/Y H:i:s');
//setcookie('visit', $date_and_time, $oneMonth);
setcookie('visit', $date_and_time, $oneMonth);


header("Location: ../start.php");
