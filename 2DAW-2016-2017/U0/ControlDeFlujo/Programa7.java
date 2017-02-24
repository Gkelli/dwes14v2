package ControlDeFlujo;

import java.util.InputMismatchException;
import java.util.Scanner;

public class Programa7 {

	public static void main(String[] args) {
		/*Pedir al usuario un número entero y calcular el factorial de dicho número usando la estructura “do-while”. 
		 * Repetir el ejercicio usando la estructura “while”, 
		 * y repetirlo una vez más usando la estructura “for”.*/
		
		Scanner teclado = new Scanner(System.in);
		System.out.println("Introduzca un número ");
		
		try {
			int num=0, num2=0;
			double factorial=1;
			num = teclado.nextInt();
			num2=num;
			
			if (num==0) 
				System.out.println("Factorial de "+num +": "+factorial);
			else
				if(num<0)
					System.out.println("No se puede obtener el factorial de un número negativo");
				else{
					
						System.out.println("-------For---------");
						
						for (int i = 1; i <= num; i++) {
				            factorial *= i;
				        }
						System.out.println(factorial);
						factorial=1;
						System.out.println("---------While-----------");
						
						while ( num!=0) {
							  factorial=factorial*num;
							  num--;
							}
						System.out.println(factorial);
						factorial=1;
						System.out.println("------------Do-While-----------");
						
						do{
							factorial*=num2;
							num2--;
						}
						while(num2>0);
						System.out.println(factorial);
						
					
				}
			
			

			teclado.close();
		} catch (InputMismatchException e) {
			System.out.println("ERROR");
			teclado = new Scanner(System.in);
		}

	}

}
