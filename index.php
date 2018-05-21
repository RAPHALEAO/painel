<!DOCTYPE html>

<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv=refresh content=5>

<link rel="stylesheet" href="css/style.css">
<link href="images/mysql.ico" rel="icon" type="image/x-icon" />

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<title>Mysql - teste</title>
<?php
include('function/conn.php');
include('function/sql.php');?>

<div class="container">

    <div class="eventos">
        <?php
        include('function/conn.php');
        include('function/sql.php');
        include('public/Mysql_event.php');?>
    </div>

    <div class="process_list">
        <?php
        include('function/conn.php');
        include('function/sql.php');
        include('public/Mysql_processlist.php')?>
    </div>

    <div class="sincronismo">
        <?php
        include('function/conn.php');
        include('function/sql.php');
        include('public/Mysql_sinc.php')?>
    </div>

    <div class="event_scheduler">
        <?php
        include('function/conn.php');
        include('function/sql.php');
        include('public/Mysql_event_scheduler.php')?>
    </div>

</div>

</html>