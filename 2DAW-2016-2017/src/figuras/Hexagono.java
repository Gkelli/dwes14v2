//
//public class Hexagono extends Poligono{
//	
//	// clase hija de Pol�gono. Sus atributos son lado y apotema. Adem�s de los m�todos get, set y toString correspondientes,
//	// implementa los m�todos de �rea y per�metro. ( �rea=(per�metro*apotema)/2 )
//	
//	private double lado;
//	private double apotema;
//	
//	public Hexagono(){}
//	
//	public Hexagono(String color, double lado, double apotema){
//		super(color, 5);
//		this.lado = lado;
//		this.apotema = apotema;
//	}
//
//	public double getLado() {
//		return lado;
//	}
//
//	public void setLado(double lado) {
//		this.lado = lado;
//	}
//
//	public double getApotema() {
//		return apotema;
//	}
//
//	public void setApotema(double apotema) {
//		this.apotema = apotema;
//	}
//
//	@Override
//	public String toString() {
//		return super.toString() + "Adem�s soy un poligono y un hexagono con " + getN_lados() + " lados.  Mi �rea es " + area()+ " y mi per�metro es " + perimetro();
//	}
//
//	@Override
//	public double perimetro() {
//		return (getN_lados() * getLado());
//	}
//
//	@Override
//	public double area() {
//		return (perimetro() * getApotema()) / 2;
//	}
//	
//	
//}
