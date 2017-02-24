package ControlDeFlujo;

import java.util.Scanner;

public class Programa1 {

	public static void main(String[] args) {
		// Preguntar al usuario el d�a de la semana e indicar si es laborable o no. 
		//Resolver utilizando la estructura `switch`.
		

		Scanner teclado = new Scanner(System.in);
		System.out.println("Introduzca un dia de la semana para saber si es laborable");
		try {
			String dia = teclado.next().toLowerCase();
			System.out.println("Has introducido: " + dia );
			teclado.close();
			
			switch (dia) {
			case "lunes": case "martes": case "miercoles": case "mi�rcoles":case "jueves": case "viernes" :
				System.out.println("Es laborable");
				break;
			case "sabado": case "s�bado": case "domingo":
				System.out.println("No es laborable");
				break;
			default:
				System.out.println("ERROR. Dia no v�lido");
				break;
			}
		} catch (Exception e) {
			System.out.println("ERROR");
			teclado = new Scanner(System.in);
		}
		
		
		
	}

}
