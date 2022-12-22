<?php
include_once("model/product.php");
include_once("conexion.php");

class ControllerProduct{
	public function index(){
		//print_r(ProductType::consultar());
		$products=Product::consultar();
		include_once("view/product/index.php");
	}

	public function create(){
		if($_POST){
			$nombre=$_POST['nombre'];
			$producttype=$_POST['tipoproduct'];
			$stock=$_POST['stock'];
			Product::create($nombre,$producttype,$stock);
			header("Location:./?controller=product&accion=index");
		}
		include_once("view/product/create.php");
	}

	public function edit(){
		$id=$_GET['id'];
		$product=(Product::search($id));

		if ($_POST) {
			//print_r($_POST);
			$id=$_POST['id'];
			$nombre=$_POST['nombre'];
			$tipoproduct=$_POST['tipoproduct'];
			$stock=$_POST['stock'];

			Product::edit($id,$nombre,$stock,$tipoproduct);
			header("Location:./?controller=product&accion=index");
		}
		include_once("view/product/edit.php");
	}

	public function delete(){
		$id=$_GET['id'];
		Product::delete($id);
		header("Location:./?controller=product&accion=index");
	}
}
?>