<?php
include_once("model/ticket.php");
include_once("conexion.php");

class ControllerTicket{
	public function index(){
		//print_r(ProductType::consultar());
		$tickets=Ticket::consultar();
		include_once("view/ticket/index.php");
	}
	public function create(){
		//print_r(ProductType::consultar());
		$detailtickets=Ticket::consultardetalle();
		include_once("view/ticket/create.php");
	}

	public function create1(){
		if($_POST){
			$dni=$_POST['dni'];
			$nombre=$_POST['nombre'];
			$last=$_POST['last'];
			$phone=$_POST['phone'];
			$address=$_POST['address'];
			$mail=$_POST['mail'];
			Ticket::create($dni,$nombre,$last,$phone,$address,$mail);
			header("Location:./?controller=ticket&accion=index");
		}
		include_once("view/ticket/create.php");
	}

	public function edit(){
		$id=$_GET['id'];
		$ticket=(Ticket::search($id));

		if ($_POST) {
			//print_r($_POST);
			$id=$_POST['id'];
			$dni=$_POST['dni'];
			$nombre=$_POST['nombre'];
			$last=$_POST['last'];
			$phone=$_POST['phone'];
			$address=$_POST['address'];
			$mail=$_POST['mail'];

			Ticket::edit($id,$dni,$nombre,$last,$phone,$address,$mail);
			header("Location:./?controller=ticket&accion=index");
		}
		include_once("view/ticket/edit.php");
	}

	public function delete(){
		$id=$_GET['id'];
		Ticket::delete($id);
		header("Location:./?controller=ticket&accion=index");
	}
}
?>