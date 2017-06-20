<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Posts_model extends CI_Model {
	public function __construct() {
		parent::__construct ();
	}
	
	// listado de posts
	function listado_posts() {
		$this->db->order_by ( 'fecha_post' , 'desc');
		$consulta = $this->db->get ( 'post' );
		return $consulta->result ();
	}

	// muestra post por url
	function detalle_post($url_post) {
		$this->db->where ( 'url_post', $url_post );
		$consulta = $this->db->get ( 'post' );
		return $consulta->row ();
	}
	
	function nuevo_comentario($titulo_post,$keywords,$mensaje,$fecha_post)	{
		$data = array(
				'titulo_post' => $titulo_post,
				'keywords' => $keywords,
				'cuerpo_post' => $mensaje,
				'fecha_post' => $fecha
		);
		$this->db->insert('post',$data);
	}
}