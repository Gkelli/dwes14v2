<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Posts_model extends CI_Model {
	public function __construct() {
		parent::__construct ();
	}
	
	// listado de posts
	public function listado_posts() {
		$this->db->order_by ( 'fecha_post', 'desc' );
		$consulta = $this->db->get ( 'post' );
		return $consulta->result ();
	}
	
	// muestra post por url
	public function detalle_post($url_post) {
		$this->db->where ( 'url_post', $url_post );
		$consulta = $this->db->get ( 'post' );
		return $consulta->row ();
	}
	public function nuevo_comentario($titulo_post, $keywords, $cuerpo_post, $id_usuario) {
		$data = array (
				'titulo_post' => $titulo_post,
				'fecha_post' => date ( 'Y-m-j H:i:s' ),
				'keywords' => $keywords,
				'cuerpo_post' => $cuerpo_post,
				'id_usuario' => $id_usuario,
				'url_post' => url_title ( convert_accented_characters ( $titulo_post ), "-", TRUE ) 
		);
		
		return $this->db->insert ( 'post', $data );
	}
}