<?php
include_once("model/product_provider.php");
include_once("conexion.php");

class ControllerProductprovider{
	public function index(){
		//print_r(ProductType::consultar());
		$productProviders=ProductProvider::consultar();
		include_once("view/product_provider/index.php");
	}

	public function create(){
		if($_POST){
			$provider=$_POST['proveedor'];
			$bar_code=$_POST['codigo'];
			$stock=$_POST['stock'];
			$product=$_POST['producto'];
			ProductProvider::create($provider,$product,$bar_code,$stock);
			header("Location:./?controller=productprovider&accion=index");
		}
		include_once("view/product_provider/create.php");
	}

	public function edit(){
		$id=$_GET['id'];
		$productprovider=(ProductProvider::search($id));

		if ($_POST) {
			//print_r($_POST);
			$id=$_POST['id'];
			$provider=$_POST['proveedor'];
			$bar_code=$_POST['codigo'];
			$stock=$_POST['stock'];
			$product=$_POST['producto'];

			ProductProvider::edit($id,$provider,$product,$bar_code,$stock);
			header("Location:./?controller=productprovider&accion=index");
		}
		include_once("view/product_provider/edit.php");
	}

	public function delete(){
		$id=$_GET['id'];
		ProductProvider::delete($id);
		header("Location:./?controller=productprovider&accion=index");
	}
}
?>
