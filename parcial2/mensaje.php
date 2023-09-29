<html>
<head>
<title>Inicio</title>
</head>
<style>
	body{
	background-color: beige;
        font-style: bold;
        font-size: 30px;
	}
	a{
	text-decoration:none;
	}
</style>
<body>
<p>
<?php
    if ( isset( $_POST['usuario'] ) && isset( $_POST['contra']) ) {
        $usuario = $_POST['usuario'];
        $contraseña= $_POST['contra'];
        $counter = 0;
        if($usuario=="admin" && $contraseña=="admin123"){
            echo "<center><b>ADMITIDO<br><br></b>";
            echo "<a href=index2.html>Ingresar al index</a></center>";
        }else{
            echo "<center><b>Usuario o contraseña incorrectas</b><br><br>";
            echo "<a href=index.php>Regresar</a></center>";
        }
    }else if($usuario==" " || $contraseña==" "){
        echo "<b><center>Ningun campo debe estar vacio</b><br><br>";
        echo "<a href=index.php>Regresar</a></center>";
    }
?>
</p>
</body>
</html>
