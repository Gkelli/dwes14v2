import java.util.HashMap;

public class Pruebas {

	public static void main(String[] args) {
		
		HashMap<String, Integer> lista = new HashMap<>();
		lista.put("Maria", 600600600);
		lista.put("Jose", 900900900);
		lista.put("Ana", 636636636);
		lista.put("Pepe", 900900900);
		
		// listar con java 8
		lista.forEach((clave,valor) -> System.out.println("Nombre: " + clave + ", telefono: " + valor));
		
		System.out.println("¿Contiene el nombre Maria?" + lista.containsKey("Maria"));
		System.out.println("¿Contiene el numero Maria?" + lista.containsValue(900900900));
		
		//dado un valor encontrar su clave
		
		System.out.println("Telefono de Maria " + lista.get("Maria"));
		
		// obtener la clave correspondiente dado un valor con el Java 8
		
		lista.forEach((clave,valor) -> {
			if(valor==900900900){
				System.out.println("El número " + valor + " es de: " + clave);
			}
		});
		
	}

}
