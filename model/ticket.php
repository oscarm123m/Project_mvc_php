<?php
class Ticket{

	public $id;
	public $value;
	public $date;
	public $personcustomer;
	public $personcashier;
	public $detailticket;
	public $personadmin;

	public function __construct($id,$value,$date,$personcustomer,$personcashier,$detailticket,$personadmin){
		$this->id_ticket=$id;
		$this->paid_value=$value;
		$this->ticket_date=$date;
		$this->fk_id_person_customer=$personcustomer;
		$this->fk_id_person_cashier=$personcashier;
		$this->fk_id_detail_ticket=$detailticket;
		$this->fk_id_person_admin=$personadmin;
	}

	public static function consultar(){
		$listTicket=[];

		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT t.id_ticket as id, t.paid_value as value, t.ticket_date as datee, p.person_name as cliente, pp.person_name as cajero, ppp.person_name as adminn, dt.address as address FROM ticket t, person p, person pp, person ppp, detail_ticket dt WHERE t.fk_id_person_customer=p.id_person AND t.fk_id_person_cashier=pp.id_person AND t.fk_id_person_admin=ppp.id_person AND t.fk_id_detail_ticket=dt.id_detail_ticket";
		$sql=$conexion->prepare($consulta);
		$sql->execute();

		foreach($sql->fetchAll() as $ticket){
			$listTicket[]= new Ticket($ticket['id'],$ticket['value'],$ticket['datee'],$ticket['cliente'],$ticket['cajero'],$ticket['adminn'],$ticket['address']);
		}

		return $listTicket;

	}

	public static function consultardetalle(){
		$listDetailTicket=[];

		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT p.product_name as pro_name, tax.tax_name as iva, tax.tax_value as iva_value, dt.amount as amount, dt.unit_value as value, dt.address as address, dt.devolution_request as request, dt.devolution_approved as approved, dt.description as description FROM detail_ticket dt, tax_price_product tpp, ticket t, tax tax, price_product pp, product p WHERE tpp.fk_id_detail_ticket=dt.id_detail_ticket AND t.fk_id_detail_ticket<>dt.id_detail_ticket AND tpp.fk_id_tax=tax.id_tax AND tpp.fk_id_price_product=pp.id_price_product AND pp.fk_id_product=p.id_product";
		$sql=$conexion->prepare($consulta);
		$sql->execute();

		foreach($sql->fetchAll() as $detailticket){
			$listDetailTicket[]= new Ticket($detailticket['pro_name'],$detailticket['iva'],$detailticket['iva_value'],$detailticket['amount'],$detailticket['value'],$detailticket['address'],$detailticket['request'],$detailticket['approved'],$detailticket['description']);
		}

		return $listDetailTicket;

	}

	public static function create($value,$date,$personcustomer,$personcashier,$detailticket,$personadmin){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="INSERT INTO product(product_name, product_stock, fk_id_product_type) VALUES(?,?,?)";
		$sql=$conexion->prepare($consulta);

		$sql->execute(array($nombre,$producttype,$stock));
	}

	public static function search($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT * FROM product WHERE id_product=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));

		$product=$sql->fetch();
		return new Ticket($product['id_product'],$product['product_name'],$product['product_stock'],$product['fk_id_product_type']);
	}

	public static function edit($id,$nombre,$stock,$producttype){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="UPDATE product SET product_name=?, product_stock=?, fk_id_product_type=? WHERE id_product=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($nombre,$stock,$producttype,$id));
	}

	public static function delete($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="DELETE FROM ticket WHERE id_ticket=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));

	}
}
?>