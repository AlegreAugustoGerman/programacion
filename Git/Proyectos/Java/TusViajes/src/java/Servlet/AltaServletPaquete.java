package Servlet;

import Logica.Empleados;
import Logica.ManejadorFechas;
import Logica.Paquetes;
import Logica.Servicios;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author l2k49
 */
@WebServlet(name = "ServletPaquete", urlPatterns = {"/ServletPaquete"})
public class AltaServletPaquete extends HttpServlet {

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
        
        Paquetes Paquete=new Paquetes();
        Paquete.setNumpaquete(Integer.parseInt(request.getParameter("")));
        Paquete.setNombrepaquete(request.getParameter(""));
        Paquete.setTotalpaquete(Double.parseDouble(request.getParameter("")));
        Paquete.setDestino(request.getParameter(""));
        Paquete.setFechaida(ManejadorFechas.deStringToDate2(request.getParameter("")));
        Paquete.setFechavuelta(ManejadorFechas.deStringToDate2(request.getParameter("")));
        
        Empleados Empleado=new Empleados();
        Paquete.setUnEmpleado(Empleado.buscarEmpleado(Integer.parseInt(request.getParameter(""))));
        
        Servicios Servicio=new Servicios();
        Paquete.setServicio((List<Servicios>) Servicio.buscarServicio(Integer.parseInt(request.getParameter(""))));
        Paquete.CrearPaquete(Paquete);
        
    }


    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
