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
<body class="login-admin">
	
	<header>
		<a href="index.php"><img src="img/LOGO-EING.png" id="logo"></a>
		<h1 id="titulo">ESCUELA INTERNACIONAL DE NEGOCIOS GLOBALES</h1>
	</header>

	
<div class="login m-auto mt-5 bg-light ">
		
     <h2><center>ACCESO AL EING</center></h2>


	   <div class="brand_logo_container">
         <img src="img/logo.png"class="brand_logo" alt="Logo">
        </div>

    <form action="/action_page.php" class="p-4">
        <div class="form-group">
         <label for="email">Correo Electronico:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email">
        </div>
        <br>
       <div class="form-group">
          <label for="pwd">Contraseña:</label>
             <input type="password" class="form-control" placeholder="Enter password" id="pwd">
      </div>
       	<br>
      <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Recordar Contraseña </label>

      <br>
         <button type="submit" class="btn btn-secondary">ACCEDER</button>
   </form>

</div>

</body>
</html>

