<?php
class PersonType{

	public $id;
	public $nombre;

	public function __construct($id,$nombre){
		$this->id_person_type=$id;
		$this->person_type_name=$nombre;
	}

	public static function consultar(){
		$listPersonType=[];
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT * FROM person_type";
		$sql=$conexion->prepare($consulta);
		$sql->execute();
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->query("SELECT * FROM person_type");

		foreach($sql->fetchAll() as $personType){
			$listPersonType[]= new PersonType($personType['id_person_type'],$personType['person_type_name']);
		}

		return $listPersonType;

	}

	public static function create($nombre){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="INSERT INTO person_type(person_type_name) VALUES(?)";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($nombre));
		//$conexionBD=BD::crearIntancia();

		//$sql=$conexionBD->prepare("INSERT INTO person_type(person_type_name) VALUES(?)");
		//$sql->execute(array($nombre));
	}

	public static function search($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT * FROM person_type WHERE id_person_type=?";
		$sql=$conexion->prepare($consulta);
		//$sql->execute(array($id));
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->prepare("SELECT * FROM person_type WHERE id_person_type=?");
		$sql->execute(array($id));
		$personType=$sql->fetch();
		return new PersonType($personType['id_person_type'],$personType['person_type_name']);;
	}

	public static function edit($id, $nombre){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="UPDATE person_type SET person_type_name=? WHERE id_person_type=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($nombre,$id));
		//$conexionBD=BD::crearIntancia();

		//$sql=$conexionBD->prepare("UPDATE person_type SET person_type_name=? WHERE id_person_type=?");
		//$sql->execute(array($nombre,$id));
	}

	public static function delete($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="DELETE FROM person_type WHERE id_person_type=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->prepare("DELETE FROM person_type WHERE id_person_type=?");
		//$sql->execute(array($id));
	}
}
?>