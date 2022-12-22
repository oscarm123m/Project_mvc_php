<?php
include_once("model/provider.php");
include_once("conexion.php");

class ControllerProvider{
	public function index(){
		//print_r(ProductType::consultar());
		$providers=Provider::consultar();
		include_once("view/provider/index.php");
	}

	public function create(){
		if($_POST){
			$nombre=$_POST['nombre'];
			$address=$_POST['address'];
			$number=$_POST['number'];
			$url=$_POST['url'];
			$nit=$_POST['nit'];
			Provider::create($nombre,$address,$number,$url,$nit);
			header("Location:./?controller=provider&accion=index");
		}
		include_once("view/provider/create.php");
	}

	public function edit(){
		$id=$_GET['id'];
		$provider=(Provider::search($id));

		if ($_POST) {
			print_r($_POST);
			$id=$_POST['id'];
			$nombre=$_POST['nombre'];
			$address=$_POST['address'];
			$number=$_POST['number'];
			$url=$_POST['url'];
			$nit=$_POST['nit'];

			Provider::edit($id,$nombre,$address,$number,$url,$nit);
			header("Location:./?controller=provider&accion=index");
		}
		include_once("view/provider/edit.php");
	}

	public function delete(){
		$id=$_GET['id'];
		Provider::delete($id);
		header("Location:./?controller=provider&accion=index");
	}
}
?>