<!DOCTYPE html>

<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="../css/style.css">
<link href="../images/mysql.ico" rel="icon" type="image/x-icon" />

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<title>Mysql - Eventos</title>

<?php

$query = $mysqli->query($sqlEL);
echo "<div id='container'>";
echo "<center>";
echo "<table>";
echo "<thead>";
echo "<caption>IMATEC - MYSQL EVENTOS</caption>";
echo "<th> NOME DO EVENTO </th>";
echo "<th> DATABASE</th>";
echo "<th> ÚLTIMA EXECUÇÃO </th>";
echo "<th> STATUS </th>";
echo "</thead>";
echo "<tbody>";

while ($dados = $query->fetch_array()) {

    $event_name = strtoupper($dados["event_name"]);
    $database = strtoupper($dados["event_schema"]);
    $last_executed = $dados["last_executed"];
    $style = (date('Y-m-d', strtotime($dados["last_executed"])) != date('Y-m-d')) ? 'color: red; text-align: center;' : 'color: #484848; text-align: center;';
    $status = ($dados["status"] == 'DISABLED') ? 'DESABILITADO' : 'HABILITADO';

    echo "<tr>";
    echo "<td>" . $event_name . "</td>";
    echo "<td>" . $database . "</td>";
    echo "<td style ='{$style}'>" . date('d/m/Y H:i', strtotime($last_executed)) . "</td>";
    echo "<td>" . $status . "</td>";
    echo "</tr>";

}
$mysqli->close();
?>


</html>