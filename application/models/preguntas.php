<?php
	/**
	* 
	*/
	class Preguntas extends CI_Model
	{
		
		public function getpreguntas($id = '')
		{
			$result = $this->db->query("SELECT * FROM dudas WHERE id = '" . $id ."' LIMIT 1");
			return $result;
		}
	}
?>