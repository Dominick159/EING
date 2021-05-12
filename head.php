<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>TALENTO EING</title>

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
	<script type="text/javascript">
		$(function(){
			$(window).scroll(function(){
				var winTop = $(window).scrollTop();
				if (winTop >= 30) {
					$('header').addClass('active-header');
					$('#banner').css({'margin-top':'55px'});
					/*$('body').addClass('body');*/
				}
				else{
					$('header').removeClass('active-header');
					$('#banner').css({'margin-top':'215px'});
					/*$('body').removeClass('body');*/
				}
			})
		})
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
</head>
<body class="">

	<div class="header fixed-top">
		
		<header>
			<a href="index.php"><img src="img/LOGO-EING.png" id="logo"></a>
			<h1 id="titulo">ESCUELA INTERNACIONAL DE NEGOCIOS GLOBALES</h1>
		</header>
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-verde">
	  		<div class="container-fluid container">
	    		<!--a class="navbar-brand" href="index.html"></a-->
	    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      			<span class="navbar-toggler-icon"></span>
	    		</button>
	    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	      			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        			<li class="nav-item">
	          				<a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home"></i> Inicio</a>
	        			</li>
	        			<!--li class="nav-item dropdown">
	          				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            				<i class="fas fa-user-friends"></i> Nosotros
	          				</a>
	          				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	            				<li><a class="dropdown-item" href="mision.php"><i class="fas fa-chart-line"></i> Misión</a></li>
	            				<li><a class="dropdown-item" href="vision.php"><i class="fas fa-eye"></i> Visión</a></li>
	            				<li><hr class="dropdown-divider"></li>
	            				<li><a class="dropdown-item" href="valores.php"><i class="far fa-heart"></i> Valores</a></li>
	          				</ul>
	        			</li-->
	        			<li class="nav-item">
	          				<a class="nav-link" href="buscaempleo.php"><i class="fas fa-briefcase"></i> Busca Empleo</a>
	        			</li>
	        			<li class="nav-item">
	          				<a class="nav-link" href="empresas.php"><i class="fas fa-handshake"></i> Empresas</a>
	        			</li>
	        			<li class="nav-item">
	          				<a class="nav-link" href="escuela.php"><i class="fas fa-graduation-cap"></i> Escuela</a>
	        			</li>
	        			<li class="nav-item">
	          				<a class="nav-link" href="galeria.php"><i class="fas fa-image"></i> Convenios</a>
	        			</li>
	        			<li class="nav-item">
	          				<a class="nav-link" href="contacto.php"><i class="fas fa-map-marker-alt"></i> Contacto</a>
	        			</li>
	      			</ul>
	      			<!--form class="d-flex">
	        			<input class="form-control form-control-sm me-2" type="search" placeholder="Buscar" aria-label="Search">
	        			<button class="btn btn-sm btn-outline-warning" type="submit"><i class="fas fa-search"></i></button>
	      			</form-->
	    		</div>
	  		</div>
		</nav>

	</div>