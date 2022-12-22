<?php
include_once("model/person.php");
include_once("conexion.php");

class ControllerPerson{
	public function index(){
		//print_r(ProductType::consultar());
		$persons=Person::consultar();
		include_once("view/person/index.php");
	}

	public function create(){
		if($_POST){
			$dni=$_POST['dni'];
			$nombre=$_POST['nombre'];
			$last=$_POST['last'];
			$phone=$_POST['phone'];
			$address=$_POST['address'];
			$mail=$_POST['mail'];
			Person::create($dni,$nombre,$last,$phone,$address,$mail);
			header("Location:./?controller=person&accion=index");
		}
		include_once("view/person/create.php");
	}

	public function edit(){
		$id=$_GET['id'];
		$person=(Person::search($id));

		if ($_POST) {
			//print_r($_POST);
			$id=$_POST['id'];
			$dni=$_POST['dni'];
			$nombre=$_POST['nombre'];
			$last=$_POST['last'];
			$phone=$_POST['phone'];
			$address=$_POST['address'];
			$mail=$_POST['mail'];

			Person::edit($id,$dni,$nombre,$last,$phone,$address,$mail);
			header("Location:./?controller=person&accion=index");
		}
		include_once("view/person/edit.php");
	}

	public function delete(){
		$id=$_GET['id'];
		Person::delete($id);
		header("Location:./?controller=person&accion=index");
	}
}
?>