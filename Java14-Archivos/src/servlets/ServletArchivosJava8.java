package servlets;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.nio.charset.StandardCharsets;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.StandardOpenOption;
import java.util.ArrayList;
import java.util.stream.Stream;

import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class ServletArchivosJava8
 */
@WebServlet("/ServletArchivosJava8")
public class ServletArchivosJava8 extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ServletArchivosJava8() {   super();  }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html; charset= UTF-8");
		ServletContext contexto = getServletContext();
		PrintWriter out = response.getWriter();
		
		out.println("<!DOCTYPE html>");
		out.println("<html><head><title>U4A02 - Acceso a archivos en JavaEE</title> </head> ");
		out.println("<body>");		
		
		//Un stream representa una secuencia de elementos y permite realizar operaciones sobre ellos. 
		//Se trabaja con el stream como si fuese una cinta transportadora o una tubería por la que los elementos van sufriendo transformaciones. 
		//Finalmente puede incluso generarse una colección diferente a la que entró.
		
//		ArrayList<String> nombres = new ArrayList<String>();
//		nombres.add("Julia");
//		nombres.add("Ana");
//		nombres.add("Sergio");
//		nombres.add("Alberto");

//		nombres.stream()
//		  .filter(s -> s.startsWith("A"))
//		  .map(String::toUpperCase)
//		  .sorted()
//		  .forEach(out::println);
		
		//Vamos a hacer ahora pruebas de lectura y escritura con archivos. En este ejemplo se utiliza la clase Path, 
		//incluida en Java 7 dentro de su reestructuración del paquete Non-Blocking I/O Operations o `nio`:
	
		Path path = Paths.get(contexto.getRealPath("/files/modulos.txt"));
		
//		try (Stream<String> stream = Files.lines(path)) {
//				stream.forEach(out::println);
//		} catch (Exception e) {
//				out.println(e.toString());
//		}
		
		/*Observa que noes necesario gestionar el cierre del archivo. A estos bloques se les 
		 * llama *try-with-resources* y están pensados para simplificar estas operaciones. 
			hora cambia el tipo de expresión lambda para poder nombrar cada elemento:*/
//		
//		Path path = Paths.get(contexto.getRealPath("/files/modulos.txt"));
//		try (Stream<String> stream = Files.lines(path)) {
//		  stream.forEach(s -> {
//		    out.println(s);
//		  });
//		} catch (Exception e) {
//		  out.println(e.toString());
//		}
		
		/*Los dos ejemplos anteriores son totalmente equivalentes: pero con este nuevo código 
		 * podemos por ejemplo añadir el salto de línea en HTML para que se visualice mejor en nuestra aplicación web:*/
		
		
//		try (Stream<String> stream = Files.lines(path)) {
//			  stream.forEach(s -> {
//					out.println(s + "<br/>");
//			});
//			} catch (Exception e) {
//				out.println(e.toString());
//			}
		
		
		/* Podemos incluir también algún filtro:*/


//		try (Stream<String> stream = Files.lines(path)) {
//			  stream
//			    .filter(s -> s.startsWith("D"))
//			    .forEach(s -> out.println(s + "<br/>"));
//			} catch (Exception e) {
//			  out.println(e.toString());
//		}
		
		// Haz ahora un uso más intensivo de los stream (consulta los apuntes
		// para una explicación más detallada):

//		try (Stream<String> stream = Files.lines(path)) {
//			stream.filter(s -> s.startsWith("D")).map(String::toUpperCase).sorted()
//					.forEach(s -> out.println(s + "<br/>"));
//		}
		
		

		// Hay muchas soluciones para la escritura de archivos. El problema con
		// el que tenemos que lidiar es la codificación de caracteres UTF-8.
		// Solución propuesta:

		Path rutaArchivoEscritura = Paths.get(contexto.getRealPath("/files/modulos.txt"));
//		try (BufferedWriter writer = Files.newBufferedWriter(rutaArchivoEscritura, StandardCharsets.UTF_8)) {
//			writer.write("Desarrollo web en entorno servidor\n");
//			writer.write("Inglés técnico\n");
//		}

		
		// ¿Qué pasa con los nombres de módulos ya presentes en el archivo?Para
		// evitar la sobreescritura del archivo, tenemos que solicitar la operación *append*:

//		try (BufferedWriter writer = Files.newBufferedWriter(rutaArchivoEscritura, StandardCharsets.UTF_8,
//				StandardOpenOption.APPEND)) {
//			writer.write("Lenguajes de Marcas\n");
//			writer.write("Entornos de desarrollo\n");
//		}
		
		// Por último, vamos a ver cómo ocultar un archivo: para ello debemos
		// almacenarlo fuera de *Web Content* y dentro de *WEB-INF*: de esta
		// forma será imposible acceder a este archivo desde un navegador, pero
		// podremos consultarlo. Podemos almacenar allí información interna de
		// la aplicación.

		Path rutaArchivoSecreto = Paths.get(contexto.getRealPath("/WEB-INF/secreto.txt"));
		try (BufferedWriter writer = Files.newBufferedWriter(rutaArchivoSecreto, StandardCharsets.UTF_8)) {
			writer.write("Información no visible por los usuarios\n");
		}
		
		
		
		

		out.println("</body>");
		out.println("</html>");


	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}

}
