<?php 

class Serie{
	
	private $titulo;
	private $id_autor;
	private $nombre_autor;
	private $anno;
	private $pais;
	private $genero;
	private $finalizada;
	private $duracion;
	private $portada;
	private $descripcion;
	
	function Serie(){}
	
	function get_titulo(){
		return $this->titulo;
	}
	function set_titulo($titulo){
		$this->titulo = $titulo;
	}
	function get_id_autor(){
		return $this->id_autor;
	}
	function set_id_autor($id_autor){
		$this->id_autor = $id_autor;
	}
	function get_nombre_autor(){
		return $this->nombre_autor;
	}
	function set_nombre_autor($nombre_autor){
		$this->nombre_autor = $nombre_autor;
	}
	function get_anno(){
		return $this->anno;
	}
	function set_anno($anno){
		$this->anno = $anno;
	}
	
	function get_pais(){
		return $this->pais;
	}
	function set_pais($pais){
		$this->pais = $pais;
	}
	
	function get_genero(){
		return $this->genero;
	}
	function set_genero($genero){
		$this->genero = $genero;
	}
	
	function get_finalizada(){
		if ($this->finalizada)
		return "Sí";
		else 
			return "No";
	}
	function set_finalizada($finalizada){
		$this->finalizada = $finalizada;
	}
	
	function get_duracion(){
		return $this->duracion;
	}
	function set_duracion($duracion){
		$this->duracion = $duracion;
	}	
	
	function get_portada(){
		$foto=$this-> portada;
		return  "<img src= 'img/$foto' width=200 height=200>";
	}
	function set_portada($portada){
		$this->portada = $portada;
	}
	
	function get_descripcion(){
		return $this->descripcion;
	}
	function set_descripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	
	function __toString(){
		return "<p><h5>Datos de la Serie:</h5></br> " . $this->get_portada() .
				" Titulo: " . $this->titulo . ", Autor: " . $this->id_autor .
					", Año de estreno: " . $this-> anno . ", pais: " . $this-> pais.
					", genero: " . $this->genero . ", ¿Está finalizada? " . $this->finalizada
					. ", duración: " . $this-> duracion . " minutos, descripción de la serie: " . $this->descripcion . "</p>";
	}

}

?>