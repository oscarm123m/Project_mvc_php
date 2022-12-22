<?php
class Ticketdetail{

	public $id;
	public $name;
	public $tax_name;
	public $tax_value;
	public $amount;
	public $value;
	public $address;
	public $request;
	public $approved;
	public $description;

	public function __construct($id,$name,$tax_name,$tax_value,$amount,$value,$address,$request,$approved,$description){
		$this->id_detail_ticket=$id;
		$this->id_person=$name;
		$this->tax_name=$tax_name;
		$this->tax_value=$tax_value;
		$this->amount=$amount;
		$this->unit_value=$value;
		$this->address=$address;
		$this->devolution_request=$request;
		$this->devolution_approved=$approved;
		$this->description=$description;
	}

	public static function consultar(){
		$listDetailTicket=[];

		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT dt.id_detail_ticket as id, p.product_name as pro_name, tax.tax_name as iva, tax.tax_value as iva_value, dt.amount as amount, dt.unit_value as value, dt.address as address, dt.devolution_request as request, dt.devolution_approved as approved, dt.description as description FROM detail_ticket dt, tax_price_product tpp, ticket t, tax tax, price_product pp, product p WHERE tpp.fk_id_detail_ticket=dt.id_detail_ticket AND t.fk_id_detail_ticket<>dt.id_detail_ticket AND tpp.fk_id_tax=tax.id_tax AND tpp.fk_id_price_product=pp.id_price_product AND pp.fk_id_product=p.id_product";
		$sql=$conexion->prepare($consulta);
		$sql->execute();

		foreach($sql->fetchAll() as $detailticket){
			$listDetailTicket[]= new Ticketdetail($detailticket['id'],$detailticket['pro_name'],$detailticket['iva'],$detailticket['iva_value'],$detailticket['amount'],$detailticket['value'],$detailticket['address'],$detailticket['request'],$detailticket['approved'],$detailticket['description']);
		}

		return $listDetailTicket;

	}

	public static function create($amount,$value,$address,$request,$approved,$description,$tax,$product){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="INSERT INTO detail_ticket(amount, unit_value, address, devolution_request, devolution_approved, description) VALUES(?,?,?,?,?,?)";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($amount,$value,$address,$request,$approved,$description));

		if ($sql!=0) {
			$objeto2=new Conexion();
			$conexion2=$objeto2->Conectar();
			$consulta2="SELECT * FROM detail_ticket ORDER BY id_detail_ticket DESC LIMIT 1";
			$sql2=$conexion2->prepare($consulta2);
			$sql2->execute();
			$data2 = $sql2->fetchAll();
			foreach ($data2 as $valores):
		    $id=$valores["id_detail_ticket"];
		    endforeach;

			$objeto1=new Conexion();
			$conexion1=$objeto1->Conectar();
			$consulta1="INSERT INTO tax_price_product(fk_id_price_product, fk_id_tax, fk_id_detail_ticket) VALUES(?,?,?)";
			$sql1=$conexion1->prepare($consulta1);
			$sql1->execute(array($product,$tax,$id));
		}

		
	}

	public static function search($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="SELECT * FROM product WHERE id_product=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));

		$product=$sql->fetch();
		return new Ticketdetail($product['id_product'],$product['product_name'],$product['product_stock'],$product['fk_id_product_type']);
	}

	public static function edit($value,$date,$costomer){
		$objeto2=new Conexion();
		$conexion2=$objeto2->Conectar();
		$consulta2="SELECT dt.id_detail_ticket as id FROM detail_ticket dt, ticket t, tax_price_product tpp WHERE tpp.fk_id_detail_ticket=dt.id_detail_ticket AND t.fk_id_person_admin<>dt.id_detail_ticket";
		$sql2=$conexion2->prepare($consulta2);
		$sql2->execute();
		$data2 = $sql2->fetchAll();
		foreach ($data2 as $valores):
	    $id=$valores["id"];
	    endforeach;
		//-----------------
		if ($sql2!=0) {
			$number=1;
			$objeto=new Conexion();
			$conexion=$objeto->Conectar();
			$consulta="INSERT INTO ticket(paid_value, ticket_date, fk_id_person_customer, fk_id_person_cashier, fk_id_detail_ticket, fk_id_person_admin) VALUES(?,?,?,?,?,?)";
			$sql=$conexion->prepare($consulta);
			$sql->execute(array($value,$date,$costomer,$number,$id,$number));
		}
	}

	public static function delete($id){
		$objeto=new Conexion();
		$conexion=$objeto->Conectar();
		$consulta="DELETE FROM tax_price_product WHERE fk_id_detail_ticket=?";
		$sql=$conexion->prepare($consulta);
		$sql->execute(array($id));

		if ($sql!=0) {
			$objeto=new Conexion();
			$conexion=$objeto->Conectar();
			$consulta="DELETE FROM detail_ticket WHERE id_detail_ticket=?";
			$sql=$conexion->prepare($consulta);
			$sql->execute(array($id));
		}

	}
}
?>