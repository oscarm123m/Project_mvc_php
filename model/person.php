<?php
class Person{

	public $id;
	public $dni;
	public $nombre;
	public $last;
	public $phone;
	public $address;
	public $mail;

	public function __construct($id,$dni,$nombre,$last,$phone,$address,$mail){
		$this->id_person=$id;
		$this->person_dni=$dni;
		$this->person_name=$nombre;
		$this->person_last_name=$last;
		$this->person_phone=$phone;
		$this->person_address=$address;
		$this->person_mail=$mail;
	}

	public static function consultar(){
		$listPerson=[];
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT * FROM person";
		$sql=$conexion->prepare($consulta);
		$sql->execute();
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->query("SELECT * FROM tax");

		foreach($sql->fetchAll() as $person){
			$listPerson[]= new Person($person['id_person'],$person['person_dni'],$person['person_name'],$person['person_last_name'],$person['person_phone'],$person['person_address'],$person['person_mail']);
		}

		return $listPerson;

	}

	public static function create($dni,$nombre,$last,$phone,$address,$mail){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="INSERT INTO person(person_dni, person_name, person_last_name, person_phone, person_address, person_mail) VALUES(?,?,?,?,?,?)";
		$sql=$conexion->prepare($consulta);
		//$sql->execute(array($nombre));
		//$conexionBD=BD::crearIntancia();

		//$sql=$conexionBD->prepare("INSERT INTO tax(tax_value, tax_name, creation_date) VALUES(?,?,?)");
		$sql->execute(array($dni,$nombre,$last,$phone,$address,$mail));
	}

	public static function search($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT * FROM person WHERE id_person=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->prepare("SELECT * FROM tax WHERE id_tax=?");
		//$sql->execute(array($id));
		$person=$sql->fetch();
		return new Person($person['id_person'],$person['person_dni'],$person['person_name'],$person['person_last_name'],$person['person_phone'],$person['person_address'],$person['person_mail']);
	}

	public static function edit($id,$dni,$nombre,$last,$phone,$address,$mail){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="UPDATE person SET person_dni=?, person_name=?, person_last_name=?, person_phone=?, person_address=?, person_mail=? WHERE id_person=?";
		$sql=$conexion->prepare($consulta);
		//$sql->execute(array($nombre,$id));
		//$conexionBD=BD::crearIntancia();

		//$sql=$conexionBD->prepare("UPDATE tax SET tax_value=?, tax_name=?, creation_date=? WHERE id_tax=?");
		$sql->execute(array($dni,$nombre,$last,$phone,$address,$mail,$id));
	}

	public static function delete($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="DELETE FROM person WHERE id_person=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->prepare("DELETE FROM tax WHERE id_tax=?");
		//$sql->execute(array($id));

	}
}
?>