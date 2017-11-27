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
	
	function info_modulo($index) {
		$datos['fct_modulos'] = $this->Modulos_model->listado_modulos();
		$datos['aaa']= $this->Modulos_model->detalle_modulo(str_replace("-", " ",$index));
		$datos['titulo'] = "Catalogo de Modulos - FP Conecta";
		$datos['contenido']= 'principal';
		$this->load->view ( 'pages/modulo_page' , $datos);
	}

}