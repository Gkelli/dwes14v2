<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Familias_profesionales_model extends CI_Model {
	public function __construct() {
		parent::__construct ();
	}
	public function listado_familias_profesionales() {
		$this->db->order_by ( 'nombre_familia_profesional' );
		$consulta = $this->db->get ( 'familia_profesional' );
		return $consulta->result ();
	}
	public function detalle_familia_profesional($nombre_familia_profesional) {
		$this->db->where ( 'nombre_familia_profesional', $nombre_familia_profesional );
		$consulta = $this->db->get ( 'familia_profesional' );
		return $consulta->row ();
	}
}