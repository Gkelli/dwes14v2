package parte3;

import java.util.Scanner;

import parte2.*;

public class Principal3 {
	/**
	 * @author Geyse
	 * @return 
	 * */

	public static void main(String[] args) {

		/* Modifica el método main de la clase Principal para crear un gestor de figuras y hacer pruebas con él:
		 * añadir alguna, eliminarla, imprimirlas...
		 * */


		Scanner teclado = new Scanner(System.in);
		GestorFiguras gestor = new GestorFiguras();
		Cuadrado cuadrado=new Cuadrado("Cuadrado",Color.WHITE,3.3);
		Triangulo triangulo=new Triangulo("Triangulo",Color.BLUE,4, 5);
		Circunferencia circunferencia1=new Circunferencia("Circunferncia 1",Color.RED,6.5);
		Circunferencia circunferencia2=new Circunferencia("Circunferncia 2",Color.BLACK,2);			

		gestor.annadir_figura(cuadrado.getTitulo()); 
		gestor.annadir_figura(triangulo.getTitulo());
		gestor.annadir_figura(circunferencia1.getTitulo());
		gestor.annadir_figura(circunferencia2.getTitulo());
		
		System.out.println("Listado de todas las figuras");
		gestor.listar_figuras();
		
		gestor.eliminar_figura(cuadrado.getTitulo());
		gestor.eliminar_figura(triangulo.getTitulo());
		gestor.eliminar_figura(circunferencia1.getTitulo());
		gestor.eliminar_figura(circunferencia2.getTitulo());

//		System.out.println("Se ha borrado la figura : " + cuadrado.getTitulo());
//		System.out.println("Se ha borrado la figura : " + triangulo.getTitulo());
//		System.out.println("Se ha borrado la figura : " + circunferencia1.getTitulo());
//		System.out.println("Se ha borrado la figura : " + circunferencia2.getTitulo());
//		System.out.println();
		
		System.out.println("Listado de todas las figuras");
		gestor.listar_figuras();

		System.out.println("\nSumatorio de las areas de las figuras");
		System.out.println(gestor.sumatorio_areas());;
	}




}

