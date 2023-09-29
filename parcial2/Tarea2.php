<html>
    <head>
        <title>tarea2</title>
    </head>
    <body>
        <table border="3">
        <?php
	    for ($x=0; $x<20; $x++){
	        $valor[$x]=rand(1,100);
	    }
	    echo "<tr>";
	    for ($x=19; $x>=10; $x--){
	        echo "<td>Elemento ".($x+1);
	    }
	    echo "</tr>";
	    echo "<br><br><tr>";
	    for ($x=19; $x>=10; $x--){
	    	echo "<td>".$valor[$x];
	    }
	    echo "</tr><br><tr>";
	    for ($x=9; $x>=0; $x--){
	        echo "<td>Elemento ".($x+1);
	    }
	    echo "</tr><br><tr>";
	    for ($x=9; $x>=0; $x--){
	        echo "<td>".($valor[$x]);
	    }
	    echo "</tr>";
	    echo"<br><br>";
	?>
	
	</table>
	<?php
	for( $x=0; $x<20;$x++){
		        echo "<td> $valor[$x] ";
		    }
	?>
    </body>
</html>