<!DOCTYPE html>

<html>
    
<head>

	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<div class="encabezado">

  <h1> Tu estilo </h1>
  
  <img src="corte.png" />

</div>
    
<h2>Ingreso</h2>
<form action="mostrar.php" method="post">
            <label for="ci">
                <i class="fas fa-user"></i>
                
            </label>
            <input type="number" name="cedula"
            placeholder="Usuario" id="cedula" required>
            <label for="pass">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="pass"
            placeholder="Contrasena" id="pass" required>
            <input type="submit" value="Acceder">
            
            <?php
      
       ?>

        </form> 

       
<h2> Registro </h2>
        <form action="registro.php" method="post">
            <label for="cedularegistro">
                <i class="fas fa-user"></i>
                
            </label>
            <input type="number" name="cedularegistro"
            placeholder="Usuario" id="cedularegistro" required>
            <label for="passregistro">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="passregistro"
            placeholder="Contrasena" id="passregistro" required>
            <input type="submit" value="Registrarse">
            
            <?php
      
       ?>

        </form> 






</body>
</html>