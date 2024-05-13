<?php 
$inc = include("con_db.php");
if ($inc) {
	$cedularegistro = $_POST['cedularegistro'];
	$passregistro = $_POST['passregistro']; 
	$consulta = "insert into usuarios (ci,password) values (".$cedularegistro.",'".$passregistro."')";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
	    echo $cedularegistro; 
		<br>;
		echo $passregistro;
		echo "Registro con exito";
	} 
	
		
	} else {
		echo "Error al registrarse";
	
	} 
	

?>