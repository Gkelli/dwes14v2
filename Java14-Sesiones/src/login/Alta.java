package login;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 * Servlet implementation class MostrarContenido
 */
@WebServlet("/Alta")
public class Alta extends HttpServlet {
	private static final long serialVersionUID = 1L;
	String SQLEx = "", EX = "";
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Alta() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		ServletContext contexto = getServletContext();

		String mensajeError="";
		String usuario = "", password="";
		
		HttpSession session = request.getSession();
		if ((session.getAttribute("login")!=null) && (session.getAttribute("login").equals("1"))) {
			response.sendRedirect(contexto.getContextPath()+"/MostrarContenido");
		}

		if (request.getParameter("enviar") != null) {
			// validar nombre
			usuario = request.getParameter("username");
			password = request.getParameter("password");
			
			if (usuario == "") {
				mensajeError= "Debes introducir un nombre";
			} else if (password == "") {
				mensajeError= "Debes introducir una contraseña";
			} else {
				// Conectarse
				Connection conn = null;
				Statement sentencia = null;
				try {
					// Paso 1: Cargar el driver JDBC.
					Class.forName("org.mariadb.jdbc.Driver").newInstance();
					// Paso 2: Conectarse a la Base de Datos utilizando la clase Connection
					String url = "jdbc:mariadb://localhost:3306/catalogo";
					conn = DriverManager.getConnection(url, "alumno_rw", "dwes");
					// Paso 3: Crear sentencias SQL, utilizando objetos de tipo Statement
					sentencia = conn.createStatement();
					// Paso 4: Ejecutar la sentencia SQL a través de los objetos Statement
					String consulta = "SELECT * from usuario WHERE login='"+usuario+"'";
					ResultSet rset = sentencia.executeQuery(consulta);
					
					// Paso 5: Mostrar resultados
					if (!rset.isBeforeFirst()) {
						String consulta_insertar = "INSERT INTO usuario VALUES ('" + request.getParameter("usuario")
									+ "', '" + request.getParameter("password") + "', '"
									+ request.getParameter("nombre") + "', '" + request.getParameter("tipo")
									+ "', '" + request.getParameter("descripcion") + "');";
							sentencia.executeUpdate(consulta_insertar);
							mensajeError += "Te has registradro correctamente";
							response.sendRedirect(contexto.getContextPath()+"/Login");
						
					} else {
						mensajeError += "El usuario ya existe en la base de datos";
					}
					// Paso 6: Desconexión
					if (rset != null)
						rset.close();
					if (sentencia != null)
						sentencia.close();
					if (conn != null)
						conn.close();
				} catch (SQLException ex) {
					this.SQLEx = "Se produjo una excepción durante la conexión: " + ex.toString();
				} catch (Exception ex) {
					this.EX = "Se produjo una excepción: " + ex.toString();
				} 
			}
		}
		// salida
		PrintWriter out = response.getWriter();
		response.setContentType("text/html;UTF-8");
		out.println("<html><head><meta charset='UTF-8'/>" + "<style> .error {color: red}</style>"
				+ "<title>Sesiones en JavaEE</title></head><body>");
		out.println("<form action='"+request.getRequestURI()+"' method='post'>"
						+ "<label>Login:</label><br> <input type='text' name='usuario'><br>"
						+ "<label>Contraseña:</label><input type='password' name='password'><br/>"
						+ "<label>Nombre Completo:</label><br> <input type='text' name='nombre'><br/>"
						+ "<label>Descripción:</label><br> <textarea rows='4' cols='50' name='descripcion'></textarea><br/>"
						+ "<label>Tipo de cuenta:</label><br> Cuenta estándar <input type='radio' name='tipo' value='0' checked>Cuenta administrador<input type='radio' name='tipo' value='1'><br/>"
						+ "<input type='submit' value='Registrarse' name='enviar'>"
						+ "</form>"
						+ "<p><a href='"+contexto.getContextPath()+"/Login'>¿Ya tienes cuenta? Haz clic en este enlace</a></p>"
						+ "<h3>"+mensajeError+"</h3>");
		out.println("</body></html>");
	}

		
	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}