<?php
/**
* 
*/
class Eventos extends CI_Model
{
	
	public function ordenar()
	{
		$result = $this->db->query("SELECT * FROM eventos ORDER BY 5 ASC LIMIT 2" );
		return $result;
	}
}