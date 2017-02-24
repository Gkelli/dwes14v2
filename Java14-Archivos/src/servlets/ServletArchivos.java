package servlets;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.io.PrintWriter;

import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class ServletArchivos
 */
@WebServlet("/ServletArchivos")
public class ServletArchivos extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ServletArchivos() {
        super();
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("Served at: ").append(request.getContextPath());
		response.setContentType("text/html; charset= UTF-8");
		ServletContext contexto = getServletContext();
		PrintWriter out = response.getWriter();
		
		out.println("<!DOCTYPE html>");
		out.println("<html><head><title>U4A02 - Acceso a archivos en JavaEE</title> </head> ");
		out.println("<body>");
		
		
		out.println(contexto.getRealPath("/files/modulos.txt"));
	
		out.println("<br/><br/>");
		
		out.println("<h4>Leer el archivo:</h4>");
		String ruta = contexto.getRealPath("/files/modulos.txt");
		BufferedReader br = new BufferedReader(new InputStreamReader(new FileInputStream(ruta), "UTF-8"));
		String linea;
		while((linea = br.readLine()) != null)
		   out.println(linea + "<br/>");
		br.close();

		
//		out.println("<h4>Escribir en el archivo:</h4>");
//		
//		ruta = contexto.getRealPath("/files/modulos.txt");
//		BufferedWriter bw = new BufferedWriter(new OutputStreamWriter(
//			    new FileOutputStream(ruta), "UTF-8"));
//		bw.write("Lenguajes de marcas\n");
//		bw.write("Entornos de desarrollo\n");
//		bw.close();
//		
		
//		out.println("<h4>Escribir en el archivo,Realiza la misma prueba "
//				+ "cambiando el método de BufferedWriter `write` por `append`.</h4>");
//		ruta = contexto.getRealPath("/files/modulos.txt");
//		BufferedWriter bw = new BufferedWriter(new OutputStreamWriter(
//			    new FileOutputStream(ruta,true), "UTF-8"));
//		bw.append("Lenguajes de marcas\n");
//		bw.append("Entornos de desarrollo\n");
//		bw.close();
//		
		out.println("</body>");
		out.println("</html>");

		out.println("<h4>Creamos un nuevo archivo</h4>");
		ruta = contexto.getRealPath("/files/nuevo.txt");
		File archivo = new File(ruta);
		archivo.createNewFile();
		
		out.println("<h4>Y ahora eliminamos el archivo</h4>");
		ruta = contexto.getRealPath("/files/nuevo.txt");
		archivo = new File(ruta);
		archivo.delete();
		
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}

}
