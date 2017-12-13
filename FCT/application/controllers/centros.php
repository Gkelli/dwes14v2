<?php

class Centros extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Centros_model');
	}

	function catalogo() {
		$datos['fct_centros'] = $this->Centros_model->listado_centros();
		$datos['titulo'] = "Catalogo de Centros - FP Conecta";
		$datos['contenido']='principal';
		$this->load->view ( 'front_end/catalogo_centros' , $datos);
	}
	
	function info_centro($index) {
		$datos['fct_centros'] = $this->Centros_model->listado_centros();
		$datos['centro']= $this->Centros_model->detalle_centro(str_replace("-", " ",$index));
		$datos['titulo'] = "Catalogo de Centros - FP Conecta";
		$datos['contenido']= 'principal';
		$this->load->view ( 'pages/centro_page' , $datos);
	}
}