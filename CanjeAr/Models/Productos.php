<?php

//  Models/Productos.php

class Productos extends Model{

	
	public function getTodos(){
		$this->db->query("SELECT * FROM productos");
		return $this->db->fetchAll();
	}
}

?>