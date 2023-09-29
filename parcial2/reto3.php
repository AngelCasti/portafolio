<html>
<head>
<title>jajaja</title>
<style>
    td,tr{
        padding:20px;
	border: 0.5px solid black;
    }
    table{
        background-color:beige;
	font-size:30px;
	text-align:center;
	border: 2px solid black;
    }
</style>
</head>
<body>
<h1>Bucle While 2</h1>
<form action="reto3.php" method="post">
¿Cuantas filas?
<input type="text" name="filas">
¿Cuantas columnas?
<input type="text" name="columnas">
¿Que color?
<input type="text" name="color">
<input type="submit" value="Enviar">
</form>
<p>
<table>
<?php

if ( isset( $_POST['filas'] )&& isset($_POST['columnas'] ) && isset($_POST['color'] )) {

	$fila = $_POST['filas'];
	
	$columna = $_POST['columnas'];
	
	$colo= $_POST['color'];
	
	for($num=0; $num<$fila; $num++){
		echo "<tr>";
		for($num2=0; $num2<$columna;$num2++){
			echo "<td><font color='$colo'> L </font></td>";
		}
	}
	echo "Se acabo.\n";
}
?>
</table>
</p>
</body>
</html>