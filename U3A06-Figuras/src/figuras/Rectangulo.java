package figuras;

public class Rectangulo extends Figura {

	private double ladoX;
	private double ladoY;

	public Rectangulo(String titulo, Color color, double ladoX, double ladoY) {
		super(titulo, color);
		this.ladoX = ladoX;
		this.ladoY = ladoY;
	}

	public double getLadoX() {
		return ladoX;
	}

	public void setLadoX(double ladoX) {
		this.ladoX = ladoX;
	}

	public double getLadoY() {
		return ladoY;
	}

	public void setLadoY(double ladoY) {
		this.ladoY = ladoY;
	}

	public double area() {
		return ladoX * ladoY;
	}

	public double perimetro() {
		return ladoX * 3;
	}

	@Override
	public String toString() {
		return super.toString() + " Rectangulo [ladoX=" + ladoX + ", ladoY=" + ladoY + "]" + " Area: " + area()
				+ " Perimetro: " + perimetro();
	}
	
	public String datos_rectangulo() {
		return "Datos Rectangulo [Color=" + getColor() + ",ladoX=" + ladoX + ", ladoY=" + ladoY + "]" ;
	}

}