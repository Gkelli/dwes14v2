package servlets;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class DatosProcesados
 */
@WebServlet("/DatosProcesados")
public class DatosProcesados extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public DatosProcesados() {
        super();
    }
	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("Served at: ").append(request.getContextPath());
		response.getWriter().append("Served at: ").append(request.getContextPath());
		response.setContentType("text/html; charset= UTF-8");
        response.setHeader("Alumno", "Geyse");
        PrintWriter out = response.getWriter();
        
        try {         
            out.println("<!DOCTYPE html>");
            out.println("<html><head><title>Datos Personales</title><meta charset='UTF-8'/></head>");
            out.println("<body>");
            out.println("<h4>Obras favoritas de: "+ request.getParameter("usuario") +"</h4>");            
            out.println("<p>Pelicula: "+ request.getParameter("listado_peliculas") +"</p>");            
            out.println("<p>Serie: "+ request.getParameter("listado_series") +"</p>");            
            out.println("<p>Canción: "+ request.getParameter("cancion") +"</p>");
            out.println("<p>Libro(s):</p>");
            String[]libros= request.getParameterValues("libro");
            for (int i = 0; i < libros.length; i++) {
            	out.println("-" + libros[i]+ "<br/>");
			}          
            
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
