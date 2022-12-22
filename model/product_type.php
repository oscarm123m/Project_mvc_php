<?php
class ProductType{

	public $id;
	public $nombre;

	public function __construct($id,$nombre){
		$this->id_product_type=$id;
		$this->product_type_name=$nombre;
	}

	public static function consultar(){
		$listProductType=[];

		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT * FROM product_type";
		$sql=$conexion->prepare($consulta);
		$sql->execute();

		foreach($sql->fetchAll() as $productType){
			$listProductType[]= new ProductType($productType['id_product_type'],$productType['product_type_name']);
			//var_dump($productType);
		}

		return $listProductType;

	}

	public static function create($nombre){

		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="INSERT INTO product_type(product_type_name) VALUES(?)";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($nombre));
	}

	public static function search($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT * FROM product_type WHERE id_product_type=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));

		$productType=$sql->fetch();
		return new ProductType($productType['id_product_type'],$productType['product_type_name']);;
	}

	public static function edit($id, $nombre){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="UPDATE product_type SET product_type_name=? WHERE id_product_type=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($nombre,$id));

	}

	public static function delete($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="DELETE FROM product_type WHERE id_product_type=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));
		
	}
}
?>