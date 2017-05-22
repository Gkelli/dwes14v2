<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Principal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->load->model('Centros_model');
	}

	function index() {
		//$datos['fct_centros'] = $this->Centros_model->listado_centros();
		$datos['titulo'] = "Principal- FP Conecta";
		$datos['contenido']='principal';
		$this->load->view ( 'front_end/principal' , $datos);
	}

	//muestra detalle del centro por id
	// 	function detalle_centro($id_centro){
	// 		$id_limpio = $this -> security ->xss_clean($id_centro);
	// 		$datos['fct_detalle'] = $this -> Centros_model -> detalle_centro($id_limpio);
	// 		$this->load->view ( 'detalle' , $datos);
	// 	}

	//muestra detalle del centro por el nombre
// 	function detalle_centro($nombre_centro){
// 		$nombre_limpio = str_replace("-", " ", $nombre_centro);
// 		$datos['fct_detalle'] = $this -> Centros_model -> detalle_centro($nombre_limpio);
// 		$datos['titulo'] = $datos['fct_detalle']->nombre_centro;
// 		$datos['contenido']='detalle';
// 		$this->load->view ( 'templates/template' , $datos);
// 	}

	//muestra post por URL

	// 	function detalle_post($url_post){
	// 		$url_limpia = $this -> security ->xss_clean($url_post);
	// 		$datos['fct_detalle_post'] = $this -> Post_model -> detalle_centro($url_limpia);
	// 		$datos['titulo'] = $datos['fct_detalle']->fct_detalle_post;
	// 		$this->load->view ( 'detalle' , $datos);
	// 	}


}
