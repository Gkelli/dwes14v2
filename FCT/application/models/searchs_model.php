<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Searchs_model extends CI_Model {
	public function __construct() {
		parent::__construct ();
	}
	public function busqueda_centro($busqueda) {
		$this->db->like ( 'nombre_centro', $busqueda );
		$consulta = $this->db->get ( 'centro' );
		return $consulta->row ();
	}
	public function get_results($busqueda) {
		$this->db->like ( 'nombre_centro', $busqueda );
		$consulta = $this->db->get ( 'centro' );
		return $consulta->result ();
	}
}