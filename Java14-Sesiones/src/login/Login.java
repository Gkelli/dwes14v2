package login;

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
 * Servlet implementation class Login
 */
@WebServlet("/Login")
public class Login extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Login() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html;UTF-8");
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/><link rel='stylesheet' type='text/css' href='styles/style.css'><link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'></head><body>");

		String mensajeError = null;
		HttpSession session = request.getSession();
		
		if (session.getAttribute("login")!=null && session.getAttribute("login").equals("1")) {
			response.sendRedirect("Java14-Sesiones/MostrarContenido");
		}
		
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
			
			// Paso 5: Mostrar resultados
			if (request.getParameter("enviar") != null) {

				// Paso 4: Ejecutar la sentencia SQL a través de los objetos
				// Statement
				String consulta = "SELECT * FROM usuario where login="+request.getParameter("usuario");

				ResultSet rset = sentencia.executeQuery(consulta);
				
				if (request.getParameter("usuario")==null && request.getParameter("password")==null) {
					mensajeError = "Los campos de usuario y contraseña deben estar rellenos";
				}

				if (!rset.isBeforeFirst()) {
					mensajeError = "No existe el usuario con este login";
				} else {
					if (!rset.getString("password").equals(request.getParameter("password"))) {
						mensajeError = "Contraseña incorrecta";
					} else {
						session.setAttribute("login", 1);
						session.setAttribute("usuario", rset.getString("usuario"));
						response.sendRedirect("Java14-Sesiones/MostrarContenido");
					}
					
				}
				

			} else {
				out.print("<form action='Login' method='post'>");
				out.print("	<label>Login: </label><br><input type='text' name='usuario'><br>");
				out.print("	<label>Contraseña: </label><br><input type='password' name='password'><br>");
				out.print("	<input type='submit' name='enviar' value='Entrar'>");
				out.print("</form>");
				out.print("<a href='Alta'>¿aún no tienes cuenta? Haz clic aquí para crear una</a>");
			}

			// Paso 6: Desconexión
			if (sentencia != null)
				sentencia.close();
			if (conn != null)
				conn.close();
		} catch (Exception e) {
			e.printStackTrace();
		}
		
		if (mensajeError!=null) {
			out.print(mensajeError);
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
