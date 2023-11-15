<%-- 
    Document   : index
    Created on : 10-mar-2020, 13:34:45
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
        <style>
            body{
                
                text-align: center;
                align-content: center;
            }
        </style>
        <h1>Las Personas Tienen Casas :O</h1><br>
        <form action="ServletPersona" method="POST"><br>
            dni:<input type="text" name="numerodocumento"><br>
            nombre:<input type="text" name="nombrespersona"><br>
            <input type="submit" >
        </form>
      <!--  <h1>Las Casas Tienen Personas</h1><br>
        <form action="ServletCasa" method="POST">
            numero casa:<input type="text" name="numerodecasa" ><br>
            Descripcion:<input type="text" name="descripcioncasa"><br>
            <input type="submit" >
        </form>-->
    </body>
</html>
