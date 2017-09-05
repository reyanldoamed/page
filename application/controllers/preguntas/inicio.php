<?php
/**
* 
*/
class Inicio extends CI_Controller
{
	
	public function index($id = '')
	{

		$this->load->model('preguntas');
		$fila = $this->preguntas->getpreguntas($id);

		$result = $this->db->get("dudas");

		$data = array(
			'consulta' => $fila,
			'consulta1' => $result
		);

		$this->load->view("preguntas/homePe",$data);


	}
}