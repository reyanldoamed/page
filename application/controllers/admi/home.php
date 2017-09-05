<?php
/**
* 
*/

class Home extends CI_Controller
{
	
	
	public function index()
	{
		$this->load->view('admin/index');
	}
	public function login()
	{
		$carnet  = $this->input->post('carnet');
		$pasword  = $this->input->post('password');


		$this->load->model('user');
		$fila = $this->user->getuser($carnet);

		if ($fila != null) {
			if ($fila->contraseña == $pasword) {
				$data = array(
					'carnet' => $carnet,
					'login' => true
				 );
				$this->session->set_userdata($data);
				$this->load->view('admin/home/head');
				$this->load->view('admin/home/navar');
				$this->load->view('admin/home/centro');
			}else{
				header("Location: ". base_url());
			}
			
		}else{
			header("Location: " . base_url());
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		header("Location:" . base_url());
	}
	public function presentacion()
	{
		$this->load->view('admin/home/head'); 
		$this->load->view('admin/home/navar');
		$this->load->view('admin/uno');
	}
	public function politicas()
	{
		$this->load->view('admin/home/head');
		$this->load->view('admin/home/navar');
		$result1 = $this->db->get('administrador');
		$result = $this->db->get('politicas');
		$this->load->model('politicas');
		$result2 = $this->politicas->gettype();
		$data = array(
			'consulta' => $result,
			'consulta1' => $result1,
			'consulta2' => $result2
			 );
		$this->load->helper('bootstrap');
		$this->load->view('admin/dos',$data);
	}
	public function carreras()
	{
		$this->load->view('admin/home/head');
		$this->load->view('admin/home/navar');
		$result1 = $this->db->get('administrador');
		$result = $this->db->get('ofertas');
		$data = array(
			'consulta' => $result,
			'consulta1' => $result1
		);
		$this->load->view('admin/tres',$data);
	}
	public function dudas()
	{
		$this->load->view('admin/home/head');
		$this->load->view('admin/home/navar');
		$result1 = $this->db->get('administrador'); 
		$result = $this->db->get('dudas');
		$data = array(
			'consulta' => $result,
			'consulta1' => $result1
		);
		$this->load->view('admin/cuatro',$data); 
	}
	public function actualizarpre()
	{
		$data = array(
			'tipo'=> $this->input->post('tipo'),
			'cuerpo' => $this->input->post('cuerpo')
		);
		$this->load->model('user');
		$bool = $this->user->actualizarpre($data);
		if ($bool) {
			header("Location:" . base_url() . "admi/home/presentacion" );
		}
	}
	public function insertarpol()
	{
		$post = $this->input->post();
		$this->load->model('file');
		$file_name = $this->file->UploadImage('./public/img/','no jalas');
		$post['file_name'] = $file_name;
		$this->load->model('user');
		$bool = $this->user->insertapol($post);
		if($bool){
			header("Location: " . base_url() . "admi/home/politicas" );
		}else{
			
		}
	}
	public function insertarcar()
	{
		$post = $this->input->post();
    
        $this->load->model('file');
		$file_name = $this->file->UploadImage('./public/img/','no jalas img');
		$post['file_name'] = $file_name;
		$this->load->model('user');
		$bool = $this->user->insertacarre($post);
		if($bool){
			header("Location: " . base_url() . "admi/home/carreras" );
		}else{
			
		}
	}
	public function insertardudas()
	{
		$post = $this->input->post();
		$this->load->model('file');
		$file_name = $this->file->UploadImage('./public/img/','no jalas');
		$post['file_name'] = $file_name;
		$this->load->model('user');
		$bool = $this->user->insertardudas($post);
		if($bool){
			header("Location: " . base_url() . "admi/home/dudas" );
		}else{
			
		}
	}
	public function updatecar()
	{
		$post = $this->input->post();
		$this->load->model('file');
		$file_name = $this->file->UploadImage('./public/archivos/','no jalas');
		$post['file_name'] = $file_name;
		$this->load->model('user');
		$bool = $this->user->actualizarofertas($post);
		if($bool){
			header("Location: " . base_url() . "admi/home/carreras" );
		}else{
			
		}
		
	}
	public function updatepol()
	{
		$post = $this->input->post();
		$this->load->model('file');
		$file_name = $this->file->UploadImage('./public/archivos/','no jalas');
		$post['file_name'] = $file_name;
		$this->load->model('user');
		$bool = $this->user->actualizarpoliticas($post);

		if($bool){
			header("Location: " . base_url() . "admi/home/politicas" );
		}else{
			
		}

	}
	public function eventos()
	{
		$this->load->view('admin/home/head');
		$this->load->view('admin/home/navar');	
		$result1 = $this->db->get('administrador');
		$result = $this->db->get('eventos');
		$data = array(
			'consulta' => $result,
			'consulta1' => $result1
		);
		$this->load->view('admin/quinto',$data);
	}
	public function insertareventos()
	{
		$post = $this->input->post();
		$this->load->model('user');
		$bool = $this->user->insertareventos($post);
		if($bool){
			header("Location: " . base_url() . "admi/home/eventos" );
		}else{
			
		}
	}
	public function noticias()
	{
		$this->load->view('admin/home/head');
		$this->load->view('admin/home/navar');
		$result1 = $this->db->get('administrador');
		$result = $this->db->get('noticias');
		$data = array(
			'consulta' => $result,
			'consulta1' => $result1,
		);
		$this->load->helper('bootstrap');
		$this->load->view('admin/sexto',$data);
	}
	public function insertarnoticias()
	{
		$post = $this->input->post();
		$this->load->model('user');
		$bool = $this->user->insertarnoticias($post);
		if($bool){
			header("Location: " . base_url() . "admi/home/noticias" );
		}else{
			
		}
	}

}