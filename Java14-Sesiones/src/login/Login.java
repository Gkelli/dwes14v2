package login;

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
import javax.servlet.http.HttpSession;

/**
 * Servlet implementation class MostrarContenido
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
			
			if (usuario == "" || (password == "")) {
				mensajeError= "Los campos usuario y contraseña no pueden estar vacios";
			}  else {
				// Conectarse
				Connection conn = null;
				Statement sentencia = null;
				try {
					// Paso 1: Cargar el driver JDBC.
					Class.forName("org.mariadb.jdbc.Driver").newInstance();
					// Paso 2: Conectarse a la Base de Datos utilizando la clase Connection
					String url = "jdbc:mariadb://localhost:4000/catalogo";
					conn = DriverManager.getConnection(url, "alumnoj", "alumnoj");
					// Paso 3: Crear sentencias SQL, utilizando objetos de tipo Statement
					sentencia = conn.createStatement();
					// Paso 4: Ejecutar la sentencia SQL a través de los objetos Statement
					String consulta = "SELECT * from usuario WHERE login='"+usuario+"'";
					ResultSet rset = sentencia.executeQuery(consulta);
					// Paso 5: Mostrar resultados
					if (!rset.isBeforeFirst() ) {    
					    mensajeError="No se encuentra el usuario en la base de datos";
					} 
					else {
						rset.next();
						String password_aux = rset.getString("password");
						if ( ! password_aux.equals(password)) {
							mensajeError="La contraseña es incorrecta";
						} else {
							session.setAttribute("login", "1");
							session.setAttribute("usuario",  usuario);
							response.sendRedirect(contexto.getContextPath()+"/MostrarContenido");
						}
					}
					// Paso 6: Desconexión
					if (rset != null)
						rset.close();
					if (sentencia != null)
						sentencia.close();
					if (conn != null)
						conn.close();
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		}
		// salida
		PrintWriter out = response.getWriter();
		response.setContentType("text/html;UTF-8");
		out.println("<html><head><meta charset='UTF-8'/><link rel='stylesheet' type='text/css' href='styles/style.css'><link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'><title>Login</title></head><body>");

		out.println("<form action='"+request.getRequestURI()+"' method='post'>"
						+ "<h3 class='error'>"+mensajeError+"</h3>"
						+ "<label>Usuario:</label><input type='text' name='username'><br/>"
						+ "<label>Contraseña:</label><input type='password' name='password'><br/>"
						+ "<input type='submit' value='Iniciar sesión' name='enviar'>"
						+ "</form>"
						+ "<p><a href='"+contexto.getContextPath()+"/Alta'>¿Aún no estás registrado? Haz clic en este enlace</a></p>"
						);
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