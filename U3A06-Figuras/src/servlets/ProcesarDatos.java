package servlets;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebInitParam;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.sun.org.apache.xerces.internal.impl.xpath.regex.ParseException;

import figuras.Circunferencia;
import figuras.Color;
import figuras.Cuadrado;
import figuras.Elipse;
import figuras.Rectangulo;


/**
 * Servlet implementation class ProcesarDatos
 */
@WebServlet(
		loadOnStartup=1,
		urlPatterns={"/ProcesarDatos","/procesardatos"},
		initParams={
		@WebInitParam(name="usuarioRemoto", value="Geyse"),
		@WebInitParam(name="log", value="1")
		}
	)
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
			out.println("<html><head><title>Datos Figura</title> </head> ");
			out.println("<body>");

			//ServletContext contexto = getServletContext();
			
// para visualizar los datos introducidos:			
			
//			out.println("<h4>Datos introducidos</h4>");
//			Map<String, String[]> parejas_campo = request.getParameterMap();
//			parejas_campo.forEach( (parametro, valores) -> {
//				out.println("<p>" + parametro + ": ");
//					for (String v : valores) {
//						out.println(v);
//					}
//				}				
//			);
			out.println("<br/>");
			out.println("<h4>Tipo figura</h4>");
//		* Lado X tiene valor:
//			* Lado Y no tiene valor: **cuadrado**
//			* Lado Y tiene valor: **rectángulo**
			if (request.getParameter("radioX").isEmpty() && request.getParameter("radioY").isEmpty()) {
				if (!request.getParameter("ladoX").isEmpty()) {
					if (request.getParameter("ladoY").isEmpty()) {
						out.println("CUADRADO");
						Cuadrado cuadrado = new Cuadrado(request.getParameter("Cuadrado"), Color.valueOf(request.getParameter("color")),
								Double.parseDouble(request.getParameter("ladoX")));
						
						out.println("<h4>"+cuadrado.datos_cuadrado()+"</h4>");
						out.println("<br/>");
						out.println("<svg width='600' height='600' style='border=1'>");
						out.println("<rect width=" + cuadrado.getLado() + " height=" + cuadrado.getLado()
								+ " style='fill:" + cuadrado.getColor() + "; stroke:" + cuadrado.getColor() + ";'>");
						out.println("</svg>");
						// para validar el radio -> (request.getParameter("radio")=="si"))?stroke:" + cuadrado.getColor() + ";'
						// o crear un variable tamaño y segun sea si o no el radio, este sea el tamaño del borde
					} else {
						out.println("RECTÁNGULO");
						Rectangulo rectangulo = new Rectangulo(request.getParameter("Rectanculo"), Color.valueOf(request.getParameter("color")),
								Double.parseDouble(request.getParameter("ladoX")),Double.parseDouble(request.getParameter("ladoY")));
						out.println("<h4>"+rectangulo.datos_rectangulo()+"</h4>");
						out.println("<br/>");
						out.println("<svg width='600' height='600'>");
						out.println("<rect width=" + rectangulo.getLadoX() + " height=" + rectangulo.getLadoY()
								+ " style='fill:" + rectangulo.getColor() + "; stroke:" + rectangulo.getColor() + ";'>");
						out.println("</svg>");
					
					}
				}
			}

//		* Radio X tiene valor:
//			 * Radio Y no tiene valor: **circunferencia**
//			 * Radio Y tiene valor: **elipse**
			if (request.getParameter("ladoX").isEmpty() && request.getParameter("ladoY").isEmpty()) {
				if (!request.getParameter("radioX").isEmpty()) {
					if (request.getParameter("radioY").isEmpty()) {
						out.println("CIRCUNFERENCIA");			
						Circunferencia circunferencia = new Circunferencia(request.getParameter("Circunferencia"), Color.valueOf(request.getParameter("color")),
								Double.parseDouble(request.getParameter("radioX")));
						out.println("<h4>"+circunferencia.datos_circunferencia()+"</h4>");
						out.println("<br/>");
						out.println("<svg width='600' height='600'>");
						out.println("<circle cx='100' cy='100' r=" + circunferencia.getRadio() + 
								" stroke='" + circunferencia.getColor()  + "' stroke-width='2' fill='" + circunferencia.getColor() + "''/>");
						out.println("</svg>");
						
					} else {
						out.println("ELIPSE");						
						Elipse elipse = new Elipse(request.getParameter("Circunferencia"), Color.valueOf(request.getParameter("color")),
								Double.parseDouble(request.getParameter("radioX")),Double.parseDouble(request.getParameter("radioY")));
						out.println("<h4>"+elipse.datos_elipse()+"</h4>");
						out.println("<br/>");
						out.println("<svg width='600' height='600'>");
						out.println("<ellipse cx='50%' cy='50%' rx='" + elipse.getRadioX() + "' ry='" + elipse.getRadioY() + 
								"' style='fill:"+ elipse.getColor() +";stroke:"+ elipse.getColor() +";stroke-width:2''/>");
						out.println("</svg>");		
						
					}
				}
			}
			
			out.println("</body>");
			out.println("</html>");

		} catch (ParseException e) {
			e.printStackTrace();
		} finally {
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
