package classes;

public class Serie {
	
	private String titulo;
	private String autor;
	private String anno;
	private String pais;
	private String genero;
	private String finalizada;
	private String duracion;
	private String portada;
	private String descripcion;
	
	public Serie() {}
	
	public Serie(String titulo, String autor, String anno, String pais, String genero, String finalizada, String duracion,
			String portada, String descripcion) {
		super();
		this.titulo = titulo;
		this.autor = autor;
		this.anno = anno;
		this.pais = pais;
		this.genero = genero;
		this.finalizada = finalizada;
		this.duracion = duracion;
		this.portada = portada;
		this.descripcion = descripcion;
	}

	public String getTitulo() {
		return titulo;
	}

	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}

	public String getAutor() {
		return autor;
	}

	public void setAutor(String autor) {
		this.autor = autor;
	}

	public String getAnno() {
		return anno;
	}

	public void setAnno(String anno) {
		this.anno = anno;
	}

	public String getPais() {
		return pais;
	}

	public void setPais(String pais) {
		this.pais = pais;
	}

	public String getGenero() {
		return genero;
	}

	public void setGenero(String genero) {
		this.genero = genero;
	}

	public String getFinalizada() {
		if (finalizada.equalsIgnoreCase("1"))
			return "Sí";
		else 
			return "No";
	}

	public void setFinalizada(String finalizada) {
		this.finalizada = finalizada;
	}

	public String getDuracion() {
		return duracion;
	}

	public void setDuracion(String duracion) {
		this.duracion = duracion;
	}

	public String getPortada() {
		String foto= portada;
		return  "<img src= './img/" +foto+ "' width=200 height=200>";
	}

	public void setPortada(String portada) {
		this.portada = portada;
	}

	public String getDescripcion() {
		return descripcion;
	}

	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}

	@Override
	public String toString() {
		return "<p><h5>Datos de la Serie:</h5></br> " + getPortada() +
				" Titulo: " + getTitulo() +", Autor: " + getAutor() +
					", Año de estreno: " + getAnno() + ", pais: " + getPais()+
					", genero: " + getGenero() +  ", ¿Está finalizada? " + getFinalizada()
					+", duración: " + getDuracion() + " minutos, descripción de la serie: " + getDescripcion() + "</p>";
	}
	
}
