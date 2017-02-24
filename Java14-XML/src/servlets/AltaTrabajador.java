package servlets;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.w3c.dom.Attr;
import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;

import util.UtilXML;

/**
 * Servlet implementation class AltaTrabajador
 */
@WebServlet("/AltaTrabajador")
public class AltaTrabajador extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public AltaTrabajador() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		ServletContext contexto = getServletContext();
		response.setContentType("text/html;UTF-8");
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/></head><body>");

		String ruta = contexto.getRealPath("/files/trabajadores.xml");
		Document documentoXML = UtilXML.abrirDocumentoXML(ruta);
		if (documentoXML == null) {
			out.println("<h3>Error al procesar el archivo XML</h3>");
			return;
		}
		
		String categoria = request.getParameter("categoria");
		String nombre = request.getParameter("nombre");
		String direccion = request.getParameter("direccion");
		String telefono = request.getParameter("telefono");
		String movil = request.getParameter("movil");
		
		// Averiguar si ya existe uno con el mismo nombre
		NodeList nodosNombre = documentoXML.getElementsByTagName("nombre");
		for (int i = 0; i < nodosNombre.getLength(); i++) {
            Node nodoActual = nodosNombre.item(i);
            if (nodoActual.getTextContent().equals(nombre)) {
            	out.println("<h3>Advertencia: existe un trabajador con el mismo nombre</h3>");
            }
		}
		
		// Obtener una referencia al elemento raíz
		Element raiz = documentoXML.getDocumentElement();

		// Crear el nuevo elemento con su atributo
		Element nuevo = documentoXML.createElement("trabajador");
        Attr atrCategoria = documentoXML.createAttribute("categoria");
        atrCategoria.setValue(categoria);
        nuevo.setAttributeNode(atrCategoria);

        // Crear el subelemento nombre y añadirlo al nuevo elemento 
        Element nuevoNombre = documentoXML.createElement("nombre");
        nuevoNombre.setTextContent(nombre);
		nuevo.appendChild(nuevoNombre);

        // Crear el subelemento dirección y añadirlo al nuevo elemento 
		Element nuevaDireccion = documentoXML.createElement("direccion");
		nuevaDireccion.setTextContent(direccion);
		nuevo.appendChild(nuevaDireccion);
		
		// Crear el elemento telefono con su atributo
		Element nuevoTelefono = documentoXML.createElement("telefono");
		nuevoTelefono.setTextContent(telefono);
        Attr atrTipoTel = documentoXML.createAttribute("tipo");
        atrTipoTel.setValue("telefono");
        nuevoTelefono.setAttributeNode(atrTipoTel);
        
		Element nuevoMovil = documentoXML.createElement("telefono");
		nuevoMovil.setTextContent(movil);
        Attr atrTipoMov = documentoXML.createAttribute("tipo");
        atrTipoMov.setValue("movil");
        nuevoMovil.setAttributeNode(atrTipoMov);
		
        // Crear el subelemento telefonos, añadirle el teléfono y añadirlo al nuevo elemento
		Element nuevosTelefonos = documentoXML.createElement("telefonos");
		nuevosTelefonos.appendChild(nuevoTelefono);
		nuevo.appendChild(nuevosTelefonos);

		// Añadir el nuevo elemento al elemento raíz
        raiz.appendChild(nuevo);
        
        // Escribir el archivo
        boolean exito = UtilXML.escribirArchivoXML(documentoXML, ruta);
 		if (exito) out.println("<h3>Archivo XML modificado</h3>");
 		else out.println("<h3>Error al escribir el archivo XML</h3>"); 

	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
