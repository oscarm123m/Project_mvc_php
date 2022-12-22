<?php
class Product{

	public $id;
	public $nombre;
	public $stock;
	public $producttype;

	public function __construct($id,$nombre,$stock,$producttype){
		$this->id_product=$id;
		$this->product_name=$nombre;
		$this->product_stock=$stock;
		$this->fk_id_product_type=$producttype;
	}

	public static function consultar(){
		$listProduct=[];

		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT p.id_product as id, p.product_name as name, p.product_stock as stock, pt.product_type_name as namept FROM product p, product_type pt WHERE pt.id_product_type=p.fk_id_product_type";
		$sql=$conexion->prepare($consulta);
		$sql->execute();

		foreach($sql->fetchAll() as $product){
			$listProduct[]= new Product($product['id'],$product['name'],$product['stock'],$product['namept']);
		}

		return $listProduct;

	}

	public static function create($nombre,$producttype,$stock){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="INSERT INTO product(product_name, product_stock, fk_id_product_type) VALUES(?,?,?)";
		$sql=$conexion->prepare($consulta);

		$sql->execute(array($nombre,$producttype,$stock));
	}

	public static function search($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT * FROM product WHERE id_product=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));

		$product=$sql->fetch();
		return new Product($product['id_product'],$product['product_name'],$product['product_stock'],$product['fk_id_product_type']);
	}

	public static function edit($id,$nombre,$stock,$producttype){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="UPDATE product SET product_name=?, product_stock=?, fk_id_product_type=? WHERE id_product=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($nombre,$stock,$producttype,$id));
	}

	public static function delete($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="DELETE FROM product WHERE id_product=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));

	}
}
?>