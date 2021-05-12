	
	<?php 

		require_once 'head.php';

		require_once "php/conexion.php";
		$conexion=conexion();

		$sql = "SELECT * FROM tbusuarios";
		$result = $conexion -> query($sql);

	 ?>

	<section class="container">

		<div id="banner" class="">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
	  			<div class="carousel-indicators">
	    			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	    			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
	    			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
	  			</div>
	  			<div class="carousel-inner">
	    			<div class="carousel-item active">
	      				<img src="img/banner1.jpeg" class="d-block w-100" alt="...">
	    			</div>
		    		<div class="carousel-item">
		      			<img src="img/banner2.jpg" class="d-block w-100" alt="...">
		    		</div>
		    		<div class="carousel-item">
		      			<img src="img/banner3.jpg" class="d-block w-100" alt="...">
		    		</div>
		    		<div class="carousel-item">
		      			<img src="img/banner4.jpg" class="d-block w-100" alt="...">
		    		</div>
		    		<div class="carousel-item">
		      			<img src="img/banner5.jpg" class="d-block w-100" alt="...">
		    		</div>
		    		
	  			</div>
		  		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
		    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    		<span class="visually-hidden">Atras</span>
		  		</button>
		  		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
		    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    		<span class="visually-hidden">Siguiente</span>
		  		</button>
			</div>
		</div>	

	</section>

	<article class="container marketing pt-5">
		
		<div class="row">
      		<div class="col-lg-4">
        		<img src="img/empresa.png" class="rounded-circle" alt="" width="100"></svg>
        		<h2>Empresas</h2>
        		<p>Ofrecemos la ubicación y reclutamiento del profesional que más le conviene dentro del mercado. Nosotros lo ubicamos por Ud.</p>
        		<p><a class="btn btn-warning" href="empresas.php">Ver más &raquo;</a></p>
      		</div><!-- /.col-lg-4 -->
      		<div class="col-lg-4">
        		<img src="img/EMPLEO.jpg" class="rounded-circle" alt="" width="100"></svg>
        		<h2>Empleos</h2>
        		<p>Ofrecemos la búsqueda de personal idóneo para su organización a todo nivel (operativo, administrativo, ejecutivo y gerencial).</p>
        		<p><a class="btn btn-warning" href="buscaempleo.php">Ver más &raquo;</a></p>
      		</div><!-- /.col-lg-4 -->
      		<div class="col-lg-4">
        		<img src="img/CURSOS.jpg" class="rounded-circle" alt="" width="100"></svg>
        		<h2>Cursos</h2>
        		<p>Ofrecemos charlas motivacionales, buscando modificar, mejorar y ampliar los conocimientos, habilidades y actitudes del personal.</p>
        		<p><a class="btn btn-warning" href="escuela.php">Ver más &raquo;</a></p>
      		</div><!-- /.col-lg-4 -->
    	</div><!-- /.row -->

	</article>

	<article class="container">

		<br><div class="linea-verde"></div><br>
		
		<div align="center">
			<!--video src="img/video-eing.mp4" poster="img/miniatura-video.jpeg" controls width="50%"></video-->
			<video src="img/video-eing.mp4" autoplay muted loop width="50%" controls></video-->
			<!--iframe width="560" height="315" src="https://www.youtube.com/embed/Ht1eXws5BLw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe-->
		</div>
		
	 			
	 	<br><div class="linea-verde"></div><br>

	 		<div class="nosotros-img">
	 			<h3 class="text-center subtitle">Nuestra Empresa</h3><br>

	 			<div class="blog-posts">
	 				<div class="post">
	 					<img class="post-img" src="img/mision.jpg" alt="">
	 					<div class="post-content">
	 						<span class="date">MISIÓN</span>
	 					<br>	
	 						<h3> Cazatalentos.</b></h3>
	 						<h3> Desarrollo.</b></h3>
	 						<h3> Vinculación al mercado laboral.</b></h3>
	 					</div>
	 				</div>
	 				<div class="post">
	 					<img class="post-img" src="img/imgvision.jpg" alt="">
	 					<div class="post-content">
	 						<span class="date">VISIÓN</span>
	 					<br>	
	 						<h3>Colocación de Talentos profesionales a nivel global.</h3>
	 					</div>
	 				</div>
	 				<div class="post">
	 					<img class="post-img" src="img/valores.jpg" alt="">
	 					<div class="post-content">
	 						<br>
	 						<span class="date">VALORES</span>
	 						<h3>Aplicación del Conocimiento.</h3>
	 						<h3>Genialidad.</h3>
	 						<h3>Alegría creativa.</h3>
	 					</div>	 				
	 				</div>
	 			</div>
	 		</div>

	</article>	

	<article class="container">

		<br><div class="linea-verde"></div><br>
		
			<div class="nosotros-img">

				<h3 class="text-center subtitle">Nuestro Equipo</h3><br>

				<div id="tarjetas">

					<?php 
						while ($ver = $result -> fetch_assoc()) {
							$id = $ver['id'];
					?>

					<div class="tarjeta">
						<img src="img/team/<?php echo $ver['url_img']; ?>" alt="">
						<h2><?php echo $ver['nombres'].' '.$ver['apellido']; ?></h2>
						<p class="profesion"><?php echo $ver['cargo']; ?></p>
						<p class="desc"><?php echo $ver['titulo']; ?></p>
						<div class="sm">
							<a href="<?php echo $ver['url_facebook']; ?>" class="fab fa-facebook-f" target="_blank"></a>
							<a href="<?php echo $ver['url_instagram']; ?>" class="fab fa-instagram" target="_blank"></a>
							<a href="<?php echo $ver['url_linkedin']; ?>" class="fab fa-linkedin-in" target="_blank"></a>
						</div>
					</div>

					<?php 
						}
					?>

				</div>

			</div>


	</article>	

	<?php 

		require_once 'footer.php';

	 ?>

	

	