<%-- 
    Document   : ListadoDePrendas
    Created on : 18/05/2020, 12:58:44
    Author     : l2k49
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
 <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>JSP Page</title>
        </head>
        <body>
            <h1>Mis Prendas</h1>        
            <table border="1">
                <thead>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Talla</th>
                <th>Fecha Ingreso</th>
                <th>Stock</th>
                <th>Temporada</th>    
                </thead>
                <tbody>               
                <tr>
                   <td><%= request.getAttribute("codigo") %></td>
                   <td><%= request.getAttribute("nombre") %></td>
                   <td><%= request.getAttribute("marca") %></td>
                   <td><%= request.getAttribute("talla") %></td>
                   <td><%= request.getAttribute("fecha") %></td>
                   <td><%= request.getAttribute("stock") %></td>
                   <td><%= request.getAttribute("temporada") %></td>
                   <td></td>
                </tr>                
                </tbody>           
            </table>
                <a href="index.jsp">Volver</a>  
        </body>   
    </html>