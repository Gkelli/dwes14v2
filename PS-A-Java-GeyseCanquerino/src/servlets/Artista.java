package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class Artista
 */
@WebServlet("/Artista")
public class Artista extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Artista() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		ServletContext contexto = getServletContext();
		response.setContentType("text/html;UTF-8");
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/><link REL='stylesheet' TYPE='text/css' HREF='styles/style.css'><link rel='stylesheet' type='text/css' href='styles/style.css'><link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'></head><body>");

		String nombre_grupo = request.getParameter("nombre");
		boolean error_grupo_ausente = false;
		String grupo="";

		if (error_grupo_ausente) {
			out.println("<h3>Error: falta nombre del grupo de la actuación</h3>");
		} else {
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

				String consulta = "SELECT * FROM actuacion, dias WHERE actuacion.nombre=" + nombre_grupo;
				ResultSet rset = sentencia.executeQuery(consulta);
				if (!rset.isBeforeFirst()) {
					out.println("<h3>No existe</h3>");
				} else {
					// Continuar
					out.println("<h3>DATOS DEL GRUPO "+nombre_grupo+" </h3>");
					out.println("<ul>");
					if (rset.next()) {
						out.print("<ol>Nombre :" + rset.getString("nombre") + "</ol><br/>"
								+"<ol>Origen " + rset.getString("origen") + " </ol><br/>"
								+"<ol>Dia de actuación " + rset.getString("dia") + " </ol><br/>"
								+"<ol><img  src='img/" + rset.getString("imagen") + "' width='100' height='100'> </ol><br/>"
								+"<ol>URL <a href='"+ rset.getString("url") +"'>" + rset.getString("url") + " </a></ol><br/>");
						grupo=rset.getString("nombre");
						}
					out.println("</ul>");
				}	
				out.print("<br/><a href='"+contexto.getContextPath()+"/Cartel?nombre="+grupo+"'>Volver al cartel del dia " + grupo + "</a><br/>");				
				out.print("<br/><a href='"+contexto.getContextPath()+"/PaginaPrincipal'>Volver a la página principal</a>");
				

				// Paso 6: Desconexión
				if (sentencia != null)
					sentencia.close();
				if (conn != null)
					conn.close();
			} catch (Exception e) {
				e.printStackTrace();
			}
		}
		out.println("</body></html>");
		out.close();
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
