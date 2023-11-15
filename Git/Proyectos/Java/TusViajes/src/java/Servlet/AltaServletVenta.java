package Servlet;

import Logica.Empleados;
import Logica.ManejadorFechas;
import Logica.Reservas;
import Logica.Ventas;
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
@WebServlet(name = "ServletVenta", urlPatterns = {"/ServletVenta"})
public class AltaServletVenta extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {

        }
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        Ventas Venta=new Ventas();
        Venta.setNumventa(Integer.parseInt(request.getParameter("")));
        Venta.setMediopago(request.getParameter(""));
        Venta.setTotal(Double.parseDouble(request.getParameter("")));
        Venta.setFechaventa(ManejadorFechas.deStringToDate2(request.getParameter("")));
        
        Reservas Reserva=new Reservas();
        Venta.setUnReserva(Reserva.buscarReserva(Integer.parseInt(request.getParameter(""))));
        
        Empleados Empleado=new Empleados();
        Venta.setUnEmpleado(Empleado.buscarEmpleado(Integer.parseInt(request.getParameter(""))));
        
        Venta.crearVenta(Venta);
        
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
