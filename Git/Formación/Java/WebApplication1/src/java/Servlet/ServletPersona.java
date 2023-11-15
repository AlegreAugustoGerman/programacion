/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Servlet;

import Logica.persona;
import Persistencia.ControladorPersistencia;
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
@WebServlet(name = "ServletPersona", urlPatterns = {"/ServletPersona"})
public class ServletPersona extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
        
        }
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
       /* ControladorPersistencia controlp=new ControladorPersistencia();
        int dni =Integer.parseInt(request.getParameter("numerodocumento"));
        String nombre=request.getParameter("nombrespersona");
        persona pers=new persona(dni,nombre);
        controlp.crearPersona(pers);*/
        ControladorPersistencia controlp=new ControladorPersistencia();
        persona pers=new persona();
        pers.setDni(Integer.parseInt(request.getParameter("numerodocumento")));
         
        pers.setNombre(request.getParameter("nombrespersona"));
        controlp.crearPersona(pers);
        
        
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
