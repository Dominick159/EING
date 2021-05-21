
<?php 

	session_start();
	
	$id_usuario = $_SESSION['id'];
	require_once "php/conexion.php";
	$conexion=conexion();
	$sql="SELECT * FROM tbusuarios WHERE id='$id_usuario'";
	$result=mysqli_query($conexion,$sql);
	$row_user = $result -> fetch_assoc();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Administrador</title>
	<link rel="shortcut icon" type="image/jpg" href="img/LOGO-EING.png"/>
	<link rel="stylesheet" href="css/style-admin.css">
	<link rel="stylesheet" href="css/style-tabla.css">
	<link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
	<link rel="stylesheet" href="librerias/fontawesome5/css/all.min.css">
	<link rel="stylesheet" href="librerias/DataTables/css/jquery.dataTables.min.css">
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/jquery-3.4.1.min.js"></script>
	<script src="librerias/DataTables/js/jquery.dataTables.js"></script>
</head>
<body class="login-admin">
	
	<header>
		<div id="title">
			<a href="index.php"><img src="img/LOGO-EING.png" id="logo"></a>
			<h1>ESCUELA INTERNACIONAL DE NEGOCIOS GLOBALES</h1>
		</div>
		<a href="php/cerrar_sesion.php" id="cerrar-sesion"><i class="fas fa-sign-out-alt"></i> Salir</a>
	</header>

	<div class="container" id="menu-botones">
		<div class="card-head">
			<div class="pic">
				<img src="img/team/<?php echo $row_user['url_img']; ?>" alt="">
			</div>
			<div class="card-content">
				<div class="name"><?php echo $row_user['nombres'].' '.$row_user['apellido']; ?></div>
				<div class="desc"><?php echo $row_user['cargo']; ?></div>
				<div class="profesion"><?php echo $row_user['titulo']; ?></div>
			</div>
		</div>
		
		<div id="botones">
			<a href="registrarCliente.php" id="btn-nuevo"><i class="fas fa-plus"></i> Nuevo</a>
			<a href="menu-registros.php" id="btn-registros"><i class="fas fa-list-ul"></i> Pedidos</a>
			<a href="historial-ventas.php" id="btn-ventas"><i class="fas fa-shopping-cart"></i> Ventas</a>
			<a href="datos-estadistos.php" id="btn-estadistica"><i class="fas fa-chart-bar"></i> Estadisticas</a>
			<a href="clientes.php" id="btn-clientes"><i class="fas fa-star"></i> Clientes</a>
			<a href="inventario.php" id="btn-inventario"><i class="fa fa-clipboard-list"></i> Inventario</a>
			<a href="usuarios.php" id="btn-usuarios"><i class="fas fa-user"></i> Usuarios</a>
			<a href="configuracion.php" id="btn-config"><i class="fas fa-user-cog"></i> Configuracion</a>
		</div>
	</div>

</body>
</html>


	