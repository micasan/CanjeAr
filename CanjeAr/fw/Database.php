<?php 
//Database.php

class Database{

	private $res;
	private $cn =  false;
	private static $instance;

	// patron singleton
	private function __construct(){} //la declaro private y vacia para que no se pueda usar desde otras 								   clsases.

	public static function getInstance(){
		if(!self::$instance) self::$instance =new Database; //self:: para usar variables de clase
		return self::$instance;
	}

	public function query($q){

		if(!$this->cn) $this->connect();
		$this->res = mysqli_query($this->cn,$q);

		if(mysqli_error($this->cn) != ""){
			echo 'ERROR SQL : '. mysqli_error($this->cn);
		}
	}

	private function connect(){
		$this->cn =mysqli_connect("localhost", "root", "","canjear");

	}

	public function fetch(){
		return mysqli_fetch_assoc($this->res);
	}

	public function fetchAll(){
		$aux = array();
		while($fila = $this->fetch()) $aux[] = $fila;
		return $aux;
	}

	public function numRows(){
		return mysqli_num_rows($this->res);
	}

	public function escape($str){
		if(!$this->cn) $this->connect();
		return mysqli_escape_string($this->cn, $str);
	}

	public function insertId(){
		return mysqli_insert_id($this->cn); //devuelve el id del ultimo insert
	}

}



?>