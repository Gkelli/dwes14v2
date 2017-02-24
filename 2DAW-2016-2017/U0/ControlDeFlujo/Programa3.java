package ControlDeFlujo;

import java.util.InputMismatchException;
import java.util.Scanner;

public class Programa3 {

	public static void main(String[] args) {
		//Ir pidiendo por teclado una serie de n�meros enteros e irlos sumando. 
		//Se deja de pedir n�meros al usuario cuando la cantidad supera el valor 50. 
		// Escribir por pantalla la suma de todos los n�meros introducidos.
		
		Scanner teclado = new Scanner(System.in);
		System.out.println("Introduzca un serie de n�meros ");
		int suma=0, num = 0;
		try {			
			do{
				num = teclado.nextInt();
				suma+= num ;
			} while (suma < 50);
			System.out.println("La suma total es " + suma);
			teclado.close();
		} catch (InputMismatchException e) {
			System.out.println("ERROR");
			teclado = new Scanner(System.in);
		}

	}
	
}
