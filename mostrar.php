<?php 
$inc = include("con_db.php");
if ($inc) {
	$cedula = $_POST['cedula'];
	$pass = $_POST['pass']; 
	$consulta = "SELECT ci FROM usuarios where ci=".$cedula." and password='".$pass."'";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $ci = $row['ci'];
	    echo $ci; 
		echo $cedula;
		if ($ci=$cedula){
			echo "Ingreso con exito";
		}
	} 
	
		
	} if (empty($ci)) {
		echo "Usuario incorrecto";
	
	} 
	}

?>