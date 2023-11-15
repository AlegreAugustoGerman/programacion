package Servlet;

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
@WebServlet(name = "BajaServletVenta", urlPatterns = {"/BajaServletVenta"})
public class BajaServletVenta extends HttpServlet {

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
        Ventas Venta=new Ventas();
        Venta.eliminarVentas(Integer.parseInt(request.getParameter("")));
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}