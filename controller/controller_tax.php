<?php
include_once("model/tax.php");
include_once("conexion.php");

class ControllerTax{
	public function index(){
		//print_r(ProductType::consultar());
		$taxs=Tax::consultar();
		include_once("view/tax/index.php");
	}

	public function create(){
		if($_POST){
			$nombre=$_POST['nombre'];
			$value=$_POST['valor'];
			$date=$_POST['fecha'];
			Tax::create($value,$nombre,$date);
			header("Location:./?controller=tax&accion=index");
		}
		include_once("view/tax/create.php");
	}

	public function edit(){
		$id=$_GET['id'];
		$tax=(Tax::search($id));

		if ($_POST) {
			//print_r($_POST);
			$id=$_POST['id'];
			$nombre=$_POST['nombre'];
			$value=$_POST['valor'];
			$date=$_POST['fecha'];

			Tax::edit($id,$value,$nombre,$date);
			header("Location:./?controller=tax&accion=index");
		}
		include_once("view/tax/edit.php");
	}

	public function delete(){
		$id=$_GET['id'];
		Tax::delete($id);
		header("Location:./?controller=tax&accion=index");
	}
}
?>