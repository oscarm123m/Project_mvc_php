<?php
class ProductProvider{

	public $id;
	public $provider;
	public $bar_code;
	public $stock;
	public $product;

	public function __construct($id,$provider,$bar_code,$stock,$product){
		$this->id_provider_product=$id;
		$this->fk_id_provider=$provider;
		$this->bar_code=$bar_code;
		$this->stock=$stock;
		$this->fk_id_product=$product;
	}

	public static function consultar(){
		$listProductProvider=[];
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT pp.id_provider_product as id, pr.provider_name as nameprove, pp.bar_code as bar, pp.stock as stock, p.product_name as namepro, pp.fk_id_provider as provi FROM product p, provider pr, provider_product pp WHERE p.id_product=pp.fk_id_product AND pr.id_provider=pp.fk_id_provider";
		$sql=$conexion->prepare($consulta);
		$sql->execute();
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->query("SELECT pp.id_provider_product as id, pr.name as nameprove, pp.bar_code as bar, pp.stock as stock, p.product_name as namepro FROM product p, provider pr, provider_product pp WHERE p.id_product=pp.fk_id_product AND pr.id_provider=pp.fk_id_provider");

		foreach($sql->fetchAll() as $productProvider){
			$listProductProvider[]= new ProductProvider($productProvider['id'],$productProvider['nameprove'],$productProvider['bar'],$productProvider['stock'],$productProvider['namepro'],$productProvider['provi']);
		}

		return $listProductProvider;

	}

	public static function create($provider,$product,$bar_code,$stock){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="INSERT INTO provider_product(fk_id_provider, fk_id_product, bar_code, stock) VALUES(?,?,?,?)";
		$sql=$conexion->prepare($consulta);
		//$conexionBD=BD::crearIntancia();

		//$sql=$conexionBD->prepare("INSERT INTO provider_product(fk_id_provider, fk_id_product, bar_code, stock) VALUES(?,?,?,?)");
		$sql->execute(array($provider,$product,$bar_code,$stock));
	}

	public static function search($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT pp.id_provider_product as id, pp.fk_id_provider as nameprove, pp.bar_code as bar, pp.stock as stock, pp.fk_id_product as namepro FROM product p, provider pr, provider_product pp WHERE p.id_product=pp.fk_id_product AND pr.id_provider=pp.fk_id_provider AND pp.id_provider_product=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->prepare("SELECT pp.id_provider_product as id, pr.provider_name as nameprove, pp.bar_code as bar, pp.stock as stock, p.product_name as namepro FROM product p, provider pr, provider_product pp WHERE p.id_product=pp.fk_id_product AND pr.id_provider=pp.fk_id_provider AND pp.id_provider_product=?");
		//$sql->execute(array($id));
		$productProvider=$sql->fetch();
		return new ProductProvider($productProvider['id'],$productProvider['nameprove'],$productProvider['bar'],$productProvider['stock'],$productProvider['namepro']);
	}

	public static function edit($id,$provider,$product,$bar_code,$stock){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="UPDATE provider_product SET fk_id_provider=?, fk_id_product=?, bar_code=?, stock=? WHERE id_provider_product=?";
		$sql=$conexion->prepare($consulta);
		//$sql->execute(array($id));
		//$conexionBD=BD::crearIntancia();

		//$sql=$conexionBD->prepare("UPDATE provider_product SET fk_id_provider=?, fk_id_product=?, bar_code=?, stock=? WHERE id_provider_product=?");
		$sql->execute(array($provider,$product,$bar_code,$stock,$id));
	}

	public static function delete($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="DELETE FROM provider_product WHERE id_provider_product=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->prepare("DELETE FROM provider_product WHERE id_provider_product=?");
		//$sql->execute(array($id));
	}
}
?>