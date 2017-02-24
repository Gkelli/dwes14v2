package parte2;

public class Principal2 {

public static void main(String [] args){
		
		Cuadrado cuadrado=new Cuadrado("Cuadrado",Color.WHITE,3.3);
		Triangulo triangulo=new Triangulo("Triangulo",Color.BLUE,4, 5);
		Circunferencia circunferencia1=new Circunferencia("Circunferncia 1",Color.RED,6.5);
		Circunferencia circunferencia2=new Circunferencia("Circunferncia 2",Color.BLACK,2);				
		
		System.out.println(cuadrado.toString());
		System.out.println(triangulo.toString());
		System.out.println(circunferencia1.toString());
		System.out.println(circunferencia2.toString());		
		
		
	}

}
