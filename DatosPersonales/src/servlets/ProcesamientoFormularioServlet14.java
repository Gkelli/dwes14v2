package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.text.SimpleDateFormat;
import java.util.Date;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebInitParam;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.sun.org.apache.xerces.internal.impl.xpath.regex.ParseException;

/**
 * Servlet implementation class ProcesamientoFormularioServlet14
 */
@WebServlet(
	loadOnStartup=1,
	urlPatterns={"/ProcesarDatos","/procesardatos"},
	initParams={
	@WebInitParam(name="usuarioRemoto", value="Geyse"),
	@WebInitParam(name="log", value="1")
	}
)

public class ProcesamientoFormularioServlet14 extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ProcesamientoFormularioServlet14() {
        super();
        // TODO Auto-generated constructor stub
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
		out.println("<html><head><title>Datos Personales</title> </head> ");
		out.println("<body>");
		
		out.println("<h5> La fecha con el formato que usamos habitualmente (primero el día, luego el mes y por último el año) </h5>");
		SimpleDateFormat formato_fecha = new SimpleDateFormat("yyyy/MM/dd");
		try {
			Date fecha = formato_fecha.parse(request.getParameter("fecha"));
			SimpleDateFormat formato_fecha_salida = new SimpleDateFormat("dd-MM-yyyy");
			out.print("Fecha: " + formato_fecha_salida.format(fecha));
		} catch (ParseException e) {
			e.printStackTrace();
		} catch (java.text.ParseException e) {
			e.printStackTrace();
		}
		
		
		
//		out.println("<h5> Las parejas campo - valores de todos los campos </h5>");
//		Map<String, String[]> parejas_campo = request.getParameterMap();
//		parejas_campo.forEach( (parametro, valores) -> {
//			out.println("<p>" + parametro + ": ");
//				for (String v : valores) {
//					out.println("- " + v);
//				}
//			}				
//		);
		
		
//		out.println("<h5> Los nombres de todos los campos </h5>");
//		out.println("<ul> ");
//		Enumeration<String> parametros = request.getParameterNames();
//		while (parametros.hasMoreElements()) {
//			out.println("<li>" + parametros.nextElement() + " </li>");
//		}		
//		out.println("</ul> ");
		
		
		
//		out.println("<h5> Parametros del servlet desde un formulario HTML </h5>");
//	    out.println("<br> Nombre: " + request.getParameter("nombre") );
//	    out.println("<br> Fecha de nacimiento: "+request.getParameter("fecha") );
//	    out.println("<br> Sexo: " + request.getParameter("sexo") );
//	    String mascotas [] = request.getParameterValues("mascota");	
//	    out.println("<br> Mascotas: ");
//	    for (int i = 0; i < mascotas.length; i++) {
//			out.println(mascotas[i] + ". ");
//		}	    
//	    out.println("<br> Nacionalidad: " + request.getParameter("nacionalidad") );
//	    out.println("<br> Comentario: " + request.getParameter("comentario") );
		
		
	    out.println("</body>");
	    out.println("</html>");

        }
        finally {            
            out.close();
        }
		
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}

}
