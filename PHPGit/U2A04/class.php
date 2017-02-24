<?php
class Alumno{

	private $nombre;
	private $edad;
	private $sexo;
	private $nota;

	function Alumno(){
	}
	/*function Alumno($nombre,$edad,$sexo){
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->sexo = $sexo;
		}*/
	function ver_nombre(){
		return $this->nombre;
	}
	function set_nombre($nombre){
		$this->nombre = $nombre;
	}
	function  ver_edad(){
		return $this->edad;
	}
	function set_edad($edad){
		$this->edad = $edad;
	}
	function ver_sexo(){
		return $this->sexo;
	}
	function set_sexo($sexo){
		$this->sexo = $sexo;
	}
	function media_notas($nota1,$nota2,$nota3){
		$this->nota = ($this->nota=$nota1 + $this->nota=$nota2 + $this->nota=$nota3)/3;
		return "<p> La nota media del alumno es: " . $this->nota . "</p>";
	}
	function ver_datos_alumno(){
		return "<p>Datos completos del alumno:</br> Nombre: " . $this->nombre . ", edad: " . $this->edad . ", sexo: " .$this->sexo ."</p>";
	}
}
?>