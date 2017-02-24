package figuras;

import java.util.ArrayList;

public class GestorFiguras {

	/*
	 * Codifica una clase GestorFiguras con un �nico atributo (un ArrayList de
	 * figuras) y los siguientes m�todos, teniendo cuidado de documentar con c�digo JavaDoc:

	 */

	ArrayList<Figura> listado_figuras;
	// - **constructor**: no recibir� ning�n valor pero inicializar� el ArrayList

	public GestorFiguras() {
		this.listado_figuras = new ArrayList<Figura>();
	}

	// a�adirFigura**: recibir� un objeto de la clase Figura y lo a�adir� a la
	// lista siempre que no tenga el mismo t�tulo
	
	
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
			System.out.println("Se ha a�adido la figura " + f.getTitulo());
		}

	}
	

	
	// eliminarFigura**: eliminar� una figura a partir de su t�tulo

	public void eliminar_figura(String titulo){		
		Figura f = buscarEmpleadosNombre(titulo);
		if (titulo==null) {
			System.out.println("ERROR. Figura no existe para dar de baja");
		} else {
			listado_figuras.remove(f); 
			System.out.println("Se ha borrado la figura " + f.getTitulo());
		}

	}
	// mostrarFiguras**: escribir� por pantalla de forma ordenada los datos de todas las figuras del gestor
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