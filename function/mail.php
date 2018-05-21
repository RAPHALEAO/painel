<?php

$message = include("Mysql_event.php");

$to = "rleao@imatec.com.br";
$subject = "Eventos - Mysql";
$txt = $message;
$headers = "From: ephyllus@imatec.com.br" . "\r\n";

echo $to,$subject,$txt,$headers;

mail($to,$subject,$txt,$headers);