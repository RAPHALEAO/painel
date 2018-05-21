<?php

$mysqli = new mysqli('192.168.0.32', 'root', 'host%$9898', 'db-imatec');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$mysqliEm = new mysqli('192.168.1.249', 'rleao', 'Rdl261292sql', 'db-imatec');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}