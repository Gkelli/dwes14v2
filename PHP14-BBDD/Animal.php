<?php
// Ahora crea un archivo `Animal.php` y define una clase con los cuatro atributos que tiene un animal. 
// Notas:
// * Asegúrate de implementar la función `__toString()`, para poder escribir cómodamente los datos de los objetos.
// * No implementes constructor, puesto que entonces será más complicada la asociación directa de la base de datos a objetos.
// * Implementa métodos 'get' para las distintas propiedades

class Animal{
	
	private $chip;
	private $nombre;
	private $especie;
	private $imagen;
	
	function Animal(){}
	
	function get_chip(){
		return $this->chip;
	}
	function set_chip($chip){
		$this->chip = $chip;
	}
	function get_nombre(){
		return $this->nombre;
	}
	function set_nombre($nombre){
		$this->nombre = $nombre;
	}
	function get_especie(){
		return $this->especie;
	}
	function set_especie($especie){
		$this->especie = $especie;
	}
	function get_imagen(){
		$foto=$this-> imagen;
		return  "<img src= 'img/$foto' width=100 height=100>";
	}
	function set_imagen($imagen){
		$this->imagen = $imagen;
	}
	
	function __toString(){
		return "<p><h5>Datos del animal:</h5></br>
				Chip: " . $this->chip . ", nombre: " . $this->nombre .
					", especie: " . $this-> especie . " e imagen: " . $this->get_imagen()."</p>";
	}
}
?>

