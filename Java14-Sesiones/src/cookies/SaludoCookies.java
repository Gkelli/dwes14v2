package cookies;


import java.io.IOException;
import java.io.PrintWriter;


import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class
 */
@WebServlet("/SaludoCookies")
public class SaludoCookies extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#HttpServlet()
	 */
	public SaludoCookies() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */

	private Cookie buscarCookie(String nombreCookie, HttpServletRequest request) {
		Cookie[] cookies = request.getCookies();
		if (cookies != null) {
			for (int i = 0; i < cookies.length; i++) {
				if (cookies[i].getName().equalsIgnoreCase(nombreCookie))
					return cookies[i];
			}
		}
		return null;
	}

	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		ServletContext contexto = getServletContext();
		response.setContentType("text/html;UTF-8");
		
		PrintWriter out = response.getWriter();
		
		if (request.getParameter("eliminarCookie") != null) {
		    Cookie cookieCaducada = new Cookie("usuario","");
		    cookieCaducada.setMaxAge(0);
		    response.addCookie(cookieCaducada);
		    response.sendRedirect("/Java14-Sesiones/SaludoCookies");
		}

		String errorUsuario = "";
		String usuario = "";
		if (request.getParameter("enviar") != null) {
			// validar nombre
			usuario = request.getParameter("usuario");
			if (usuario == "") {
				errorUsuario = "Debes introducir un nombre";
			} else {
				Cookie nuevaCookieUsuario = new Cookie("usuario", usuario);
				nuevaCookieUsuario.setPath("/Java14-Sesiones");
				response.addCookie(nuevaCookieUsuario);
				response.sendRedirect(request.getRequestURI());
			}
		}

		out.println("<html><head><meta charset='UTF-8'/>" + "<style> .error {color: red}</style>" + "</head><body>");

		Cookie cookieUsuario = buscarCookie("usuario", request);
		if (cookieUsuario != null) {
			out.println("<h2>Bienvenid@, " + cookieUsuario.getValue() + "</h2>");
		} else {
			out.println("<form action='"+request.getRequestURI()+"' method='post'>"
					+ "<label>Introduce tu nombre para dirigirnos a ti:</label>" + "<input type='text' name='usuario'/>"
					+ "<span class='error'>" + errorUsuario + "</span><br/>"
					+ "<input type='submit' name='enviar' value='Enviar'/></form>");
		}
		out.println("<p><a href='" + request.getRequestURI() + "'>Refrescar</a></p>");
		out.println("<p><a href='" + request.getRequestURI() + "?eliminarCookie=true'>Eliminar cookies</a></p>");
		out.println("</body></html>");
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