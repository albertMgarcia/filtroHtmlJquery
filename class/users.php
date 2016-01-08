<?php

include 'database.php';

class Users extends DataBase{

	public function __construct(){
		parent::__construct();
	}

	public function listar_u(){

		$sth = $this->prepare('SELECT * FROM users');
		$sth->execute();
		$result = $sth->fetchAll();
		return $result;

	}

	public function mostrarF($opc = false){

		if($opc == 'A'){
			$sth = $this->prepare('SELECT * FROM users ORDER BY naUser ASC');
		}else{
			$sth = $this->prepare('SELECT * FROM users ORDER BY naUser DESC');
		}
		$sth->execute();
		$result = $sth->fetchAll();
		return $result;

	}

}