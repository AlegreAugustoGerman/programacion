<%-- 
    Document   : index
    Created on : 18/05/2020, 12:40:13
    Author     : l2k49
--%>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <a href="index.jsp">Inicio</a> <a href="ListadoDePrendas.jsp">Listar Prendas</a>
        <form action="ListarPrendas" method="POST">  
            <table>
                <tr>
                    <td>Codigo:</td><td><input type="text" name="codigo" required="Falta campo!"></td> 
                </tr>
                <tr>
                    <td>Nombre:</td><td><input type="text" name="nombre" required="Falta campo!"></td> 
                </tr>
                <tr>
                    <td>Marca:</td><td><input type="text" name="marca" required="Falta campo!"></td> 
                </tr>
                <tr>
                    <td>Talla:</td>
                    <td>
                        <select name="talla">
                        <option value="S">Small</option>
                        <option value="M">Medium</option>
                        <option value="L">Large</option>                        
                        </select>
                     </td>
                </tr>   
                <tr>
                    <td>Stock:</td><td><input type="text" name="stock" required="Falta campo!"></td> 
                </tr>
                <tr>
                    <td>Temporada:</td>
                    <td>
                        <select name="temporada">
                        <option value="true">SI</option>
                        <option value="false">NO</option>                                              
                        </select>
                     </td>
                </tr>     
                <tr>
                    <td><button type="submit">Agregar</button></td><td><button type="reset">Limpiar</button></td>
                </tr>
            </table>                
         </form>
    </body>
</html>
