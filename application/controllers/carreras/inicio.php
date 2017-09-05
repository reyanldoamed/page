<?php
/**
* 
*/
class Inicio extends CI_Controller
{
	
	public function index()
	{
		$result = $this->db->get('ofertas');
		$result1 = $this->db->get('dudas');
		$data = array(
			'consulta' => $result,
			'consulta1' => $result1
		 ); 
		$this->load->view('carreras/homeCa',$data);
	}
}