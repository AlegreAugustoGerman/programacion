package Servlet;

import Logica.Empleados;
import Logica.ManejadorFechas;
import Logica.Servicios;
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
@WebServlet(name = "ServletServicios", urlPatterns = {"/ServletServicios"})
public class AltaServletServicio extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {

        }
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
        Servicios Servicio=new Servicios();
        Servicio.setNumservicio(Integer.parseInt(request.getParameter("")));
        Servicio.setNombreservicio(request.getParameter(""));
        Servicio.setDescripcion(request.getParameter(""));
        Servicio.setFechainicioservicio(ManejadorFechas.deStringToDate2(request.getParameter("")));
        Servicio.setFechafinservicio(ManejadorFechas.deStringToDate2(request.getParameter("")));
        
        Empleados Empleado=new Empleados();
        Servicio.setUnEmpleado(Empleado.buscarEmpleado(Integer.parseInt(request.getParameter(""))));
        
        Servicio.crearServicio(Servicio);
    }


    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
