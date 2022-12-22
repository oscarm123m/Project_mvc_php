<?php
include_once("model/price_product.php");
include_once("conexion.php");

class ControllerPriceproduct{
	public function index(){
		//print_r(ProductType::consultar());
		$priceproducts=PriceProduct::consultar();
		include_once("view/price_product/index.php");
	}

	public function create(){
		if($_POST){
			$sale=$_POST['sale'];
			$shop=$_POST['shop'];
			$start=$_POST['start'];
			$user=$_POST['user'];
			$date=$_POST['date'];
			$productprovider=$_POST['producto'];
			PriceProduct::create($sale,$shop,$start,$user,$date,$productprovider);
			header("Location:./?controller=priceproduct&accion=index");
		}
		include_once("view/price_product/create.php");
	}

	public function edit(){
		$id=$_GET['id'];
		$productprovider=(PriceProduct::search($id));

		if ($_POST) {
			//print_r($_POST);
			$id=$_POST['id'];
			$sale=$_POST['sale'];
			$shop=$_POST['shop'];
			$start=$_POST['start'];
			$user=$_POST['user'];
			$date=$_POST['date'];
			$productprovider=$_POST['producto'];

			PriceProduct::edit($id,$sale,$shop,$start,$user,$date,$productprovider);
			header("Location:./?controller=priceproduct&accion=index");
		}
		include_once("view/price_product/edit.php");
	}

	public function delete(){
		$id=$_GET['id'];
		PriceProduct::delete($id);
		header("Location:./?controller=priceproduct&accion=index");
	}
}
?>
