package servlets;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebInitParam;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class Bienvenida14
 */
@WebServlet(//value="/Bienvenida14",name="BienvenidaServlet",
loadOnStartup=1,
urlPatterns={"/bienvenida14","/bienvenida"},
initParams={
	@WebInitParam(name="usuarioRemoto", value="Geyse"),
	@WebInitParam(name="log", value="1")
}
)

public class Bienvenida14 extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet() 
     * 
     */
    public Bienvenida14() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 *
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		 PrintWriter out = response.getWriter();
		 out.println(getServletName());
		 out.println(request.getServletPath());
		 
		 ServletContext contexto = getServletContext();
		// parametros de inicio	

		 out.println("<br/>Parametro de inicio de contexto: " + contexto.getInitParameter("log"));
		 
		 out.println("<br/>Parametro de inicio del Servlet: " + this.getInitParameter("usuarioRemoto"));
		
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
