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
 * Servlet implementation class MostrarCatalogo
 */
@WebServlet("/MostrarCatalogo")
public class MostrarCatalogo extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		// ServletContext contexto = getServletContext();
		response.setContentType("text/html;UTF-8");
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/><link rel='stylesheet' type='text/css' href='styles/style.css'><link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'></head><body>");

		Connection conn = null;
		Statement sentencia = null;
		try {
			// Paso 1: Cargar el driver JDBC.
			Class.forName("org.mariadb.jdbc.Driver").newInstance();

			// Paso 2: Conectarse a la Base de Datos utilizando la clase
			// Connection
			String userName = "alumno";
			String password = "alumno";
			String url = "jdbc:mariadb://localhost/catalogo";
			conn = DriverManager.getConnection(url, userName, password);

			// Paso 3: Crear sentencias SQL, utilizando objetos de tipo
			// Statement
			sentencia = conn.createStatement();

			// Paso 4: Ejecutar la sentencia SQL a través de los objetos
			// Statement
			String consulta = "SELECT * FROM obra ";
			
			if (request.getParameter("serie") != null) {
				consulta = "SELECT *,nombre AS autor FROM obra,autor WHERE autor.id_autor=obra.id_autor AND titulo like '%"+ request.getParameter("serie") + "%'";
				
			} else{
	
				consulta = "SELECT *,nombre AS autor FROM obra,autor WHERE autor.id_autor=obra.id_autor";
				if (request.getParameter("nom") != null) {
					if (request.getParameter("nom").equalsIgnoreCase("titulo")) {
						if (request.getParameter("orden").equalsIgnoreCase("desc")) {
							consulta = "SELECT *,nombre AS autor FROM obra,autor WHERE autor.id_autor=obra.id_autor order by titulo desc";
						} else
							consulta = "SELECT *,nombre AS autor FROM obra,autor WHERE autor.id_autor=obra.id_autor order by titulo";
					} else if (request.getParameter("nom").equalsIgnoreCase("autor")) {
						if (request.getParameter("orden").equalsIgnoreCase("desc")) {
							consulta = "SELECT *,nombre AS autor FROM obra,autor WHERE autor.id_autor=obra.id_autor order by autor desc";
						} else
							consulta = "SELECT *,nombre AS autor FROM obra,autor WHERE autor.id_autor=obra.id_autor order by autor";
					}
				}
			}
			ResultSet rset = sentencia.executeQuery(consulta);

			if (!rset.isBeforeFirst()) {
				out.println("<h3>No hay resultados</h3>");
			}

			// Paso 5: Mostrar resultados
			
			out.print("<form action='MostrarCatalogo' method='get'>");
			out.print("	<label>Buscar Serie por título: </label><input type='text' name='serie'>");
			out.print("	<input type='submit' name='enviar' value='Buscar'>");
			out.print("</form>");

			out.print("<h1>Catálogo de Series</h1>");
			
			out.print("<table>");
			out.print("<tr bgcolor='lightyellow'>");
			out.print(
					"<th>Título <a href='MostrarCatalogo?nom=titulo&orden=asc'>&#9650;</a><a href='MostrarCatalogo?nom=titulo&orden=desc'>&#9660;</a></th>");
			out.print(
					"<th>Autor <a href='MostrarCatalogo?nom=autor&orden=asc'>&#9650;</a><a href='MostrarCatalogo?nom=autor&orden=desc'>&#9660;</a></th>");
			out.print("</tr>");
			while (rset.next()) {
				Serie serie = new Serie(rset.getString("titulo"),rset.getString("id_autor"),rset.getString("nombre"),rset.getString("anno"),rset.getString("pais"),rset.getString("genero"),
						rset.getString("finalizada"),rset.getString("duracion"),rset.getString("portada"),rset.getString("descripcion"));
				out.print("<tr>");
				out.print("<td><a href='MostrarObra?titulo=&#39;" + serie.getTitulo() + "&#39;' >" + serie.getTitulo() + "</td>");
				out.print(
						"<td><a href='MostrarCatalogo?id_autor=" + serie.getId_Autor() + "' >" + serie.getAutor() + "</a></td>");
				out.print("</tr>");
			}
			out.print("</table>");

			// Crear filtro para id autor

			int id_autor_aux = 0;
			String id_param = request.getParameter("id_autor");

			try {
				id_autor_aux = Integer.parseInt(id_param);
			} catch (Exception e) {
				System.out.println(e);
			}
			if (id_autor_aux != 0) {
				
				String consulta_autor = "SELECT * from autor where id_autor=" + id_autor_aux;
				rset = sentencia.executeQuery(consulta_autor);
				if (!rset.isBeforeFirst()) {
					out.println("<h3>No hay resultados</h3>");
				}
				// Paso 5: Mostrar resultados

				else {
					rset.next();
					out.println("<h3>Obras del autor " + rset.getString("nombre") + ":</h3>");
				}

				String consulta_obras = "SELECT *,nombre AS autor FROM obra,autor WHERE autor.id_autor = " + id_autor_aux
						+ " AND autor.id_autor=obra.id_autor";
				rset = sentencia.executeQuery(consulta_obras);
				if (!rset.isBeforeFirst()) {
					out.println("<h3>Este autor no tiene ninguna obra</h3>");
				}
				out.println("<table border=1>");

				while (rset.next()) {
					out.println("<tr>");
					out.println("<td>Titulo:<span> " + rset.getString("titulo") + "</span></td>");
					out.println("<td>Genero: <span>" + rset.getString("genero") + "</span></td>");
					out.println("<td>Duración: <span>" + rset.getString("duracion") + " minutos</span></td>");
					out.println("<td>Portada: <br><img  src='img/" + rset.getString("portada") + "' width='100px'></td>");
					out.println("</tr>");
				}
				
				out.println("</table>");
			
			}
			out.print("<br/><button id='button'><a href='/Java14-Catalogo/MostrarCatalogo'>Eliminar filtros</a></button>");
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

	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}