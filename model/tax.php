<?php
class Tax{

	public $id;
	public $value;
	public $nombre;
	public $date;

	public function __construct($id,$value,$nombre,$date){
		$this->id_tax=$id;
		$this->tax_value=$value;
		$this->tax_name=$nombre;
		$this->creation_date=$date;
	}

	public static function consultar(){
		$listTax=[];
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT * FROM tax";
		$sql=$conexion->prepare($consulta);
		$sql->execute();
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->query("SELECT * FROM tax");

		foreach($sql->fetchAll() as $tax){
			$listTax[]= new Tax($tax['id_tax'],$tax['tax_value'],$tax['tax_name'],$tax['creation_date']);
		}

		return $listTax;

	}

	public static function create($value,$nombre,$date){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="INSERT INTO tax(tax_value, tax_name, creation_date) VALUES(?,?,?)";
		$sql=$conexion->prepare($consulta);
		//$sql->execute(array($nombre));
		//$conexionBD=BD::crearIntancia();

		//$sql=$conexionBD->prepare("INSERT INTO tax(tax_value, tax_name, creation_date) VALUES(?,?,?)");
		$sql->execute(array($value,$nombre,$date));
	}

	public static function search($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT * FROM tax WHERE id_tax=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->prepare("SELECT * FROM tax WHERE id_tax=?");
		//$sql->execute(array($id));
		$tax=$sql->fetch();
		return new Tax($tax['id_tax'],$tax['tax_value'],$tax['tax_name'],$tax['creation_date']);
	}

	public static function edit($id,$value,$nombre,$date){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="UPDATE tax SET tax_value=?, tax_name=?, creation_date=? WHERE id_tax=?";
		$sql=$conexion->prepare($consulta);
		//$sql->execute(array($nombre,$id));
		//$conexionBD=BD::crearIntancia();

		//$sql=$conexionBD->prepare("UPDATE tax SET tax_value=?, tax_name=?, creation_date=? WHERE id_tax=?");
		$sql->execute(array($value,$nombre,$date,$id));
	}

	public static function delete($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="DELETE FROM tax WHERE id_tax=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->prepare("DELETE FROM tax WHERE id_tax=?");
		//$sql->execute(array($id));

	}
}
?>