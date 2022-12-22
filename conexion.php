<?php
define('SERVER', 'localhost');
define('DBNAME', 'proyecto');
define('USER', 'postgres');
define('PASSWORD', '1234');

class Conexion{
	function Conectar(){
		
		try {
			$conexion=new PDO("pgsql:host=".SERVER.";port=5432;dbname=".DBNAME, USER, PASSWORD);
			return $conexion;	
		} catch (Exception $e) {
			die("el error de conexion es: ".$e->getMessage());
		}
	}
}



/**class Conexion{
	function Conectar(){
		try{
			$conexion=new PDO("pgsql:host=".SERVER.";port=5432;dbname=".DBNAME, USER, PASSWORD);
			return $conexion;

		}catch (Exception $error){
			die("El error de coneccion es: ".$error->getMessage());
		}
	}
}**/
/*$conexion=pg_connect("host=localhost dbname=proyecto user=postgres password=1234");
if ($conexion) {
	echo "se conecto";
} else {
	echo "No se conecto";
}*/

?>