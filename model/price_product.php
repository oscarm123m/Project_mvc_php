<?php
class PriceProduct{

	public $id;
	public $sale;
	public $shop;
	public $start;
	public $user;
	public $date;
	public $productprovider;

	public function __construct($id,$sale,$shop,$start,$user,$date,$productprovider){
		$this->id_price_product=$id;
		$this->sale_price=$sale;
		$this->shop_price=$shop;
		$this->start_date=$start;
		$this->user_update=$user;
		$this->date_update=$date;
		$this->fk_id_product=$productprovider;
	}

	public static function consultar(){
		$listPriceProduct=[];
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT pricepro.id_price_product as id, pricepro.sale_price as sale, pricepro.shop_price as shop, pricepro.start_date as start, pricepro.user_update as user, pricepro.date_update as dates, productpro.bar_code as barra FROM provider_product productpro, price_product pricepro WHERE productpro.id_provider_product=pricepro.fk_id_product";
		$sql=$conexion->prepare($consulta);
		$sql->execute();
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->query("SELECT pricepro.id_price_product as id, pricepro.sale_price as sale, pricepro.shop_price as shop, pricepro.start_date as start, pricepro.user_update as user, pricepro.date_update as dates, productpro.bar_code as barra FROM provider_product productpro, price_product pricepro WHERE productpro.id_provider_product=pricepro.fk_id_product");

		foreach($sql->fetchAll() as $priceProduct){
			$listPriceProduct[]= new PriceProduct($priceProduct['id'],$priceProduct['sale'],$priceProduct['shop'],$priceProduct['start'],$priceProduct['user'],$priceProduct['dates'],$priceProduct['barra']);
		}

		return $listPriceProduct;

	}

	public static function create($sale,$shop,$start,$user,$date,$productprovider){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="INSERT INTO price_product(sale_price, shop_price, start_date, user_update, date_update, fk_id_product) VALUES(?,?,?,?,?,?)";
		$sql=$conexion->prepare($consulta);
		//$conexionBD=BD::crearIntancia();

		//$sql=$conexionBD->prepare("INSERT INTO price_product(sale_price, shop_price, start_date, user_update, date_update, fk_id_product) VALUES(?,?,?,?,?,?)");
		$sql->execute(array($sale,$shop,$start,$user,$date,$productprovider));
	}

	public static function search($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT pricepro.id_price_product as id, pricepro.sale_price as sale, pricepro.shop_price as shop, pricepro.start_date as start, pricepro.user_update as user, pricepro.date_update as dates, pricepro.fk_id_product as barra FROM provider_product productpro, price_product pricepro WHERE productpro.id_provider_product=pricepro.fk_id_product AND pricepro.id_price_product=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));

		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->prepare("SELECT pricepro.id_price_product as id, pricepro.sale_price as sale, pricepro.shop_price as shop, pricepro.start_date as start, pricepro.user_update as user, pricepro.date_update as dates, productpro.bar_code as barra FROM product_provider productpro, price_product pricepro WHERE productpro.id_product_provider=pricepro.fk_id_product AND pricepro.id_price_product=?");
		//$sql->execute(array($id));
		$priceProduct=$sql->fetch();
		return new PriceProduct($priceProduct['id'],$priceProduct['sale'],$priceProduct['shop'],$priceProduct['start'],$priceProduct['user'],$priceProduct['dates'],$priceProduct['barra']);
	}

	public static function edit($id,$sale,$shop,$start,$user,$date,$productprovider){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="UPDATE price_product SET sale_price=?, shop_price=?, start_date=?, user_update=?, date_update=?, fk_id_product=? WHERE id_price_product=?";
		$sql=$conexion->prepare($consulta);
		//$conexionBD=BD::crearIntancia();

		//$sql=$conexionBD->prepare("UPDATE price_product SET fk_id_provider=?, bar_code=?, stock=?, fk_id_product=? WHERE id_provider_product=?");
		$sql->execute(array($sale,$shop,$start,$user,$date,$productprovider,$id));
	}

	public static function delete($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="DELETE FROM price_product WHERE id_price_product=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));
		//$conexionBD=BD::crearIntancia();
		//$sql=$conexionBD->prepare("DELETE FROM price_product WHERE id_price_product=?");
		$sql->execute(array($id));
	}
}
?>