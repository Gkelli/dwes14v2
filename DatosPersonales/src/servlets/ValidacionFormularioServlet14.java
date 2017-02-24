package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.Enumeration;
import java.util.Map;

import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebInitParam;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class ValidacionFormularioServlet14
 */
@WebServlet(
		loadOnStartup=1,
		urlPatterns={"/ValidarDatos","/validardatos"},
		initParams={
		@WebInitParam(name="usuarioRemoto", value="Geyse"),
		@WebInitParam(name="log", value="1")
		}
	)
public class ValidacionFormularioServlet14 extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ValidacionFormularioServlet14() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("Served at: ").append(request.getContextPath());		
		
		response.setContentType("text/html;charset=UTF-8");
        response.setHeader("Alumno", "Geyse");
        PrintWriter out = response.getWriter();
        try {         
        	
        	
        	
            out.println("<!DOCTYPE html>");
            out.println("<html><head><title>Datos Personales</title><meta charset='UTF-8'/>"
            		+ "<style>table,td {border:solid 1px black; }</style></head>");
            out.println("<body>");
            out.println("<table style='border-collapse: collapse;margin:10px; align='center' ';>");
            out.println("<tr><td><h4>Mostrar Datos Personales</h4></td></tr>");
            
          //  out.println("<tr><td>" + request.getParameter("nombre") +"</td></tr>");
            
            
            // todos los datos introducidos
            Map<String, String[]> datos = request.getParameterMap();
            datos.forEach( (parametro,valores)->
            {
            	out.println("<tr><td>" + parametro+":");
            	for (String v : valores) {
					out.println(v);
				}
            	out.println("</td></tr>");
            }
            );
            out.println("</table>");
            out.println("</body></html>");
            
            //validar contraseña

            String pass = request.getParameter("contrasena");       
            
            String caracteres = "!·$%&/()=?¿ºª[]}{-_*+|@#~½¬";
            String mayusculas ="QWERTYUIOPLÑKJHGFDSAZXCVBNM";
            String numeros = "1234567890";
            boolean valido = true;
            
            for(int i=0; i< pass.length() && valido; i++){
                if ((caracteres.indexOf(pass.charAt(i))!=-1) || 
                		(mayusculas.indexOf(pass.charAt(i))!=-1) || (numeros.indexOf(pass.charAt(i))!=-1)){
                	out.println("FUNCIONA");
                	valido=false;
                }
             }
            
            out.println(" ");
            
            if (!valido) {
				
			}
            
              
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
