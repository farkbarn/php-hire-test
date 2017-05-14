<?php

/**
* 
*/
//http://php.net/manual/es/pdo.construct.php
class AbsDatabase {
	private $host='localhost';
	private $dbname='pdo';
	private $user='user';
	private $pass='none'; public $connex;

	public function conn()
	{
		try{
			$this->connex= new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.'',$this->user,$this->pass);
			$this->connex->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			echo "ERR: ".$e->getMessage();
		}
	}

	public function Dconn()
	{
		$this->connex=null;
	}
}

?>