<?php
include_once("model/person_type.php");
include_once("conexion.php");

class ControllerPersontype{
	public function index(){
		//print_r(ProductType::consultar());
		$personTypes=PersonType::consultar();
		include_once("view/person_type/index.php");
	}

	public function create(){
		if($_POST){
			$nombre=$_POST['nombre'];
			PersonType::create($nombre);
			header("Location:./?controller=persontype&accion=index");
		}
		include_once("view/person_type/create.php");
	}

	public function edit(){
		$id=$_GET['id'];
		$personType=(PersonType::search($id));

		if ($_POST) {
			print_r($_POST);
			$id=$_POST['id'];
			$nombre=$_POST['nombre'];

			PersonType::edit($id,$nombre);
			header("Location:./?controller=persontype&accion=index");
		}
		include_once("view/person_type/edit.php");
	}

	public function delete(){
		$id=$_GET['id'];
		PersonType::delete($id);
		header("Location:./?controller=persontype&accion=index");
	}
}
?>