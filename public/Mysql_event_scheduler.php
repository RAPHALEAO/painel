<!DOCTYPE html>

<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv=refresh content=5>

<link rel="stylesheet" href="css/style.css">
<link href="images/mysql.ico" rel="icon" type="image/x-icon" />

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<title>Mysql</title>
<?php

$query = $mysqli->query($sqlES);

$servico = $query->fetch_array();

$resultado = $servico['Value'];

echo "</tbody></table>";
echo "<h4>@@EVENT_SCHEDULER = $resultado</h4>";

if($resultado == 'ON'){
?><button  id='btnativar' type='button' onclick="myFunction()" DISABLED>ATIVAR</button><?php
}else{
    ?><button  id='btnativar' type='button' onclick="myFunction()">ATIVAR</button><?php
}

echo "</center>";
echo "</div>";

$mysqli->close();
?>

<script language="javascript">

    function myFunction() {
        $.ajax({
            type: "GET",
            url: "function/eventscheduler.php",
            success: function () {
                location.reload();
            }
        })

        alert("EVENT SCHEDULER ATIVADO COM SUCESSO!");
    }

</script>
</html>