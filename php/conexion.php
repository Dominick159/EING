
<?php 

	function conexion(){
		$servidor="localhost";
		$usuario="root";
		$password="";
		$bd="eing";

		$conexion = mysqli_connect($servidor,$usuario,$password,$bd);

		return $conexion;
	
	}

	/*function conexion(){
		$servidor="localhost";
		$usuario="id16324945_eing_database";
		$password="t}@q4qqDMure?Zn4";
		$bd="id16324945_eing";

		$conexion = mysqli_connect($servidor,$usuario,$password,$bd);

		return $conexion;
	}*/

	/*function conexion(){
		$servidor="localhost";
		$usuario="eingclub";
		$password="einGG2021??";
		$bd="eingclub_databaseeing";

		$conexion = mysqli_connect($servidor,$usuario,$password,$bd);

		return $conexion;
	}*/

 ?>