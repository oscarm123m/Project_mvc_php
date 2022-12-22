<?php
include_once("model/product_type.php");
include_once("conexion.php");


class ControllerProductype{
	public function index(){
		//print_r(ProductType::consultar());
		$productTypes=ProductType::consultar();
		include_once("view/product_type/index.php");
	}

	public function create(){
		if($_POST){
			$nombre=$_POST['nombre'];
			ProductType::create($nombre);
			header("Location:./?controller=productype&accion=index");
		}
		include_once("view/product_type/create.php");
	}

	public function edit(){
		$id=$_GET['id'];
		$productType=(ProductType::search($id));

		if ($_POST) {
			print_r($_POST);
			$id=$_POST['id'];
			$nombre=$_POST['nombre'];

			ProductType::edit($id,$nombre);
			header("Location:./?controller=productype&accion=index");
		}
		include_once("view/product_type/edit.php");
	}

	public function delete(){
		$id=$_GET['id'];
		ProductType::delete($id);
		header("Location:./?controller=productype&accion=index");
	}
}
?>