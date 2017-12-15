<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Searchs extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		
		$this->load->helper ( 'form' );
		$this->load->model ( 'Searchs_model' );
		$this->load->model ( 'Centros_model' );
	}
	public function index() {
		$this->load->view ( 'front_end/detalle', $datos );
	}
	public function search_centro() {
		$busqueda = $this->input->post ( 'busqueda' );
		if ($this->Searchs_model->get_results ( $busqueda )) {
			$data ['resultados'] = $this->Searchs_model->get_results ( $busqueda );
			$this->load->view ( 'pages/searchs/centros_search_page', $data );
		} else {
			$this->load->view ( 'front_end/detalle', $data );
		}
	}
}