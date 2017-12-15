<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Modulos_model extends CI_Model {
	public function __construct() {
		parent::__construct ();
	}
	
	// listado de modulos
	public function listado_modulos() {
		$this->db->order_by ( 'nombre_modulo' );
		$consulta = $this->db->get ( 'modulo' );
		return $consulta->result ();
	}
	/*
	 * function detalle_centro($id_centro){
	 * $this->db->where('id_centro', $id_centro);
	 * $consulta = $this->db->get('centro');
	 * return $consulta->row();
	 * }
	 */
	public function detalle_modulo($nombre_modulo) {
		$this->db->where ( 'nombre_modulo', $nombre_modulo );
		$consulta = $this->db->get ( 'modulo' );
		return $consulta->row ();
	}
}