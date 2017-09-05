<?php
/**
* 
*/
class Carreras extends CI_Model
{
	
	public function getcarreras()
	{
		$result = $this->db->query("SELECT * FROM ofertas ORDER BY RAND()  LIMIT 3" );
		return $result;
	}
}