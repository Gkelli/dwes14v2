//
//
//public class PrincipalFiguras {
//
//	public static void main(String[] args) {
//		
////		Instanciar y probar objetos de cada clase . 
//		
//		Circulo circulo1 = new Circulo("blanco", 3);
//		Circulo circulo2 = new Circulo("negro", 1);
//		Triangulo triangulo1 = new Triangulo("azul", 4, 3);
//		Triangulo triangulo2 = new Triangulo("verde", 9, 8);
//		Rectangulo rectangulo1 = new Rectangulo("amarillo", 4, 2);
//		Rectangulo rectangulo2 = new Rectangulo("gris", 3, 6);
//		Rectangulo rectangulo3 = new Rectangulo(null, 1, 2);
//		Hexagono hexagono1 = new Hexagono("blanco", 3, 2.5);
//		Hexagono hexagono2 = new Hexagono("verde", 2, 1);
//		Hexagono hexagono3 = new Hexagono("rosa", 4, 3);
//		
////		Crear un array de figuras del tamaño que desees y guarda en él las figuras creadas. (se ha creado en total 10 figuras distintas por lo que el array tendra dicho tamaño)
//		
//		Figura[] lista_figura = new Figura[10];
//		lista_figura[0] = circulo1;lista_figura[1] = circulo2;	lista_figura[2] = triangulo1;	lista_figura[3] = triangulo2; lista_figura[4] = rectangulo1;
//		lista_figura[5] = rectangulo2;lista_figura[6] = rectangulo3;	lista_figura[7] = hexagono1;	lista_figura[8] = hexagono2; lista_figura[9] = hexagono3;
//		
////		Recorrer el array mostrando los datos de cada figura.
//		
//		for (int i = 0; i < lista_figura.length; i++) {
//			System.out.println(lista_figura[i].toString() );
//		}
//		
////		Contar cuántos polígonos y cuántos rectángulos se han creado.
//		int contador_poligonos = 0, contador_rectangulos = 0;
//		 for (int i = 0; i < lista_figura.length; i++) {
//			if (lista_figura[i] instanceof Poligono) {
//				contador_poligonos++;
//			} 
//			if(lista_figura[i] instanceof Rectangulo){
//				contador_rectangulos++;
//			}					
//			
//		}
//		 
//		 System.out.println("\nEn la lista de Figuras hay: " + contador_poligonos + " poligonos");
//		 System.out.println("En la lista de Figuras hay: " + contador_rectangulos + " rectangulos");
//
//	}
//
//}
