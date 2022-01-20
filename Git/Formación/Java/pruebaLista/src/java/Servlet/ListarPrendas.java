/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Servlet;

import Logica.Prenda;
import java.io.IOException;
import java.io.PrintWriter;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author l2k49
 */
@WebServlet(name = "Biblioteca", urlPatterns = {"/Biblioteca"})
public class ListarPrendas extends HttpServlet {

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
            
        ListarPrendas biblioteca=new ListarPrendas();
                Prenda ropa = new Prenda();
                ropa.setCodigo(Integer.valueOf(request.getParameter("codigo")));
                ropa.setNombre(request.getParameter("nombre"));
                ropa.setMarca(request.getParameter("marca"));
                ropa.setTalla(request.getParameter("talla"));
                //hora
                DateFormat dateFormat = new SimpleDateFormat("yyyy/MM/dd HH:mm:ss");
                Date date = new Date();
                String fecha = dateFormat.format(date);
                ropa.setFechaIngreso(fecha);
                ropa.setStock(Integer.valueOf(request.getParameter("stock")));
                ropa.setTemporada(Boolean.valueOf(request.getParameter("temporada")));
                //agregar a la lista
                //biblioteca.getPrendas().add(ropa);
                //                  
                request.setAttribute("prendas", biblioteca.getPrendas());


                RequestDispatcher despachador = request.getRequestDispatcher("ListadoDePrendas.jsp");
                despachador.forward(request, response);
    
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

    private Object getPrendas() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

}
