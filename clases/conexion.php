

<?php 
/*
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database ='juegos';
	$db = mysqli_connect($server,$username,$password,$database);

	mysqli_query($db,  "SET NAMES 'utf8'");*/



	class conectar{
		public function conexion(){
			$conexion=mysqli_connect('localhost',
										'root',
										'',
										'juegos');

			
			return $conexion;
		}
	}


 ?>