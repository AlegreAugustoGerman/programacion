/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Servlet;

import Logica.Clientes;
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
@WebServlet(name = "ServletCliente", urlPatterns = {"/ServletCliente"})
public class AltaServletCliente extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {

        }
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        
        Clientes Cliente=new Clientes();
        Cliente.setDni(Integer.parseInt(request.getParameter("txtdni")));
        Cliente.setNombre(request.getParameter("txtnombre"));
        Cliente.setApellido(request.getParameter("txtapellido"));
        Cliente.setTelefono(Integer.parseInt(request.getParameter("txttelefono")));
        Cliente.setCorreoelectronico(request.getParameter("txtcorreo"));
        Cliente.setCargo(request.getParameter("txtcargo"));
        Cliente.setFechanacimiento(ManejadorFechas.deStringToDate2(request.getParameter("txtfecha")));
        Cliente.CrearCliente(Cliente);
        
        
        response.sendRedirect(""); 
    }


    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
