<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Usuarios_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	//listado de usuarios

	function listado_usuario(){
		$this->db->order_by('username');
		$consulta = $this->db->get('usuario');
		return $consulta->result();
	}
	/*
	 function detalle_centro($id_centro){
		$this->db->where('id_centro', $id_centro);
		$consulta = $this->db->get('centro');
		return $consulta->row();
		}
		*/

	//detalle usuario por username
	
	function detalle_centro($username){
		$this->db->where('username', $username);
		$consulta = $this->db->get('usuario');
		return $consulta->row();
	}

}