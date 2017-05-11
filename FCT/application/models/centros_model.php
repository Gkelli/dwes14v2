<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Centros_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	//listado de centros
	
	function listado_centros(){
		$this->db->order_by('nombre_centro');
		$consulta = $this->db->get('centro');
		return $consulta->result();
	}
	
}