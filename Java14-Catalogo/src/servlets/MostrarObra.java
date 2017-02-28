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

import classes.Serie;

/**
 * Servlet implementation class MostrarObra
 */
@WebServlet("/MostrarObra")
public class MostrarObra extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		response.setContentType("text/html;UTF-8");
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/><link REL='stylesheet' TYPE='text/css' HREF='styles/style.css'><link rel='stylesheet' type='text/css' href='styles/style.css'><link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'></head><body>");

		String titulo = "";
		boolean error_titulo_ausente = false;
		boolean error_titulo_erroneo = false;
		String param_obra = request.getParameter("titulo");
		if (param_obra == null)
			error_titulo_ausente = true;
		else {
			try {
				titulo = String.valueOf(param_obra);
			} catch (Exception e) {
				error_titulo_erroneo = true;
			}
		}

		if (error_titulo_ausente) {
			out.println("<h3>Error: falta el titulo de la serie</h3>");
		} else if (error_titulo_erroneo) {
			out.println("<h3>Error: titulo de la serie inválido</h3>");
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
				String url = "jdbc:mariadb://localhost:4000/catalogo";
				conn = DriverManager.getConnection(url, userName, password);

				// Paso 3: Crear sentencias SQL, utilizando objetos de tipo
				// Statement
				sentencia = conn.createStatement();

				// Paso 4: Ejecutar la sentencia SQL a través de los objetos
				// Statement

				String consulta_obra = "SELECT *,nombre AS autor FROM obra,autor WHERE titulo = " + titulo
						+ " AND autor.id_autor=obra.id_autor";
				ResultSet rset = sentencia.executeQuery(consulta_obra);
				if (!rset.isBeforeFirst()) {
					out.println("<h3>Este autor no tiene ninguna serie</h3>");
				} else {
					// Continuar
					out.println("<h3>Datos de la Serie</h3>");
					out.println("<ul>");
					while (rset.next()) {
						Serie serie = new Serie(rset.getString("titulo"),rset.getString("id_autor"),rset.getString("nombre"),rset.getString("anno"),rset.getString("pais"),rset.getString("genero"),
								rset.getString("finalizada"),rset.getString("duracion"),rset.getString("portada"),rset.getString("descripcion"));
						
						out.println("<li>Titulo de la serie: <span>" + serie.getTitulo() + "</span></li>");
						out.println("<li>Autor: <span>" + serie.getAutor() + "</span></li>");
						out.println("<li>Año:<span> " + serie.getAnno() + "</span></li>");
						out.println("<li>Pais: <span>" + serie.getPais()+ "</span></li>");
						out.println("<li>Genero: <span>" + serie.getGenero() + "</span></li>");
						out.println("<li>¿Está finalizada? <span>" + serie.getFinalizada() + "</span></li>");
						out.println("<li>Duración: <span>" + serie.getDuracion() + "</span></li>");
						//out.println("<li>Portada</li> <img  src='img/" + serie.getPortada() + "' width='100px'>");
						out.println("<li>Portada: <br><span>" + serie.getPortada() + "</span></li>");
						out.println("<li>Descripción: <br><span>" + serie.getDescripcion() + "</span></li>");
					}
					out.print("<br/><button class='button'><a href='/Java14-Catalogo/MostrarCatalogo'>volver</a></button>");
					out.println("</ul>");
				}				

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
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		doGet(request, response);
	}

}