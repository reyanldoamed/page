<?php 
 /**
   * 
   */
   class Home extends CI_Controller
   {
   	
	   	public function index( $info = '')
	   	{
            /*
            $data = array('title' => 'Coordinacios Academica');
            $this->load->view('principal2/head',$data);


            $this->load->view('principal2/navar');


            $this->load->model('noticias');
            $result = $this->noticias->getnoticias();
            $data = array('consulta' => $result );
            $this->load->view('principal2/carrosel',$data);

            //$this->load->view('principal/servicios');

            //$this->load->view('principal/carreras');

            $this->load->view('principal2/footer');

           */
	   		$data = array('title' => 'Coordinacion Academica');
	   		$this->load->view('principal/head',$data);

            $result = $this->db->get('dudas');
            $data = array('consulta' => $result );
            $this->load->view('principal/navar',$data);


            $result = $this->db->get('noticias');
            $data = array(
               'consulta' => $result
            );
            //$this->load->model('noticias');
            //$result = $this->noticias->getnoticias();
            //$data = array('consulta' => $result );
            $this->load->view('principal/carrusel',$data);

            //$this->load->view('principal/servicios');

            $this->load->model('carreras');
            $result = $this->carreras->getcarreras();
            $data=array(
               'consulta' => $result
            );
            $this->load->view('principal/carreras',$data);

            $this->load->view('principal/footer');

	   	}
   }  
?>