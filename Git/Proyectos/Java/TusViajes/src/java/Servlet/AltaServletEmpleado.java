package Servlet;

import Logica.Empleados;
import Logica.ManejadorFechas;
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author l2k49
 */
@WebServlet(name = "ServletEmpleado", urlPatterns = {"/ServletEmpleado"})
public class AltaServletEmpleado extends HttpServlet {


    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {

        }
    }
    
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        Empleados Empleado=new Empleados();
        Empleado.setDni(Integer.parseInt(request.getParameter("")));
        Empleado.setNombre(request.getParameter(""));
        Empleado.setApellido(request.getParameter(""));
        Empleado.setTelefono(Integer.parseInt(request.getParameter("")));
        Empleado.setCorreoelectronico(request.getParameter(""));
        Empleado.setCargo(request.getParameter(""));
        Empleado.setFechanacimiento(ManejadorFechas.deStringToDate2(request.getParameter("")));
        Empleado.crearEmpleado(Empleado);
    }


    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
