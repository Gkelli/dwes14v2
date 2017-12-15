<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Usuarios extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->library ( array ('session' ) );
		$this->load->helper ( array ('url' ) );
		$this->load->model ( 'Usuarios_model' );
	}
	public function catalogo() {
		$datos ['fct_usuarios'] = $this->Usuarios_model->listado_usuario ();
		$datos ['titulo'] = "Usuarios - FP Conecta";
		$datos ['contenido'] = 'principal';
		$this->load->view ( 'front_end/catalogo_usuarios', $datos );
	}
	public function info_user() {
		if (isset ( $_SESSION ['username'] )) {
			$data ['usuario_data'] = $this->Usuarios_model->detalle_user ( $_SESSION ['username'] );
			$data ['titulo'] = "Perfil del Usuario - FP Conecta";
			$data ['contenido'] = 'principal';
			$this->load->view ( 'templates/template', $data );
		} else {
			// si no está iniada la sessión
			$this->load->view ( 'user/header' );
			$this->load->view ( 'user/login/login', $data );
			$this->load->view ( 'user/footer' );
		}
	}
	public function update_user() {
		$data = new stdClass ();
		
		$this->load->helper ( 'form' );
		$this->load->library ( 'form_validation' );
		
		$username = $_SESSION ['username'];
		$nombre_usuario = $this->input->post ( 'nombre_usuario' );
		$apellidos = $this->input->post ( 'apellidos' );
		$fecha_nacimiento = $this->input->post ( 'fecha_nacimiento' );
		$ciudad = $this->input->post ( 'ciudad' );
		$pais = $this->input->post ( 'pais' );
		// 'email' => $email, no dejo que actualice ya que da problemas
		$telefono = $this->input->post ( 'telefono' );
		$movil = $this->input->post ( 'movil' );
		$trabajo = $this->input->post ( 'trabajo' );
		$linkedIn = $this->input->post ( 'linkedIn' );
		
		$usuario = array (
				'username' => $username,
				'nombre_usuario' => $nombre_usuario,
				'apellidos' => $apellidos,
				'fecha_nacimiento' => $fecha_nacimiento,
				'ciudad' => $ciudad,
				'pais' => $pais,
				// 'email' => $email,
				'telefono' => $telefono,
				'movil' => $movil,
				'trabajo' => $trabajo,
				'linkedIn' => $linkedIn 
		);
		
		if ($this->Usuarios_model->update_data ( $usuario )) {
			$this->info_user ();
		} else {
			
			$data->error = 'Ha ocurrido un problema durante la edición de sus datos. Por favor, intentelo nuevamente.';
			
			$this->info_user ( $data );
		}
	}
	public function update_password() {
		$data = new stdClass ();
		
		$this->load->helper ( 'form' );
		$this->load->library ( 'form_validation' );
		
		$this->form_validation->set_rules ( 'password', 'Contraseña', 'required|trim|min_length[6]' );
		$this->form_validation->set_rules ( 'confirm_password', 'Confirmar Contraseña', 'required|matches[password]' );
		
		if ($this->form_validation->run () === false) {
			
			$this->info_user ( $data );
		} else {
			$username = $_SESSION ['username'];
			$password = $this->input->post ( 'password' );
			
			$usuario = array (
					'username' => $username,
					'password' => $password 
			);
			
			if ($this->Usuarios_model->update_password ( $usuario )) {
				$this->info_user ();
			} else {
				$data->error = 'Ha ocurrido un problema durante la edición de la contraseña. Por favor, intentelo nuevamente.';
				$this->info_user ( $data );
			}
		}
	}
	public function register() {
		$data = new stdClass ();
		
		$this->load->helper ( 'form' );
		$this->load->library ( 'form_validation' );
		
		$this->form_validation->set_rules ( 'username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[usuario.username]', array (
				'is_unique' => 'Ya existe un usuario con ese Username. Por favor, debe elegir otro.' 
		) );
		$this->form_validation->set_rules ( 'email', 'Email', 'trim|required|valid_email|is_unique[usuario.email]' );
		$this->form_validation->set_rules ( 'password', 'Password', 'trim|required|min_length[6]' );
		
		if ($this->form_validation->run () === false) {
			
			$this->load->view ( 'user/header' );
			$this->load->view ( 'user/register/register', $data );
			$this->load->view ( 'user/footer' );
		} else {
			
			$username = $this->input->post ( 'username' );
			$email = $this->input->post ( 'email' );
			$password = $this->input->post ( 'password' );
			$nombre_usuario = $this->input->post ( 'nombre_usuario' );
			$apellidos = $this->input->post ( 'apellidos' );
			$movil = $this->input->post ( 'movil' );
			
			if ($this->Usuarios_model->create_user ( $username, $email, $password, $nombre_usuario, $apellidos, $movil )) {
				
				$this->load->view ( 'user/header' );
				$this->load->view ( 'user/register/register_success', $data );
				$this->load->view ( 'user/footer' );
			} else {
				
				$data->error = 'Ha ocurrido un problema durante el registro. Por favor, intentelo nuevamente.';
				$this->load->view ( 'user/header' );
				$this->load->view ( 'user/register/register', $data );
				$this->load->view ( 'user/footer' );
			}
		}
	}
	public function delete() {
		$username = $_SESSION ['username'];
		if (isset ( $username )) {
			if ($this->Usuarios_model->delete_user ( $username )) {
				$success_msg = "Deleted";
				$this->session->set_flashdata ( 'success_msg', $success_msg );
				if (isset ( $_SESSION ['logged_in'] ) && $_SESSION ['logged_in'] === true) {
					
					// remove session datas
					foreach ( $_SESSION as $key => $value ) {
						unset ( $_SESSION [$key] );
					}
				}
				redirect ( '/' );
			}
		} else {
			$this->info_user ();
		}
	}
	public function login() {
		$data = new stdClass ();
		
		$this->load->helper ( 'form' );
		$this->load->library ( 'form_validation' );
		
		$this->form_validation->set_rules ( 'username', 'Username', 'required|alpha_numeric' );
		$this->form_validation->set_rules ( 'password', 'Password', 'required' );
		
		if ($this->form_validation->run () == false) {
			
			$this->load->view ( 'user/header' );
			$this->load->view ( 'user/login/login' );
			$this->load->view ( 'user/footer' );
		} else {
			
			$username = $this->input->post ( 'username' );
			$password = $this->input->post ( 'password' );
			
			if ($this->Usuarios_model->resolve_user_login ( $username, $password )) {
				
				$user_id = $this->Usuarios_model->get_user_id_from_username ( $username );
				$user = $this->Usuarios_model->get_user ( $user_id );
				
				$_SESSION ['user_id'] = ( int ) $user->id_usuario;
				$_SESSION ['username'] = ( string ) $user->username;
				$_SESSION ['logged_in'] = ( bool ) true;
				$_SESSION ['is_confirmed'] = ( bool ) $user->is_confirmed;
				$_SESSION ['is_admin'] = ( bool ) $user->is_admin;
				
				$this->info_user ();
			} else {
				
				$data->error = 'Usuario o contraseña incorrectos.';
				
				$this->load->view ( 'user/header' );
				$this->load->view ( 'user/login/login', $data );
				$this->load->view ( 'user/footer' );
			}
		}
	}
	public function logout() {
		$data = new stdClass ();
		
		if (isset ( $_SESSION ['logged_in'] ) && $_SESSION ['logged_in'] === true) {
			
			// removemos los datos de session
			foreach ( $_SESSION as $key => $value ) {
				unset ( $_SESSION [$key] );
			}
			
			$this->load->view ( 'user/header' );
			$this->load->view ( 'user/logout/logout_success', $data );
			$this->load->view ( 'user/footer' );
			
			header ( "refresh:3;url=/" );
		} else {
			
			redirect ( '/' );
		}
	}
	public function chat_user() {
		$this->load->view ( 'profile/chat' );
	}
}
	