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
		out.println("<html><head><meta charset='UTF-8'/></head><body>");
		// Serie serie=new Serie();

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
			String consulta = "SELECT * from obra";
			ResultSet rset = sentencia.executeQuery(consulta);

			if (!rset.isBeforeFirst()) {
				out.println("<h3>No hay resultados</p>");
			}

			// Paso 5: Mostrar resultados

			out.print("<table border='1'>");
			out.print("<tr>");
			out.print("<th>Título</th>");
			out.print("<th>Autor</th>");
			out.print("</tr>");
			while (rset.next()) {
				Serie serie = new Serie(rset.getString("titulo"), rset.getString("id_autor"), rset.getString("anno"), rset.getString("pais"),
						rset.getString("genero"), rset.getString("finalizada"), rset.getString("duracion"), rset.getString("portada"), rset.getString("descripcion"));
			    //out.println("<td> <a href= '/servlet/MostrarObra?titulo="+ serie.getTitulo()+"'>"+ serie.getTitulo()+ "</a></td>");		    
			    //out.println("<td>"+ serie.getAutor()+  "</td>");
			    //out.println("<td>"+ serie.toString()+  "</td>");
				out.print("<tr>");
				out.print("<td><a href='MostrarObra?titulo=&#39" + serie.getTitulo() + "&#39' >" + serie.getTitulo() + "</td>");
				out.print("<td><a href='MostrarCatalogo?id_autor=" + serie.getAutor() + "' >" + serie.getAutor() + "</a></td>");
				out.print("</tr>");
			}
			out.print("</table>");

			// Crear filtro para id del autor

			int id = 0;
			String param_aux = request.getParameter("id_autor");

			try {
				id = Integer.parseInt(param_aux);
			} catch (Exception e) {
				System.out.println(e);
			}
			if (id != 0) {				
				String consulta_autor = "SELECT * from autor where id_autor=" + id;
				rset = sentencia.executeQuery(consulta_autor);
				if (!rset.isBeforeFirst()) {
					out.println("<h3>No hay resultados</p>");
				}
				// Paso 5: Mostrar resultados

				else {
					rset.next();
					out.println("<p>Obras del autor " + rset.getString("nombre") + ":</p>");
				}

				String consulta_obras = "SELECT *,nombre AS autor FROM obra,autor WHERE autor.id_autor = " + id
						+ " AND autor.id_autor=obra.id_autor ";
				rset = sentencia.executeQuery(consulta_obras);
				if (!rset.isBeforeFirst()) {
					out.println("<p>Este autor no tiene ninguna obra</p>");
				}		
				out.println("<table border='1'>");
				
				while (rset.next()) {
					out.println( "<tr>");
					out.println( "<th style='background-color:lightgrey;' >Serie</th>");
					out.println( "<td>Titulo:<span> " +rset.getString("titulo")+ "</span></td>");
					out.println( "<td>Categoria: <span>"+ rset.getString("genero")+ "</span></td>");
					out.println( "<td>Duración: <span>" + rset.getString("duracion")+ "</span></td>");
					out.println( "<td><img src='img/"+rset.getString("portada")+"' width='100px'></td>");
					out.println( "</tr>");
				}
				out.println( "</table>");
			}
			//out.print("<br/><a href='/Java14-Catalogo/MostrarCatalogo'>Eliminar filtros</a>");

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
		doGet(request, response);
	}

}