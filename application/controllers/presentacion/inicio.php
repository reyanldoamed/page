<?php
/**
* 
*/
class Inicio extends CI_Controller
{
	
	public function index($id = '')
	{
		$this->load->model('presentacion');
		$result=$this->presentacion->getid($id);
		$result1 = $this->db->get('dudas');
		$result2 = $this->db->get('presentacion');
		$data = array(
			'consulta' => $result ,
			'consulta1' =>$result1,
			'consulta2' =>$result2
		);
		$this->load->view("presentacion/homeP",$data);
	}
}
?> 