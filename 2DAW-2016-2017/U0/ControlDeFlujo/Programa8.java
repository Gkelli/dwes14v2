package ControlDeFlujo;

import java.util.Scanner;

public class Programa8 {

	public static void main(String[] args) {
		/*Bas�ndote en la estructura `do-while`, dise�a un men� de dos niveles, 
		 * es decir: en un primer momento se pedir� escoger entre varias opciones,
		 *  y en cada una de ellas se pedir� de nuevo escoger entre un nuevo conjunto. 
		 *  La tem�tica es libre (c�lculo de �reas, enciclopedia, etc). 
		 *  Es importante que tu programa reaccione correctamente ante entradas err�neas del usuario,
		 *   y que en todos los men�s haya una opci�n para volver.

  Ten en cuenta que codificar un men� correctamente no es trivial, 
  conviene que pienses lo que vas a hacer antes de empezar a codificar.
		 * */

		System.out.println("---------ELIGE UNA FIGURA------------");
		System.out.println("1- CUADRADO");
		System.out.println("2- CIRCULO");
		System.out.println("3- TRIANGULO");
		System.out.println("4- RECTANGULO");
		System.out.println("5- FIN");
		System.out.println("--------------------------------------");
		
		Scanner teclado = new Scanner(System.in);
		System.out.println("\nINTRODUZCA UNA OPCI�N DEL 1 AL 5");		
		int num = teclado.nextInt();
		
		do {
			switch (num) {
			case 1:
				System.out.println("Has elegido el cuadrado, ahora elige una opci�n: 1- �rea 2- Perimetro (3 para salir)");
				int opcion = teclado.nextInt();
				do {
					
				} while (opcion!=1 || opcion!=2);
				break;
			case 2:
				System.out.println("Has elegido el circulo, ahora elige una opci�n: 1- Radio 2- Diametro 3- Circunferencia (4 para salir)");
				opcion = teclado.nextInt();
				do {
					
				} while (opcion!=1 || opcion!=2);
				break;
			case 3:
				System.out.println("Has elegido el tri�ngulo, ahora elige una opci�n: 1- Base 2- Altura (3 para salir)");
				opcion = teclado.nextInt();
				do {
					
				} while (opcion!=1 || opcion!=2);
				break;
			case 4:
				System.out.println("Has elegido el Rect�ngulo, ahora elige una opci�n: 1- �rea 2- Perimetro (3 para salir)");
				opcion = teclado.nextInt();
				do {
					
				} while (opcion!=1 || opcion!=2);
				break;
			default:
				System.out.println("ERROR, opci�n no v�lida");
				break;
			}
		} while (num<1 || num >5);
		
		
	}

}
