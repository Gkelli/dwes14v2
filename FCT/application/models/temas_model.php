<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Temas_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	//listado de temas

	function listado_temas(){
		$this->db->order_by('nombre_tema');
		$consulta = $this->db->get('tema');
		return $consulta->result();
	}

	function detalle_tema($nombre_tema){
		$this->db->where('nombre_tema', $nombre_tema);
		$consulta = $this->db->get('tema');
		return $consulta->row();
	}


}