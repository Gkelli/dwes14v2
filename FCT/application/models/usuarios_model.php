<?php
class Usuarios_model extends CI_Model {
	public function __construct() {
		parent::__construct ();
		$this->load->database ();
	}
	public function listado_usuario() {
		$this->db->order_by ( 'username' );
		$consulta = $this->db->get ( 'usuario' );
		return $consulta->result ();
	}
	public function detalle_user($username) {
		$this->db->where ( 'username', $username );
		$consulta = $this->db->get ( 'usuario' );
		return $consulta->row ();
	}
	public function user_id($id_usuario) {
		$this->db->where ( 'id_usuario', $id_usuario );
		$consulta = $this->db->get ( 'usuario' );
		return $consulta->row ();
	}
	public function update_data($usuario) {
		extract ( $usuario );
		$this->db->where ( 'username', $username );
		$this->db->update ( 'usuario', array (
				'nombre_usuario' => $nombre_usuario,
				'apellidos' => $apellidos,
				'fecha_nacimiento' => $fecha_nacimiento,
				'ciudad' => $ciudad,
				'pais' => $pais,
				// 'email' => $email, // lo quito porque da problemas
				'telefono' => $telefono,
				'movil' => $movil,
				'trabajo' => $trabajo,
				'linkedIn' => $linkedIn,
				'fecha_modificacion' => date ( 'Y-m-j H:i:s' ) 
		) );
		return true;
	}
	public function update_password($usuario) {
		extract ( $usuario );
		$this->db->where ( 'username', $username );
		$this->db->update ( 'usuario', array (
				'password' => $this->hash_password ( $password ),
				'fecha_modificacion' => date ( 'Y-m-j H:i:s' ) 
		) );
		return true;
	}
	public function create_user($username, $email, $password, $nombre_usuario, $apellidos, $movil) {
		$data = array (
				'username' => $username,
				'email' => $email,
				'password' => $this->hash_password ( $password ),
				'nombre_usuario' => $nombre_usuario,
				'apellidos' => $apellidos,
				'movil' => $movil,
				'fecha_alta' => date ( 'Y-m-j H:i:s' ) 
		);
		
		return $this->db->insert ( 'usuario', $data );
	}
	public function resolve_user_login($username, $password) {
		$this->db->select ( 'password' );
		$this->db->from ( 'usuario' );
		$this->db->where ( 'username', $username );
		$hash = $this->db->get ()->row ( 'password' );
		
		return $this->verify_password_hash ( $password, $hash );
	}
	public function get_user_id_from_username($username) {
		$this->db->select ( 'id_usuario' );
		$this->db->from ( 'usuario' );
		$this->db->where ( 'username', $username );
		
		return $this->db->get ()->row ( 'id_usuario' );
	}
	public function get_user($user_id) {
		$this->db->from ( 'usuario' );
		$this->db->where ( 'id_usuario', $user_id );
		return $this->db->get ()->row ();
	}
	public function delete_user($username) {
		$this->db->where ( 'username', $username );
		return $this->db->delete ( 'usuario' );
	}
	private function hash_password($password) {
		return password_hash ( $password, PASSWORD_BCRYPT );
	}
	private function verify_password_hash($password, $hash) {
		return password_verify ( $password, $hash );
	}
}
