package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.Map;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class ProcesarDatos
 */
@WebServlet("/ProcesarDatos")
public class ProcesarDatos extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ProcesarDatos() {
        super();
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("Served at: ").append(request.getContextPath());
		response.setContentType("text/html; charset= UTF-8");
        response.setHeader("Alumno", "Geyse");
        PrintWriter out = response.getWriter();
        
        try {         
            out.println("<!DOCTYPE html>");
            out.println("<html><head><title>Datos Personales</title><meta charset='UTF-8'/></head>");
            out.println("<body>");
            out.println("<h4>Datos introducidos</h4>");            
            
//    		* Campo de texto para registrar el nombre del usuario
            out.println("<form action='/FavoritosGeyseCanquerino/DatosProcesados' method='post' >");
            out.println("Introduzca nombre de usuario <input type='text' name='usuario'><br>");            
//    		* Lista de selección desplegable para seleccionar una película (los valores de películas serán los obtenidos en el formulario anterior)
            
            out.println("Lista de selección de peliculas: <select name='listado_peliculas'>");
            //peliculas
            String peliculas = request.getParameter("peliculas");
            String lista_peliculas [] = peliculas.split("-");
            for (String peli : lista_peliculas) {
            	out.println("<option>" + peli + "</option>");
			}
            out.println("</select><br/>");
            
//    		* Lista de selección para escoger una serie, pero en este caso todas las opciones estarán visibles (desplegadas)

            out.println("Lista de selección de series: <select name='listado_series' size=5>");
            //series
            String series = request.getParameter("series");
            String lista_series [] = series.split("-");
            for (String serie : lista_series) {
            	out.println("<option>" + serie + "</option>");
			}
            out.println("</select><br/>");
            
//    		* Botones de radio para escoger una canción
            
            out.println("Selecciona una canción: ");
            //series
            //caciones
            String canciones = request.getParameter("canciones");
            String lista_canciones [] = canciones.split("-");
            for (String cancion : lista_canciones) {
            	out.println(cancion + "<input type='radio' name='cancion' value='"+cancion+"'>");
			}
            out.println("<br/>");
            
//    		* Casillas de selección para marcar uno o varios libros           
            out.println("Selecciona uno o varios libros: ");
            
            String libros = request.getParameter("libros");
            String lista_libros [] = libros.split("-");
            for (String libro : lista_libros) {
            	out.println(libro + "<input type='checkbox' name='libro' value='"+libro+"'>");
			}
            
            out.println("<br/><input type='submit' value='submit'>");
            out.println("</form>");            
            out.println("</body></html>");  
        }
        finally {            
            out.close();
        }
        

		
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
