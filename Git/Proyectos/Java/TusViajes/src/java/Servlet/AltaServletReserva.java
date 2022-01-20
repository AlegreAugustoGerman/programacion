package Servlet;

import Logica.Clientes;
import Logica.Empleados;
import Logica.ManejadorFechas;
import Logica.Paquetes;
import Logica.Reservas;
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
@WebServlet(name = "ServletReserva", urlPatterns = {"/ServletReserva"})
public class AltaServletReserva extends HttpServlet {

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
        
        Reservas Reserva=new Reservas();
        Reserva.setNumreserva(Integer.parseInt(request.getParameter("")));
        Reserva.setAdelantoreserva(Double.parseDouble(request.getParameter("")));
        Reserva.setEstadoreserva(request.getParameter(""));
        Reserva.setTiporeserva(request.getParameter(""));
        Reserva.setPrecio(Double.parseDouble(request.getParameter("")));
        Reserva.setFechareserva(ManejadorFechas.deStringToDate2(request.getParameter("")));
        Reserva.setFechavencimiento(ManejadorFechas.deStringToDate2(request.getParameter("")));
        
        Empleados Empleado=new Empleados();
        Reserva.setUnEmpleado(Empleado.buscarEmpleado(Integer.parseInt(request.getParameter(""))));
        
        Clientes Cliente=new Clientes();
        Reserva.setUnCliente(Cliente.buscarCliente(Integer.parseInt(request.getParameter(""))));
        
        Paquetes Paquete=new Paquetes();
        Reserva.setUnPaquete(Paquete.buscarPaquete(Integer.parseInt(request.getParameter(""))));
        
        Servicios Servicio=new Servicios();
        Reserva.setUnServicio(Servicio.buscarServicio(Integer.parseInt(request.getParameter(""))));
        
        Reserva.crearReservas(Reserva);
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
