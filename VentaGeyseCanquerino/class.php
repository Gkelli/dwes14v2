<?php
class Vehiculo{
	
	private $marca; 
	private $modelo;
	private $fecha_compra;
	private $color;
	private $kilometros;
	private $precio;
	private $descripcion;
	
	function Vehiculo(){}
	
	function ver_marca(){
		return $this->marca;
	}	
	function set_marca($marca){
		$this->marca = $marca;
	}	
	function ver_modelo(){
		return $this->modelo;
	}
	function set_modelo($modelo){
		$this->modelo = $modelo;
	}
	
	function ver_fecha_compra(){
		return $this->fecha_compra;
	}
	function set_fecha_compra($fecha_compra){
		$this->fecha_compra = $fecha_compra;
	}
	function ver_color(){
		return $this->color;
	}
	function set_color($color){
		$this->color = $color;
	}
	function ver_kilometros(){
		return $this->kilometros;
	}
	function set_kilometros($kilometros){
		$this->kilometros = $kilometros;
	}
	function ver_precio(){
		return $this->precio;
	}
	function set_precio($precio){
		$this->precio = $precio;
	}
	function ver_descripcion(){
		return $this->descripcion;
	}
	function set_descripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	
	function ver_datos_vehiculo(){
		return "<p><h5>Datos completos del Vehiculo:</h5></br> 
				Marca: " . $this->marca . ", modelo: " . $this->modelo . 
				", fecha de compra: " . $this->fecha_compra . ", color: " . $this->color .
				", kilometros: " . $this->kilometros . ", precio: " . $this->precio . 
				", descripción: " .$this->descripcion ."</p>";
	}
	
// 	function validar_datos(){
// 		if (!$this->marca && !$this->modelo && !$this->fecha_compra && !$this->color && !$this->kilometros
// 				&& !$this->precio && !$this->descripcion) {
// 			return true;
// 		}		
// 	}	
	function  validar_marca(){
		
	}
	/*
	 * *
	 * *
	 * * EN VEZ DE VALIDAR TODO EN COPYOFINDEX LOS DATOS DEL VEHICULO INTENTAR VALIDARLOS A TRAVÉS DE MÉTODOS AQUI
	 * *
	 * *
	 * *
	 * 
	 */
	
}

class Usuario{
	
	private $nombre;
	private $contrasena;
	private $confirmacion;
	private $email;
	
	function Usuario(){}
	
	function ver_nombre(){
		return $this->nombre;
	}
	function set_nombre($nombre){
		$this->nombre = $nombre;
	}
	
	function ver_contrasena(){
		return $this->contrasena;
	}
	function set_contrasena($contrasena){
		$this->contrasena = $contrasena;
	}
	function ver_confirmacion(){
		return $this->confirmacion;
	}
	function set_confirmacion($confirmacion){
		$this->confirmacion = $confirmacion;
	}
	function ver_email(){
		return $this->email;
	}
	function set_email($email){
		$this->email = $email;
	}
	
	function validar_nombre(){
		if (empty($nombre)) {
			;
		}
		return true;
	}
	
	function validar_contrasena($contrasena,&$error_contrasena){
		//function validar_clave($clave,&$error_clave){
		if(strlen($contrasena) < 6){
			$error_contrasena = "La contraseña debe tener al menos 6 caracteres";
			return false;
		}
		if(strlen($contrasena) > 16){
			$error_contrasena = "La contraseña no puede tener más de 16 caracteres";
			return false;
		}
		if (!preg_match('`[a-z]`',$contrasena)){
			$error_contrasena = "La contraseña debe tener al menos una letra minúscula";
			return false;
		}
		if (!preg_match('`[A-Z]`',$contrasena)){
			$error_contrasena = "La contraseña debe tener al menos una letra mayúscula";
			return false;
		}
		if (!preg_match('`[0-9]`',$contrasena)){
			$error_contrasena = "La contraseña debe tener al menos un caracter numérico";
			return false;
		}
		$error_contrasena = "";
		return true;
		return true;
	}
	
	function validar_correo($email){
		return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 1 : 0; //Comprobamos que el email es valido
			
	}
	
}

?>