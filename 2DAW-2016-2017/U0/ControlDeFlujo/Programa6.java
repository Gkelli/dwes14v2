package ControlDeFlujo;

import java.util.InputMismatchException;
import java.util.Scanner;

public class Programa6 {

	public static void main(String[] args) {
		/*Pedir al usuario dos n�meros �a� y �b� entre el 1 y el 10. 
		 * Mientras uno de ellos sea menor que el otro, escribir un s�mbolo �*�
		 *  en la pantalla e incrementar en una unidad el n�mero menor.
		 * */
		Scanner teclado = new Scanner(System.in);
		
		boolean ok=true;
		int a,b;
		do{
			try {
					System.out.println("Introduzca un n�mero del 1 al 10");
					a=teclado.nextInt();		
					System.out.println("Introduzca otro n�mero del 1 al 10");
					b=teclado.nextInt();
					
					if (b>0 && b<=10 && a>0 && a<=10)
						ok=true;
					else
						ok=false;
					
					if (ok) {
						if (a==b)
							System.out.println("Los n�meros son iguales");
						else
							if (a>b) {
								System.out.println("*");
								b++;
								System.out.println(+a+" y "+b);
							}
							else{
								System.out.println("*");
								a++;
								System.out.println(+a+" y "+b);
							}
					}
					
					if(!ok)
						System.out.println("ERROR. N�mero no v�lido");
				
			} catch (InputMismatchException e) {
				System.out.println("ERROR");
				teclado=new Scanner(System.in);
				ok=false;
			}
		
		}while(!ok);
		teclado.close();

}}
