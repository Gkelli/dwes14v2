<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Usuarios_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}
	
	function login($usuario, $password){
		$this->db ->where('username',$usuario) ->where ('password',$password)->from('usuario');
		$consulta = $this->db->get();
		
		if ($consulta->num_rows > 0 ){
			$consulta = $consulta->row();
			$this->session->set_userdata('login',$consulta->username);
			$this->session->set_userdata('email',$consulta->email);
			return TRUE;
		} else {
			$this->session->set_flashdata('mensaje','El usuario o contraseña es incorrecto');
		}
		
	}
	
	
	function check_email($email){
		$this->db->select('email')->where('email',$email);
		$consulta = $this->db->get('usuario');
		
		if($consulta->num_rows()>0){
			return TRUE;
		}
	}

	
	//listado de usuarios

	function listado_usuario(){
		$this->db->order_by('username');
		$consulta = $this->db->get('usuario');
		return $consulta->result();
	}
	//detalle usuario por username
	
	function detalle_usuario($username){
		$this->db->where('username', $username);
		$consulta = $this->db->get('usuario');
		return $consulta->row();
	}

}