//
//public class Circulo extends Figura{
//	
//	//clase hija de Figura con un atributo radio. Adem�s de los m�todos get, set y toString correspondientes, implementa los m�todos de �rea y per�metro.
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
//		return super.toString() + "Adem�s soy un circulo con un radio " + getRadio() + ". Mi �rea es " + area()+ " y mi per�metro es " + perimetro();
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
