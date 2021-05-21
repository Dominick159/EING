
<?php 

	session_start();

	$id_usuario = $_SESSION['id'];

	require_once "php/conexion.php";
	$conexion=conexion();

	$sql="SELECT * FROM tbusuarios WHERE id='$id_usuario'";
	$result=mysqli_query($conexion,$sql);
	$row = $result -> fetch_assoc();

	$sexo_usuario = $row['id_sexo'];
	$sql_sexo = "SELECT * FROM tbsexo WHERE id='$sexo_usuario'"; 
	$result_sexo = mysqli_query($conexion,$sql_sexo);
	$row_sexo = $result_sexo -> fetch_assoc();


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

	<div id="contenido">
		<div class="container" id="form-registrar-cliente">
			<div class="row" id="titulo-menu-ventas">
				<div class="col-sm-12">
					<br>
					<h4 class="float-left">Configuración</h4>
					<a href="admin.php" class="btn btn-sm btn-dark float-right" style="letter-spacing: 2px;"><i class="fa fa-backward"></i> ATRAS</a>
					<br><br><br>
				</div>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label-sm">Nombres</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" value="<?php echo $row['nombres']; ?>" disabled>
				</div>
				<label  class="col-sm-2 col-form-label-sm">Apellidos</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" value="<?php echo $row['apellidos']; ?>" disabled>
				</div>
			</div>
			<div class="row">
				<label  class="col-sm-2 col-form-label-sm">Sexo</label>
				<div class="col-sm-2">
					<input type="text" class="form-control form-control-sm" value="<?php echo $row_sexo['sexo']; ?>" disabled>
				</div>
				<label  class="col-sm-2 col-form-label-sm">Tipo Documento</label>
				<div class="col-sm-2">
					<input type="text" class="form-control form-control-sm" value="<?php echo $row_doc['tipo_doc']; ?>" disabled>
				</div>
				<label  class="col-sm-2 col-form-label-sm">Núm Documento</label>
				<div class="col-sm-2">
					<input type="text" maxlength="12" class="form-control form-control-sm" value="<?php echo $row['num_doc']; ?>" disabled>
				</div>
			</div>
			<div class="row">
				<label  class="col-sm-2 col-form-label-sm">Celular</label>
				<div class="col-sm-2">
					<input type="text" maxlength="9" class="form-control form-control-sm" id="celular-config" value="<?php echo $row['celular']; ?>">
				</div>
				<label  class="col-sm-1 col-form-label-sm">Correo</label>
				<div class="col-sm-3">
					<input type="email" class="form-control form-control-sm" id="correo-config" value="<?php echo $row['correo']; ?>">
				</div>
				<label  class="col-sm-2 col-form-label-sm">Cargo</label>
				<div class="col-sm-2">
					<input type="text" class="form-control form-control-sm" value="<?php echo $row_cargo['cargo']; ?>" disabled>
				</div>
			</div>
			<button class="btn btn-info btn-sm" id="btn-guardar-config" style="letter-spacing: 1px;">GUARDAR CAMBIOS</button>
			<div class="row">
				<h5 class="col-sm-12 mt-4 mb-4" style="font-size: 16px; color: #28a745; letter-spacing: 2px;">CAMBIAR CONTRASEÑA</h5>
			</div>
			<div class="row">
				<label class="col-sm-3 col-form-label-sm">Contraseña Actual</label>
				<div class="col-sm-3">
					<div class="input-group">
						<input type="password" class="form-control form-control-sm noverpass" id="pass-actual" placeholder="********" style="position: relative;">
						<div class="input-group-prepend">
							<a class="btn-eyes fa fa-eye" id="btn-pass-actual"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<label class="col-sm-3 col-form-label-sm">Contraseña Nueva</label>
				<div class="col-sm-3">
					<div class="input-group">
						<input type="password" class="form-control form-control-sm" id="pass-nuevo" placeholder="********" style="position: relative;">
						<div class="input-group-prepend">
							<a class="btn-eyes fa fa-eye" id="btn-pass-nuevo"></a>
						</div>
					</div>
				</div>
			</div>
			<button class="btn btn-info btn-sm" id="btn-cambiar-pass" style="letter-spacing: 1px;">CAMBIAR CONTRASEÑA</button>
		</div>
	</div>

</body>
</html>