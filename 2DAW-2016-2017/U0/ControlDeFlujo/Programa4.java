package ControlDeFlujo;

import java.util.InputMismatchException;
import java.util.Scanner;

public class Programa4 {

	public static void main(String[] args) {
		// Pedir al usuario un n�mero del 1 al 10.
		// Si se equivoca o introduce un valor inv�lido (por ejemplo una letra), 
		//se le volver� a solicitar que introduzca el n�mero.

		
		Scanner teclado = new Scanner(System.in);
		boolean ok = false;
		
		System.out.println("Introduzca un n�mero del 1 al 10 ");
		int num = teclado.nextInt();
		do {
			try {				
				while (num<0 || num>10 ){
					System.out.println("Introduzca un n�mero del 1 al 10 ");
					num = teclado.nextInt();
				}
				
			} catch (InputMismatchException e){
				System.out.println("ERROR, vuelva a intentarlo");
				teclado = new Scanner(System.in);
				
			}
		} while (ok);
		System.out.println("Has introducido : " + num);
		teclado.close();
		
	}

}
