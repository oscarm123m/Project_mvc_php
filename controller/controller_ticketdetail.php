
<?php
include_once("model/detailticket.php");
include_once("conexion.php");

class ControllerTicketdetail{
	
	public function index(){
		//print_r(ProductType::consultar());
		$detailtickets=Ticketdetail::consultar();
		
		if($_POST){
			//print_r($_POST);
			$amount=$_POST['amount'];
			$value=$_POST['value'];
			$address=$_POST['address'];
			$request=$_POST['request'];
			$approved=$_POST['approved'];
			$description=$_POST['description'];
			$tax=$_POST['tax'];
			$product=$_POST['product'];
			
			Ticketdetail::create($amount,$value,$address,$request,$approved,$description,$tax,$product);
			header("Location:./?controller=ticketdetail&accion=index");

		}
		include_once("view/ticket_detail/index.php");

	}

	public function create(){
		if ($_POST) {
			//print_r($_POST);
			$value=$_POST['value'];
			$date=$_POST['date'];
			$costomer=$_POST['costomer'];

			Ticketdetail::edit($value,$date,$costomer);
			header("Location:./?controller=ticketdetail&accion=index");
		}
		include_once("view/ticket_detail/index.php");
	}

	public function edit(){
		$id=$_GET['id'];
		$ticket=(Ticketdetail::search($id));

		if ($_POST) {
			//print_r($_POST);
			$id=$_POST['id'];
			$dni=$_POST['dni'];
			$nombre=$_POST['nombre'];
			$last=$_POST['last'];
			$phone=$_POST['phone'];
			$address=$_POST['address'];
			$mail=$_POST['mail'];

			Ticketdetail::edit($id,$dni,$nombre,$last,$phone,$address,$mail);
			header("Location:./?controller=ticket&accion=index");
		}
		include_once("view/ticket/edit.php");
	}

	public function delete(){
		$id=$_GET['id'];
		Ticketdetail::delete($id);
		header("Location:./?controller=ticketdetail&accion=index");
	}
}
?>