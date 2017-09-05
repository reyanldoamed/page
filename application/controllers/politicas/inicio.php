<?php
/**
* 
*/
class Inicio extends CI_Controller
{
	
	public function index($tipo ='')
	{
		$this->load->model('politicas');
		$result=$this->politicas->getfortype($tipo);
		$result1 = $this->db->get('dudas');
		$data = array(
			'consulta' => $result,
			'consulta1' => $result1,
			'consulta2' => $tipo
		 );
		$this->load->view('politicas/homePo',$data);
	}
	public function display($id = '')
	{

		$this->load->model('politicas');
		$fila = $this->politicas->getpoliticas($id); 
		$result = $this->db->get("politicas");
		$result1 = $this->db->get("dudas");

		$data = array('consulta' => $fila,
					'consulta1' => $result,
					'consulta2' => $result1,
		);
		$this->load->view("politicas/todo",$data);

 
		/*
		$result = $this->db->get("politicas");
		$data = array('consulta' => $result );
		$this->load->view("politicas/todo",$data);*/
	}
}