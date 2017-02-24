package parte2;

public abstract class Figura {
	
	/*
	 *Queremos que todas las figuras tengan un título y un color. 
	 *Para el color puedes utilizar un tipo enumerado Color con al menos cinco valores.
	 **/

		private String titulo; 
		private Color color;
		
		public Figura(String titulo, Color color) {
			this.titulo = titulo;
			this.color = color;
		}
		
		public String getTitulo() {
			return titulo;
		}
		public void setTitulo(String titulo) {
			this.titulo = titulo;
		}
		public Color getColor() {
			return color;
		}
		public void setColor(Color color) {
			this.color = color;
		}
		@Override
		public String toString() {
			return "Figura [titulo=" + titulo + ", color=" + color + "]";
		}
		
		public abstract double area();
		public abstract double perimetro();
		
	}