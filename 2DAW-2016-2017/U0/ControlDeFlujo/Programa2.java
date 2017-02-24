package ControlDeFlujo;

import java.util.Scanner;

public class Programa2 {

	public static void main(String[] args) {
		//  Pedir al usuario cinco cadenas de texto y generar una sola cadena uniéndolas todas.
		//Escribir esa cadena por pantalla.

		Scanner teclado = new Scanner(System.in);
		System.out.println("Introduzca cinco cadenas de texto para generar una frase");
		
		try {
				String frase= "";
			for (int i = 0; i < 5; i++) {
				String cadena = teclado.next();
				//System.out.println("otra cadena: ");
				frase += cadena + " ";
			}
			System.out.println(frase.toString());			
			teclado.close();
		} catch (Exception e) {
			System.out.println("ERROR");
			teclado = new Scanner(System.in);
		}
	}
}
