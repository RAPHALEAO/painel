<?php

include('conn.php');

$sql  = "SET GLOBAL event_scheduler = ON;";
$sql1 = "SET @@global.event_scheduler = ON";
$sql2 = "SET GLOBAL event_scheduler = 1;";
$sql3 = "SET @@global.event_scheduler = 1;";

$query = $mysqli->query($sql);
$query = $mysqli->query($sql1);
$query = $mysqli->query($sql2);
$query = $mysqli->query($sql3);

$mysqli->close();