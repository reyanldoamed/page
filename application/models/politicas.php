<?php
	/**
	* 
	*/
	class Politicas extends CI_Model
	{
		
		public function getpoliticas($id = '')
		{
			$result = $this->db->query("SELECT * FROM politicas WHERE id = '" . $id ."' LIMIT 1");
			return $result;
		}
		public function getfortype($tipo = '')
		{
			$result = $this->db->query("SELECT * FROM politicas WHERE tipo = '" . $tipo ."'");
			return $result;
		}
		public function gettype()
		{
			$result = $this->db->query("SELECT * FROM politicas WHERE tipo = 'extraordinaria'");
			return $result;
		}
	}
?>