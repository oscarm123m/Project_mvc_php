<?php
class Provider{

	public $id;
	public $nombre;
	public $nit;
	public $url;
	public $address;
	public $number;

	public function __construct($id,$nombre,$address,$number,$url,$nit){
		$this->id_provider=$id;
		$this->provider_name=$nombre;
		$this->provider_nit=$nit;
		$this->provider_url=$url;
		$this->provider_direction=$address;
		$this->provider_phone=$number;
	}

	public static function consultar(){
		$listProvider=[];

		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT * FROM provider";
		$sql=$conexion->prepare($consulta);
		$sql->execute();
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->query("SELECT * FROM provider");

		foreach($sql->fetchAll() as $provider){
			$listProvider[]= new Provider($provider['id_provider'],$provider['provider_name'],$provider['provider_direction'],$provider['provider_phone'],$provider['provider_url'],$provider['provider_nit']);
		}

		return $listProvider;

	}

	public static function create($nombre,$address,$number,$url,$nit){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="INSERT INTO provider(provider_name, provider_direction, provider_phone, provider_url, provider_nit) VALUES(?,?,?,?,?)";
		$sql=$conexion->prepare($consulta);
		//$sql->execute(array($nombre,$nit,$url,$address,$number));

		//$conexionBD=BD::crearIntancia();

		//$sql=$conexionBD->prepare("INSERT INTO provider(name, nit, url, address, phone_number) VALUES(?,?,?,?,?)");
		$sql->execute(array($nombre,$address,$number,$url,$nit));
	}

	public static function search($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT * FROM provider WHERE id_provider=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));

		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->prepare("SELECT * FROM provider WHERE id_provider=?");
		//$sql->execute(array($id));
		$provider=$sql->fetch();
		return new Provider($provider['id_provider'],$provider['provider_name'],$provider['provider_direction'],$provider['provider_phone'],$provider['provider_url'],$provider['provider_nit']);;
	}

	public static function edit($id,$nombre,$address,$number,$url,$nit){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="UPDATE provider SET provider_name=?, provider_direction=?, provider_phone=?, provider_url=?, provider_nit=? WHERE id_provider=?";
		$sql=$conexion->prepare($consulta);
		//$sql->execute(array($nombre,$id));

		//$conexionBD=BD::crearIntancia();

		//$sql=$conexionBD->prepare("UPDATE provider SET name=?, nit=?, url=?, address=?, phone_number=? WHERE id_provider=?");
		$sql->execute(array($nombre,$address,$number,$url,$nit,$id));
	}

	public static function delete($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="DELETE FROM provider WHERE id_provider=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));

		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->prepare("DELETE FROM provider WHERE id_provider=?");
		//$sql->execute(array($id));
	}
}
?>