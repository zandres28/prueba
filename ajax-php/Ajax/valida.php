<?php

$link = mysqli_connect("127.0.0.1","root","","proyecto");

if(mysqli_connect_errno($link))
    echo "Error al conectar a la base de datos";


$sql = "SELECT id, CONCAT(nombre,' ',apellido) AS nombres FROM usuarios;";


if ($_POST['texto']!=""){
	$sql = "SELECT id, CONCAT(nombre,' ',apellido) AS nombres FROM usuarios where id = '".$_POST['texto']."';";	
}
//echo "sql:".$sql;

$tmp = "<table class = 'table table-hover'> 
		<tr> 
			<td>ID</td> <td> NOMBRES </td>
		</tr>";
$res = mysqli_query($link, $sql);
while ($row=mysqli_fetch_array($res)){
	$tmp.= "<tr> 
			<td>".$row['id']."</td> 
			<td>".$row['nombres']."</td>
		</tr>";
}

$tmp.= "</table>";

echo $tmp;

?>