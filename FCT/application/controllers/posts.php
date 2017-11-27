<?php

class Posts extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Posts_model');
	}

	function catalogo() {
		$datos['fct_posts'] = $this->Posts_model->listado_posts();
		$datos['titulo'] = "Listado de posts - FP Conecta";
		$datos['contenido']='principal';
		$this->load->view ( 'front_end/catalogo_posts' , $datos);
	}
	
	function insertar_post()
	{
		if($this->input->post('submit'))
		{
			$this->form_validation->set_rules('titulo_post','titulo_post','trim|required|xss_clean|max_lenght[50]|min_length[2]');
			$this->form_validation->set_rules('keywords','keywords','trim|required|xss_clean|max_lenght[250]|min_length[10]');
			$this->form_validation->set_rules('mensaje','mensaje','trim|required|xss_clean');
				
			//validamos que se introduzcan los campos requeridos con la función de ci required
			$this->form_validation->set_message('required', 'Campo %s es obligatorio');
			$this->form_validation->set_message('min_length', 'Campo %s debe tener al menos %s car&aacute;cteres');
			$this->form_validation->set_message('max_length', 'Campo %s debe tener menos %s car&aacute;cteres');
				
			if (!$this->form_validation->run())
			{
				$this->catalogo();
			}
			//insertamos en la base de datos
			else
			{
				$titulo_post = $this->input->post('titulo_post');
				$keywords = $this->input->post('keywords');
				$mensaje = $this->input->post('mensaje');
				date_default_timezone_set("Europe/Madrid");
				$fecha_post = date('Y-m-d') ;
				$nueva_insercion = $this->Posts_model->nuevo_comentario(
						$titulo_post,
						$keywords,
						$mensaje,
						$fecha_post
						);
				redirect(base_url("posts"), "refresh");
			}
		}
	}

}