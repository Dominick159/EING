
	<?php 

		require_once 'head.php';
  
	 ?>
	
<section class="container galeria">

    <h3 class="text-center subtitle">Galería de Fotos de Nuestro Convenio</h3><br>

    <div class="container-fluid">
        <div class="row mt-4">

            <?php 
                $i = 1;
                $cantFotos = 15;
                while ($i <= $cantFotos) {
            ?>  
                    <div class="item col-sm-6 col-md-4 mb-3">
                        <a href="<?php echo 'img/galeria/convenio'.$i.'.jpeg' ?>" class="fancybox" data-fancybox="gallery1">
                            <img src="<?php echo 'img/galeria/convenio'.$i.'.jpeg' ?>" width="100%" height="100%" alt="">
                        </a>
                    </div>
            <?php
                    $i++;
                }
             ?>
           
        </div>
    </div>

 </section>

	 <?php 

		require_once 'footer.php';

	 ?>