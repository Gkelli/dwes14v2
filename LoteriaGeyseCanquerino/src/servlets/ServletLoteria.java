package servlets;

import java.io.BufferedReader;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;
import java.util.StringTokenizer;

import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebInitParam;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.sun.org.apache.xerces.internal.impl.xpath.regex.ParseException;

import classes.Premio;

/**
 * Servlet implementation class ServletLoteria
 */
@WebServlet(
		loadOnStartup=1,
		urlPatterns={"/ServletLoteria","/servletloteria"},
		initParams={
		@WebInitParam(name="usuarioRemoto", value="Geyse"),
		@WebInitParam(name="log", value="1")
		}
	)
public class ServletLoteria extends HttpServlet {
	private static final long serialVersionUID = 1L;       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ServletLoteria() {
        super();
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html; charset= UTF-8");
        response.setHeader("Alumno", "Geyse");
        PrintWriter out = response.getWriter();
        
        
        try {
    		out.println("<!DOCTYPE html>");
    		out.println("<html><head><title>Comprobación loteria</title> </head> ");
    		out.println("<body>");
    		
    		// para los numeros premiados, lo leo del archivo y lo guardo en el hashmap

    		ServletContext contexto = getServletContext();
    		String ruta = contexto.getRealPath("/files/loteria.txt");
    		BufferedReader br = new BufferedReader(new InputStreamReader (new FileInputStream(ruta) , "UTF-8"));
    		String linea;
    		boolean es_ganador = false;
    		double montante=0;
    		
    		//numero introducido	
    		
    		String billete = request.getParameter("billete");  
    		String cantidad = request.getParameter("cantidad");
    		 
    		out.println("<p>Billete jugado: " + billete + " </p>");
    	    out.println("<p>Veces jugada: " +  cantidad + "</p>");   
    	    
    	    out.println("<p>Números ganadores: </p>"); 
    		
    	    Premio premio;
    	    String aux;
    		while ((linea = br.readLine())!=null) {
		        int numTokens = 0;
		        StringTokenizer st = new StringTokenizer (linea);
		      //creo un objeto premio para verificar si el numero introducido es el premiado				
		    	premio = new Premio();	
		    	
		        // bucle por todos los premios
		        while (st.hasMoreTokens()) {
		            aux = st.nextToken();
		            numTokens++;
		            if (numTokens%2!=0) {
		            	premio.setNum_ganador(aux);
					} else  if (numTokens%2==0) {
		            	premio.setValor_premio(aux);
					}		            

		        }
				out.println(premio.toString() + "<br/>");
				
	            // verifico si el billete es ganador
	            if(billete.equalsIgnoreCase(premio.getNum_ganador())){
	            	es_ganador=true;
	            	montante = Double.parseDouble(premio.getValor_premio()) * Integer.parseInt(cantidad);
	            }			
			}
    		br.close();
    		    	    
    		if (es_ganador) {
    			out.println("<h5 style= color:red> ¡¡¡¡¡ ENHORABUENA HAS GANADO " + montante + " EUROS </h5>");
			} else {
				out.println("<h5 style= color:blue> LO SENTIMOS!! NO HAS SIDO PREMIADO</h5>");
			}
    		

    		

    	    
    	    
    	    
    	    
    	    
    	    
    	    
    	    
    	    
    	    
    	    
    		
    	    out.println("</body>");
    	    out.println("</html>");

            }
            finally {            
                out.close();
            } 
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}

}
