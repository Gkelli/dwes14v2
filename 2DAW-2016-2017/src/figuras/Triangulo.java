//
//
//public class Triangulo extends Poligono {
//	
//	
//	//clase hija de Pol�gono. Sus atributos son base y altura. Adem�s de los m�todos get, set y toString correspondientes, implementa los m�todos de �rea y per�metro.
//
//	private double base;
//	private double altura;
//	
//	public Triangulo(){}
//
//	public Triangulo(String color,  double base, double altura) {
//		super(color, 3);
//		this.base = base;
//		this.altura = altura;
//	}
//
//	public double getBase() {
//		return base;
//	}
//
//	public void setBase(double base) {
//		this.base = base;
//	}
//
//	public double getAltura() {
//		return altura;
//	}
//
//	public void setAltura(double altura) {
//		this.altura = altura;
//	}
//
//	@Override
//	public String toString() {
//		return super.toString() + "Adem�s soy un poligono y un triangulo con " + getN_lados() + " lados. Mi �rea es " + area()+ " y mi per�metro es " + perimetro();
//	}
//
//	//suponiendo que los triangulos son equilatero, para evitar que se complique el ejercicio
//	
//	@Override
//	public double perimetro() {		
//		return (getBase() * 3);
//	}
//
//	@Override
//	public double area() {
//		return (getAltura() * getBase())/2;
//	}
//	
//	
//	
//	
//	
//	
//	
//}
