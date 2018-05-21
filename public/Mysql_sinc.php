<!DOCTYPE html>

<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv=refresh content=5>

<link rel="stylesheet" href="../css/style.css">
<link href="../images/mysql.ico" rel="icon" type="image/x-icon" />

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<title>Mysql - Sincronismo</title>

<?php

$query = $mysqliEm->query($sqlSi);

while ($dado = $query->fetch_array()) {

    $result = $dado[32];

	if($result < 60){

		echo $result . ' SEGUNDOS DE ATRASO';
		
	}
	elseif($result < 3600){

		echo floor($result / 60) . ' MINUTOS DE ATRASO';
		
	}
	elseif($result >= 3600){

		echo '<h1>'.$result . ' SEGUNDOS DE ATRASO'.'</h1>   ';
		echo '<h6>'.floor($result / 3600). '+' . ' HORA(S) DE ATRASO'.'</h6>';
	}

}

$mysqli->close();
?>
</html>