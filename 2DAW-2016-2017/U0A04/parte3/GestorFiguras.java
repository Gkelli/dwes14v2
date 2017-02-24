package parte3;

import java.util.ArrayList;
import java.util.Scanner;

import parte2.Figura;

public class GestorFiguras {

	/*
	 * Codifica una clase GestorFiguras con un único atributo (un ArrayList de
	 * figuras) y los siguientes métodos, teniendo cuidado de documentar con código JavaDoc:

	 */

	ArrayList<Figura> listado_figuras;
	// - **constructor**: no recibirá ningún valor pero inicializará el ArrayList

	public GestorFiguras() {
		this.listado_figuras = new ArrayList<Figura>();
	}

	// añadirFigura**: recibirá un objeto de la clase Figura y lo añadirá a la
	// lista siempre que no tenga el mismo título
	
	
	public Figura buscarEmpleadosNombre(String titulo) {
		boolean aux=false;
		Figura f=null;
		
		for (int i = 0; i < listado_figuras.size() && !aux; i++) {
			if (titulo.equalsIgnoreCase(listado_figuras.get(i).getTitulo())) {
				System.out.println(listado_figuras.get(i).getTitulo());
				aux= true;
			}
		} 
		return f; 
	}
	

	public void annadir_figura(String titulo){
		
		Figura f = buscarEmpleadosNombre(titulo);
		if (titulo!=null) {
			System.out.println("ERROR. Figura ya existe");
			System.out.println(f.toString());
		} else {
			listado_figuras.add(f); 
			System.out.println("Se ha añadido la figura " + f.getTitulo());
		}

	}
	

	
	// eliminarFigura**: eliminará una figura a partir de su título

	public void eliminar_figura(String titulo){		
		Figura f = buscarEmpleadosNombre(titulo);
		if (titulo==null) {
			System.out.println("ERROR. Figura no existe para dar de baja");
		} else {
			listado_figuras.remove(f); 
			System.out.println("Se ha borrado la figura " + f.getTitulo());
		}

	}
	// mostrarFiguras**: escribirá por pantalla de forma ordenada los datos de todas las figuras del gestor
	public void listar_figuras(){
		for (int i = 0; i < listado_figuras.size(); i++) {
			System.out.println(listado_figuras.get(i));
		}
		
		if (listado_figuras.isEmpty()) {
			System.out.println("NO tienes figuras en la lista");
		}
	}

	public double sumatorio_areas(){
		double sumatorio=0;
		for (int i = 0; i < listado_figuras.size(); i++) {
			sumatorio+=listado_figuras.get(i).area();
		}
		return sumatorio;
	}

}