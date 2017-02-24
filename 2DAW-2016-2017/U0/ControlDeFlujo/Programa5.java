package ControlDeFlujo;

import java.util.InputMismatchException;
import java.util.Scanner;

public class Programa5 {

	public static void main(String[] args) {
		/*
		 * Preguntar al usuario un número de mes (del 1 al 12) y preguntar si el año es bisiesto (sí o no). 
		 * Escribir su número de días. Si los datos no están bien introducidos se volverán a pedir. Utilizar estructura `switch`.
		 */

		Scanner teclado = new Scanner(System.in);
		
		try {
			System.out.println("Introduzca un mes (1 a 12)");
			int mes = teclado.nextInt();
			boolean ok = false;
			do {
				
				switch (mes) {
				  case 1: case 3: case 5: case 7: case 8: case 10: case 12:
				    System.out.println("El mes tiene 31 días");
				    break;
				  case 4: case 6: case 9: case 11:
				    System.out.println( "El mes tiene 30 días");
				    break;
				  case 2:
					 System.out.println("Es año bisiesto? (si/no)");
					String bis = "";
					do {
						bis = teclado.next();
						if (bis.equalsIgnoreCase("si")) {
						System.out.println( "El mes tiene  29 días  porque es año bisiesto");
					} else 
						if (bis.equalsIgnoreCase("no")) {
						System.out.println( "El mes tiene 28 días ");
					} else
						System.out.println("ERROR, respuesta inválida");
					} while (!bis.equalsIgnoreCase("si") || !bis.equalsIgnoreCase("no"));					
				    
				    break;			
				 
				}
					
			} while ((mes<0 || mes>12) );
			
			teclado.close();
		} catch (InputMismatchException e) {
			System.out.println("ERROR");
			teclado = new Scanner(System.in);
		}
		
	
		
	}

}
