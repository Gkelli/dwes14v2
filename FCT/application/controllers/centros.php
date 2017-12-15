<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Centros extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'Centros_model' );
	}
	public function catalogo() {
		$datos ['fct_centros'] = $this->Centros_model->listado_centros ();
		$datos ['titulo'] = "Catalogo de Centros - FP Conecta";
		$datos ['contenido'] = 'principal';
		$this->load->view ( 'front_end/catalogo_centros', $datos );
	}
	public function info_centro($index) {
		$datos ['fct_centros'] = $this->Centros_model->listado_centros ();
		$datos ['centro'] = $this->Centros_model->detalle_centro ( str_replace ( "-", " ", $index ) );
		$datos ['titulo'] = "Catalogo de Centros - FP Conecta";
		$datos ['contenido'] = 'principal';
		$this->load->view ( 'pages/centro_page', $datos );
	}
	public function search_centro() {
		$data = new stdClass ();
		
		$this->load->helper ( 'form' );
		$this->load->library ( 'form_validation' );
		$busqueda = $this->input->post ( 'busqueda' );
		
		if ($this->Centros_model->busqueda_centro ( $busqueda )) 
{
			$datos->resultados = $this->Centros_model->busqueda_centro ( $busqueda );
			$this->load->view ( 'pages/searchs/centros_search_page', $datos );
		} else {
			$data->error = 'No se ha encontrado ningún centro con los datos introducidos. Por favor, intentelo nuevamente.';
		}
	}
}