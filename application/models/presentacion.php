<?php
 /**
 * 
 */
 class Presentacion extends CI_Model
 {
 	
 	public function getid($id = '')
	{
		$result = $this->db->query("SELECT * FROM presentacion WHERE id = '" . $id ."'");
		return $result;
	}
 }
?>