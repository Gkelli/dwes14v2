package parte1;

public class Principal1 {

	public static void main(String[] args) {
		
		Cuadrado cuadrado=new Cuadrado(4.2);
		Triangulo triangulo=new Triangulo(8, 15);
		Circunferencia circun1=new Circunferencia(4.8);
		Circunferencia circun2=new Circunferencia(1.5);
				
		double area_figura=cuadrado.area(cuadrado.getLado())+   
		triangulo.area(triangulo.getBase(), triangulo.getAltura())  
		+(circun1.area(circun1.getRadio())*0.5)
		+(circun2.area(circun2.getRadio())*0.75);
		
		double perimetro=cuadrado.perimetro(cuadrado.getLado())-(cuadrado.getLado()*2)+
				(triangulo.perimetro(triangulo.getBase(), triangulo.getAltura())-circun1.getRadio()*2)- circun2.getRadio()*2 +
				circun1.perimetro(circun1.getRadio()*0.5)+
				circun2.perimetro(circun2.getRadio()*0.75);
		
		System.out.println("Área de la figura: "+area_figura);
		System.out.println("Perimetro de la figura: "+perimetro);

	}

}
