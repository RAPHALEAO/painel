<!DOCTYPE html>

<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="../css/style.css">

<link href="../images/mysql.ico" rel="icon" type="image/x-icon"/>

<title>Mysql - Process List</title>

<?php

$query = $mysqli->query($sqlPL);
echo "<table>";
echo "<thead>";
echo "<caption>IMATEC - MYSQL PROCESSOS</caption>";
echo "<th> ID </th>";
echo "<th> USER </th>";
echo "<th> HOST </th>";
echo "<th> DB </th>";
echo "<th> COMMAND </th>";
echo "<th> TIME </th>";
echo "<th> STATE </th>";
echo "<th> INFO </th>";
echo "</thead>";
echo "<tbody>";

while ($dados = $query->fetch_array()) {

    $id = $dados['id'];
    $user = $dados['user'];
    $host = $dados['host'];
    $db = $dados['db'];
    $command = $dados['command'];
    $time = $dados['time'];
    $state = $dados['state'];
    $info = $dados['info'];

    $pattern = ("/(Lock)|(lock)|(LOCK)/");
    $subject = $state;
    $matches = array();

    $statePregMatch = preg_match($pattern, $subject, $matches);

    $style = ($statePregMatch == 1) ? 'background-color: #8B0000; color: white;' : '';


    echo "<tr style='{$style}'>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $user . "</td>";
    echo "<td>" . $host . "</td>";
    echo "<td>" . $db . "</td>";
    echo "<td>" . $command . "</td>";
    echo "<td>" . $time . "</td>";
    echo "<td>" . $state . "</td>";
    echo "<td>" . $info . "</td>";
    echo "</tr>";

}
echo "</tbody></table>";

$mysqli->close();
?>
</html>