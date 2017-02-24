package parte1;

public class Cuadrado {
	private double lado;

	public Cuadrado(double lado) {
		this.lado = lado;
	}

	public double getLado() {
		return lado;
	}

	public void setLado(double lado) {
		this.lado = lado;
	}

	public double area(double lado){
		return lado*lado;
	}
	
	public double perimetro(double lado){
		return lado*4;
	}
	
	@Override
	public String toString() {
		return "Cuadrado [lado=" + lado + "]";
	}
	
	
}
