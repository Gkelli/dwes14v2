<?php

class Usuarios extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Usuarios_model');
	}
	
	function login(){
		$this->load->model('Usuarios_model');
		$usuario = $this-> security->xss_clean(strip_tags($this-> input->post('username')));
		$password = md5($this-> security->xss_clean(strip_tags($this-> input->post('password'))));
		$this->Usuarios_model->login($usuario,$password);
		$this->load->view ( 'templates/template' );
	}
	
}