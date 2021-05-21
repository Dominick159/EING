<?php 

	include_once 'php/conexion.php';
	$conexion = conexion();

	session_start();

	if(isset($_POST['usuario']) && isset($_POST['password'])){
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM tbusuarios WHERE dni = '$usuario' AND password = '$password'";

		$result = mysqli_query($conexion,$sql);
		$row = mysqli_fetch_row($result);

		if ($row == true) {
			$id = $row[0];

			$_SESSION['id'] = $id;

			header('location: menu-admin.php');

		}
		else{
			echo "<script type='text/javascript'>alert('Usuario o Contraseña Incorrectos')</script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Administrador</title>
	<link rel="shortcut icon" type="image/jpg" href="img/LOGO-EING.png"/>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style-tabla.css">
	<link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
	<link rel="stylesheet" href="librerias/fontawesome5/css/all.min.css">
	<link rel="stylesheet" href="librerias/DataTables/css/jquery.dataTables.min.css">
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/jquery-3.4.1.min.js"></script>
	<script src="librerias/DataTables/js/jquery.dataTables.js"></script>
</head>
<body>
	
	<header>
		<a href="index.php"><img src="img/LOGO-EING.png" id="logo"></a>
		<h1 id="titulo">ESCUELA INTERNACIONAL DE NEGOCIOS GLOBALES</h1>
	</header>

	
<div class="login m-auto mt-5 bg-light ">
		
     <h2><center>ACCESO AL EING</center></h2>


	   <div class="brand_logo_container">
         <img src="img/logo.png"class="brand_logo" alt="Logo">
        </div>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="p-4">
        <div class="form-group">
         <label for="email">Usuario</label>
            <input type="text" class="form-control" placeholder="Ingresa tu Usuario" id="email" name="usuario">
        </div>
        <br>
       <div class="form-group">
          <label for="pwd">Contraseña:</label>
             <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
      </div>
       	<br>
      <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Recordar Contraseña </label>

      <br>
      		<input type="submit" class="btn btn-secondary" value="ACCEDER">
   </form>

</div>

</body>
</html>

