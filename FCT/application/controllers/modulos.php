<?php

class Modulos extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Modulos_model');
	}

	function catalogo() {
		$datos['fct_modulos'] = $this->Modulos_model->listado_modulos();
		$datos['titulo'] = "Catalogo de Modulos - FP Conecta";
		$datos['contenido']='principal';
		$this->load->view ( 'front_end/catalogo_modulos' , $datos);
	}

}