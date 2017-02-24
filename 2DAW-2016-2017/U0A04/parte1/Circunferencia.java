package parte1;

public class Circunferencia {
	private double radio;

	public Circunferencia(double radio) {
		this.radio = radio;
	}

	public double getRadio() {
		return radio;
	}

	public void setRadio(double radio) {
		this.radio = radio;
	}

	public double area(double radio){
		return Math.PI*Math.pow(radio, 2);
	}
	
	public double perimetro(double radio){
		return 2*radio*Math.PI;
	}
	
	
	@Override
	public String toString() {
		return "Circunferencia [radio=" + radio + "]";
	}
}
