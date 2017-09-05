<?php
/**
* 
*/
class User extends CI_Model
{
	
	public function getuser($carnet = '')
	{
		$result = $this->db->query("SELECT * FROM administrador WHERE ci = '" . $carnet . "' LIMIT 1");
		if ($result->num_rows() > 0) {
			return $result->row();
		}else{
			return null;
		}
	}
	public function actualizarpre($data = null) 
	{
		if ($data != null) {
			$cuerpo =$data['cuerpo'];
			$titulo =$data['tipo'];
			
			$SQL = " UPDATE presentacion SET cuerpo = '$cuerpo' WHERE titulo = '$titulo'";

			if ($this->db->query($SQL)) {
				return true;
			}
		}
		return false;

		/*$dato = array(
			'cuerpo' => $this->input->post('cuerpo'),
			'tipo' => $this->input->post('tipo')
		);
		 //echo $dato['tipo'];

		$SQL = " UPDATE presentacion SET cuerpo = '$dato['cuerpo']' WHERE titulo = '$dato['tipo']'";

		 if ($this->db->query($SQL))
		 {
		 	return true;
		 }else{
		 	return false;
		 }*/
	}
	public function insertapol($post = null )
	{
		if ($post != null) {
			$titulo =$post['titulo'];
			$descripcion =$post['descripcion'];
			$file_name =$post['file_name'];
			$requisitos =$post['requisitos'];
			$tipo =$post['tipo'];
			$ci =$post['carnet'];

			$SQL = "INSERT INTO politicas(id,titulo,descripcion,img,requisitos,tipo,encargado) VALUES(null,'$titulo','$descripcion','$file_name', '$requisitos','$tipo','$ci');";

			if ($this->db->query($SQL)) {
				return true;
			}

		}
		return false;
	}
	public function insertacarre($post = null )
	{
		if ($post != null) {
			$nombre =$post['nombre'];
			$file_name =$post['file_name'];
			$ci =$post['carnet'];
			$SQL = "INSERT INTO ofertas(id,nombre,img,file,encargado) VALUES(null,'$nombre','$file_name',null,'$ci');";

			if ($this->db->query($SQL)) {
				return true;
			}

		}
		return false;
	}
	public function insertardudas($post = null )
	{
		if ($post != null) {
			$titulo =$post['titulo'];
			$descripcion =$post['descripcion'];
			$file_name =$post['file_name'];
			$requisitos =$post['requisitos'];
			$ci =$post['carnet'];

			$SQL = "INSERT INTO dudas(id,titulo,descripcion,img,requisitos,encargado) VALUES(null,'$titulo','$descripcion','$file_name', '$requisitos',$ci);";

			if ($this->db->query($SQL)) {
				return true;
			}

		}
		return false;
	}
	public function actualizarofertas($post = '')
	{
		if ($post != null) {
			$nombre =$post['carrera'];
			$file =$post['file_name'];
			
			$SQL = " UPDATE ofertas SET file = '$file' WHERE nombre = '$nombre'";

			if ($this->db->query($SQL)) {
				return true;
			}
		}
		return false;
	}
	public function actualizarpoliticas($post = '')
	{
		if ($post != null) {
			$nombre =$post['politica'];
			$file =$post['file_name'];

			$SQL = " UPDATE politicas SET convocatoria = '$file' WHERE titulo = '$nombre'";

			if ($this->db->query($SQL)) {
				return true;
			}
		}
		return false;
	}
	public function insertareventos($post = null )
	{
		if ($post != null) {
			$titulo =$post['titulo'];
			$descripcion =$post['descripcion'];
			$fechaini =$post['fechaini'];
			$fechafin =$post['fechafin'];
			$video =$post['url'];
			$ci = $post['carnet'];


			$SQL = "INSERT INTO eventos(id,titulo,descripcion,video,fecha_inicio,fecha_final,encargado) VALUES(null,'$titulo','$descripcion','$video','$fechaini','$fechafin','$ci');";

			if ($this->db->query($SQL)) {
				return true;
			}

		}
		return false;
	}
	public function insertarnoticias($post = null )
	{
		if ($post != null) {
			$titulo =$post['titulo'];
			$descripcion =$post['descripcion'];
			$fechafin =$post['fechafin'];
			$ci = $post['carnet'];


			$SQL = "INSERT INTO noticias(id,titulo,cuerpo,fecha_limite,encargado) VALUES(null,'$titulo','$descripcion','$fechafin','$ci');";

			if ($this->db->query($SQL)) {
				return true;
			}

		}
		return false;
	}

	
}
?>