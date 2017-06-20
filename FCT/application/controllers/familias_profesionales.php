<?php

class Familias_profesionales extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Familias_profesionales_model');
	}

	function catalogo() {
		$datos['fct_familias'] = $this->Familias_profesionales_model->listado_familias_profesionales();
		$datos['titulo'] = "Familias Profesionales- FP Conecta";
		$datos['contenido']='principal';
		$this->load->view ( 'front_end/catalogo_familias' , $datos);
	}

}