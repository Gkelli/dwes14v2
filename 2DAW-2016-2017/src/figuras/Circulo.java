//
//public class Circulo extends Figura{
//	
//	//clase hija de Figura con un atributo radio. Además de los métodos get, set y toString correspondientes, implementa los métodos de área y perímetro.
//	
//	private double radio;
//	
//	public Circulo(){}
//	
//	public Circulo(String color, double radio){
//		super(color);
//		this.radio = radio;
//	}
//
//	public double getRadio() {
//		return radio;
//	}
//
//	public void setRadio(double radio) {
//		this.radio = radio;
//	}
//
//	@Override
//	public String toString() {
//		return super.toString() + "Además soy un circulo con un radio " + getRadio() + ". Mi área es " + area()+ " y mi perímetro es " + perimetro();
//	}
//
//	@Override
//	public double perimetro() {
//		return (2 * Math.PI * getRadio());
//	}
//
//	@Override
//	public double area() {
//		return (Math.PI * Math.pow(getRadio(), 2));
//	}
//	
//	
//
//}
