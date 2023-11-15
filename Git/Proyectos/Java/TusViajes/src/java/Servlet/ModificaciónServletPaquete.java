
package Servlet;

import Logica.Paquetes;
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet(name = "ModificaciónServletPaquete", urlPatterns = {"/Modificaci_nServletPaquete"})
public class ModificaciónServletPaquete extends HttpServlet {

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
        Paquete.modificarPaquete(Paquete.buscarPaquete(Integer.parseInt(request.getParameter(""))));
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
