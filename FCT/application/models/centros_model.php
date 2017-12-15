<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Centros_model extends CI_Model {
	public function __construct() {
		parent::__construct ();
	}
	public function listado_centros() {
		$this->db->order_by ( 'imagen' , 'desc');
		$consulta = $this->db->get ( 'centro' );
		return $consulta->result ();
	}
	public function listado_centros_principal() {
		$this->db->order_by ( 'nombre_centro' );
		$this->db->where ( 'comentarios', 'principal' );
		$consulta = $this->db->get ( 'centro' );
		return $consulta->result ();
	}
	
	/*
	 * public function detalle_centro($id_centro){
	 * $this->db->where('id_centro', $id_centro);
	 * $consulta = $this->db->get('centro');
	 * return $consulta->row();
	 * }
	 */
	public function detalle_centro($nombre_centro) {
		$this->db->where ( 'nombre_centro', $nombre_centro );
		$consulta = $this->db->get ( 'centro' );
		return $consulta->row ();
	}
	public function busqueda_centro($busqueda) {
		$this->db->like ( 'nombre_centro', $busqueda );
		$consulta = $this->db->get ( 'centro' );
		return $consulta->row ();
	}
	
	// //muestra post por url
	// public function detalle_post($url_post){
	// $this->db->where('url_post', $url_post);
	// $consulta = $this->db->get('post');
	// return $consulta->row();
	// }
}