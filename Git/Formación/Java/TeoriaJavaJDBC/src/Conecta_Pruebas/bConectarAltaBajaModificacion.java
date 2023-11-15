/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Conecta_Pruebas;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author l2k49
 */
public class bConectarAltaBajaModificacion {
    public static void main (String[] args){
        try {
            //1. crear conexion
            Connection miConexion=DriverManager.getConnection("jdbc:mysql://localhost:3306/curso_sql","root","");
           //2- crear objeto statement
           Statement miStatement=miConexion.createStatement();
           
           //3- insertando datos 
           String instruccionSql="INSERT INTO PRODUCTOS(CÓDIGOARTÍCULO, NOMBREARTÍCULO, PRECIO) VALUES ('AR77','PANTALÓN',25.35)";
           miStatement.executeUpdate(instruccionSql);
           System.out.println("datos insertados correctamente");
           
           //3- actualizando datos
           String instruccionSql1="UPDATE PRODUCTOS SET PRECIO=PRECIO*2 WHERE CÓDIGOARTÍCULO='AR77'";
           miStatement.executeUpdate(instruccionSql1);
           System.out.println("datos actualizados correctamente");
           
           //3- eliminando datos
           String instruccionSql2="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO='AR77'";
           miStatement.executeUpdate(instruccionSql2);
           System.out.println("datos eliminados correctamente");
            
        } catch (Exception e) {
            System.out.println("no conecta");
        }
    }
}
