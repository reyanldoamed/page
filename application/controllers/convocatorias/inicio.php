<?php
/**
* 
*/
class Inicio extends CI_Controller
{
	
	public function index()
	{
		$this->load->model('eventos');
		$result1=$this->eventos->ordenar();
		$result = $this->db->get('dudas');
		$data = array(
			'consulta' => $result,
			'consulta1' =>$result1
		 );
		$this->load->view('convocatorias/homeCo',$data);
	}
} 