<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Posts extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'Posts_model' );
		$this->load->model ( 'Usuarios_model' );
	}
	public function catalogo() {
		$datos ['fct_posts'] = $this->Posts_model->listado_posts ();
		$datos ['username_post'] = $this->Posts_model->listado_posts ();
		$datos ['titulo'] = "Listado de posts - FP Conecta";
		$datos ['contenido'] = 'principal';
		$this->load->view ( 'front_end/catalogo_posts', $datos );
	}
	public function info_post($index) {
		$datos ['post_detalle'] = $this->Posts_model->detalle_post ( $index );
		$datos ['titulo'] = "Info post - FP Conecta";
		$datos ['contenido'] = 'principal';
		$this->load->view ( 'pages/post_page', $datos );
	}
	public function insertar_post() {
		$data = new stdClass ();
		
		$this->load->helper ( 'form' );
		$this->load->library ( 'form_validation' );
		
		$this->form_validation->set_rules ( 'titulo_post', 'Titulo post', 'required' );
		$this->form_validation->set_rules ( 'keywords', 'Palabras-clave', 'required' );
		$this->form_validation->set_rules ( 'cuerpo_post', 'Cuerpo Post', 'required' );
		
		// validamos que se introduzcan los campos requeridos con la función de ci required
		$this->form_validation->set_message ( 'required', 'Campo %s es obligatorio' );
		$this->form_validation->set_message ( 'min_length', 'Campo %s debe tener al menos %s car&aacute;cteres' );
		$this->form_validation->set_message ( 'max_length', 'Campo %s debe tener menos %s car&aacute;cteres' );
		
		if ($this->form_validation->run () === false) {
			// si la validación es incorrecta, vamos a la vista de catalogo
			$this->catalogo ( $data );
			redirect ( 'posts/catalogo' );
		} else {
			
			$titulo_post = $this->input->post ( 'titulo_post' );
			$keywords = $this->input->post ( 'keywords' );
			$cuerpo_post = $this->input->post ( 'cuerpo_post' );
			$username = $_SESSION ['username'];
			
			if ($this->Usuarios_model->detalle_user ( $username )) {
				$id_usuario = $this->Usuarios_model->detalle_user ( $username )->id_usuario;
			}
			
			if ($this->Posts_model->nuevo_comentario ( $titulo_post, $keywords, $cuerpo_post, $id_usuario )) {
				$data->error = 'Se ha insertado correctamente tu post.';
				$data->username = $username;
				$this->catalogo ( $data );
				redirect ( 'posts/catalogo' );
			} else {
				
				$data->error = 'Ha ocurrido un problema durante de publicación de un nuevo Post. Por favor, intentelo nuevamente.';
				$this->catalogo ( $data );
				redirect ( 'posts/catalogo' );
			}
		}
	}
}