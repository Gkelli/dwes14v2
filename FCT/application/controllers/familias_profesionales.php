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
	
	function info_familia_profesional($index) {
		$datos['fct_familias_profesionales'] = $this->Familias_profesionales_model->listado_familias_profesionales();
		$datos['aaa']= $this->Familias_profesionales_model->detalle_familia_profesional(str_replace("-", " ",$index));
		$datos['titulo'] = "Catalogo de Familias Profesionales - FP Conecta";
		$datos['contenido']= 'principal';
		$this->load->view ( 'pages/familia_profesional_page' , $datos);
	}

}