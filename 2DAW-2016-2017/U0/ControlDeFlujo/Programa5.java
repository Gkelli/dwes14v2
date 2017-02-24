package ControlDeFlujo;

import java.util.InputMismatchException;
import java.util.Scanner;

public class Programa5 {

	public static void main(String[] args) {
		/*
		 * Preguntar al usuario un n�mero de mes (del 1 al 12) y preguntar si el a�o es bisiesto (s� o no). 
		 * Escribir su n�mero de d�as. Si los datos no est�n bien introducidos se volver�n a pedir. Utilizar estructura `switch`.
		 */

		Scanner teclado = new Scanner(System.in);
		
		try {
			System.out.println("Introduzca un mes (1 a 12)");
			int mes = teclado.nextInt();
			boolean ok = false;
			do {
				
				switch (mes) {
				  case 1: case 3: case 5: case 7: case 8: case 10: case 12:
				    System.out.println("El mes tiene 31 d�as");
				    break;
				  case 4: case 6: case 9: case 11:
				    System.out.println( "El mes tiene 30 d�as");
				    break;
				  case 2:
					 System.out.println("Es a�o bisiesto? (si/no)");
					String bis = "";
					do {
						bis = teclado.next();
						if (bis.equalsIgnoreCase("si")) {
						System.out.println( "El mes tiene  29 d�as  porque es a�o bisiesto");
					} else 
						if (bis.equalsIgnoreCase("no")) {
						System.out.println( "El mes tiene 28 d�as ");
					} else
						System.out.println("ERROR, respuesta inv�lida");
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
