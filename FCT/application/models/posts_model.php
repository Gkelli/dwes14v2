<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Posts_model extends CI_Model {
	public function __construct() {
		parent::__construct ();
	}
	
	// listado de posts
	function listado_posts() {
		$this->db->order_by ( 'titulo_post' );
		$consulta = $this->db->get ( 'post' );
		return $consulta->result ();
	}
	/*
	 * function detalle_centro($id_centro){
	 * $this->db->where('id_centro', $id_centro);
	 * $consulta = $this->db->get('centro');
	 * return $consulta->row();
	 * }
	 */
	
	// function detalle_centro($nombre_centro){
	// $this->db->where('nombre_centro', $nombre_centro);
	// $consulta = $this->db->get('centro');
	// return $consulta->row();
	// }
	
	// muestra post por url
	function detalle_post($url_post) {
		$this->db->where ( 'url_post', $url_post );
		$consulta = $this->db->get ( 'post' );
		return $consulta->row ();
	}
}