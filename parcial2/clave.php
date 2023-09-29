<html>
<head>
<title>Inicio</title>
<style>
    
</style>
</head>
<body>
<h1>Ingrese sus datos:</h1>
<form action="clave.php" method="post">
Usuario: 
<input type="text" name="usuario">
Contraseña: 
<input type="password" name="contrasena">

<input type="submit" value="Enviar">
</form>
<p>
<table>
<?php

if ( isset( $_POST['usuario'] )&& isset($_POST['contrasena'] )) {

	$usu = $_POST['usuario'];
	
	$cont = $_POST['contrasena'];
	
	if($usu=='Angel' && $cont=='1234'){
		header("Location: indexx.html");
		//header('indexx.html');
		//exit;	
	}else{
		echo "\nUsuario o contraseña Incorrecto...\n";
	}
	
}

?>
</table>
</p>
</body>
</html>