<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Centros_model');
	}

	public function index() {
		$datos['fct_centros'] = $this->Centros_model->listado_centros();
		$this->load->view ( 'index' , $datos);
	}
}
