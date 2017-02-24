<?php

class Comentario {
	
	private $autor;
	private $comentario;
	
	function Comentario(){}
	
	function ver_autor(){
		return $this->autor;
	}
	function set_autor($autor){
		$this->autor = $autor;
	}
	function ver_comentario(){
		return $this->comentario;
	}
	function set_comentario($comentario){
		$this->comentario = $comentario;
	}
	function ver_entrada(){
		return "<p>" .date('l jS \of F Y h:i:s A') . " <strong>" . $this->autor . "</strong> escribió:</br>"
				. $this.comentario ."</p>";
	}
	
	function validar_autor($autor){
		/* Si un usuario intenta comentar por segunda vez
		* Si el nombre de usuario comienza por números o supera los 15 caracteres de longitud*/
		return ; 
			
	}
	
}

class Autor{
	
	private $nombre;
	
	function Autor(){}
	
	function ver_nombre(){
		return $this->nombre;
	}
	function set_nombre($nombre){
		$this->nombre = $nombre;
	}
	
	function registrado(){
		// funcion para comprobar si ya está registrado o no 
		
		return true;
		
	}
	
}




?>