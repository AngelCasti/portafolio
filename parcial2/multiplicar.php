<html>
<head>
<title>Bucle While</title>
<style>
    td,tr{
        padding:20px;
    }
    table{
        background-color:beige;
	font-size:30px;
	text-align:center;
    }
</style>
</head>
<body>
<h1>Bucle While</h1>
<table border="1">
<?php
if ( isset( $_POST['number'] )){
$number = $_POST['number'];
$counter = 1;
echo "<tr>";
while ($counter <= 10) {
$aux=$number * $counter;
echo "<td>$counter x $number = $aux<br><tr>\n";
$counter++;
}
echo "Se acabo.\n";
}
?>
</p>
</table>
</body>
</html>