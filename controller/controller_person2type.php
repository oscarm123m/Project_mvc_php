<?php
class ControllerPerson2type{
	public function index(){
		include_once("view/person2_type/index.php");
	}
	public function create(){
		if ($_POST) {
			// code...
		}
		include_once("view/person2_type/create.php");
	}
	public function edit(){
		include_once("view/person2_type/edit.php");
	}
}
?>