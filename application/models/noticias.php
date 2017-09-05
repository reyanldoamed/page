<?php
	/**
	* 
	*/
	class Noticias extends CI_Model
	{
		
		public function getnoticias()
		{
			$result = $this->db->query("SELECT * FROM avisos WHERE estado = 1");
			return $result;
		}
	}
?>