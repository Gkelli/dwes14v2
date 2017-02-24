package parte1;

public class Triangulo {

	private double base;
	private double altura;
	
	public Triangulo(double base, double altura) {
		this.base = base;
		this.altura = altura;
	}

	public double getBase() {
		return base;
	}

	public void setBase(double base) {
		this.base = base;
	}

	public double getAltura() {
		return altura;
	}

	public void setAltura(double altura) {
		this.altura = altura;
	}

	public double area(double base,double altura){
		return (base*altura)/2;
	}
	
	public double perimetro(double base,double altura){
		return base+altura+Math.sqrt(Math.pow(base, 2)+ Math.pow(altura, 2));
	}
	
	
	@Override
	public String toString() {
		return "Triangulo [base=" + base + ", altura=" + altura + "]";
	}
	
}
