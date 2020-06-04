<?php

$connection = new mysqli("127.0.0.1","root","","proyecto");
$connection->set_charset("utf8");


if($connection->connect_errno)
    throw new Exception("Error al conectar a la base de datos");

$stmt = $connection->stmt_init();
$sql = "SELECT id, CONCAT(nombre,' ',apellido) AS nombres FROM usuarios;";

if ($_POST['texto']!=""){
	$sql = "SELECT id, CONCAT(nombre,' ',apellido) AS nombres FROM usuarios where CONCAT(nombre,' ',apellido) LIKE '".$_POST['texto']."%';";	
}
$tmp = "<table class = 'table table-hover'> 
		<tr> 
			<td>ID</td> <td> NOMBRES </td>
		</tr>";
$res = mysqli_query($sql);
while ($row=mysql_fetch_array($res)){
	$tmp.= "<tr> 
			<td>".$row['id']."</td> 
			<td>".$row['nombres']."</td>
		</tr>";
}

$tmp.= "</table>";

echo $mp;

?>