package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;


/**
 * Servlet implementation class PaginaPrincipal
 */
@WebServlet("/PaginaPrincipal")
public class PaginaPrincipal extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public PaginaPrincipal() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		//String mensajeError="";
		
		HttpSession session = request.getSession();
		session.getAttribute("login");
		// ServletContext contexto = getServletContext();
		response.setContentType("text/html;UTF-8");
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/><title>Página Principal</title></head><body>");

		Connection conn = null;
		Statement sentencia = null;
		try {
			// Paso 1: Cargar el driver JDBC.
			Class.forName("org.mariadb.jdbc.Driver").newInstance();

			// Paso 2: Conectarse a la Base de Datos utilizando la clase
			// Connection
			String userName = "alumnoj";
			String password = "alumnoj";
			String url = "jdbc:mariadb://localhost:4000/ps2013";
			conn = DriverManager.getConnection(url, userName, password);

			// Paso 3: Crear sentencias SQL, utilizando objetos de tipo
			// Statement
			sentencia = conn.createStatement();

			// Paso 4: Ejecutar la sentencia SQL a través de los objetos
			// Statement
			String consulta = "SELECT * FROM info  ";

			//ResultSet rset = sentencia.executeQuery(consulta);

			// Paso 5: Mostrar resultados

			out.println(
					"<a href='PaginaPrincipal?idioma=es'><img src='img/es.png'></a>-<a href='PaginaPrincipal?idioma=en'><img  src='img/en.png'></a>");
			out.print("<table>");
			out.print("<h1>PORTADA</h1>");

			if (request.getParameter("idioma") != null) {
				if (request.getParameter("idioma").equalsIgnoreCase("es")) {
					consulta = "SELECT * FROM info WHERE idioma='es'";
					session.setAttribute("idioma",  request.getParameter("idioma"));
				} else if (request.getParameter("idioma").equalsIgnoreCase("en")) {
					consulta = "SELECT * FROM info WHERE idioma='en'";
					session.setAttribute("idioma",  request.getParameter("idioma"));
				}
			}
			ResultSet rset = sentencia.executeQuery(consulta);
			if (!rset.isBeforeFirst()) {
				out.println("<h3>No hay resultados</h3>");
			}
			out.println("<img  src='img/portada.jpg'>");
			while (rset.next()) {
				out.print("<tr>");
				out.print("<td>" + rset.getString("presentacion") + "</td></br>");
				out.print("</tr>");
			}
			out.print("</table>");
			
			out.print("<h1>CARTEL</h1>");
			String consulta2 = "SELECT DISTINCT dias.dia FROM actuacion , dias WHERE actuacion.dia=dias.id ";
			rset = sentencia.executeQuery(consulta2);
			while (rset.next()) {
				out.print("<tr>");
				out.print("<td><a href='Cartel?dia="+rset.getString("dia")+"'>DIA " + rset.getString("dia") + " </a></td> <br/>");
				out.print("</tr>");
			}
			out.print("</table>");
			
			
			// Paso 6: Desconexión
			if (sentencia != null)
				sentencia.close();
			if (conn != null)
				conn.close();
		} catch (Exception e) {
			e.printStackTrace();
		}

		out.println("</body></html>");
		out.close();
		session.invalidate();
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
