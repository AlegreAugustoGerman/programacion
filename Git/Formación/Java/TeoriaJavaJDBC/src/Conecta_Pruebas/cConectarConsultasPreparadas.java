/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Conecta_Pruebas;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author l2k49
 */
public class cConectarConsultasPreparadas {
    public static void main (String[] args){
        try {
            /*
            VENTAJAS DE LAS CONSULTAS PREPARADAS
            |-PERMITEN PASAR PARÁMETROS A LAS SENTENCIAS SQL.
            |-PREVIENEN DE ATAQUES DE INYECCIÓN SQL.
            |-TIENEN UN MEJOR RENDIMIENDO(SON SENTENCIAS PRECOMPILADAS Y REUTILIZABLES)
            
            CONCLUSIÓN CREAR UNA UNICA CONSULTA SIRVE PARA EJECUTARLA CON DIFERENTES CRITERIOS
            EN UNA MISMA SECIÓN TODAS LAS VECES QUE SE REQUERIDAN
            
            CÓMO SON LAS CONSULTAS PREPARADAS
            
            CONSULTA NORMAL
            SELECT * FROM PRODUCTOS WHERE SECCIÓN='DEPORTES' AND PAÍSESDEORIGEN='ESPAÑA';
            
            CONSULTA PREPARADA
            SELECT * FROM PRODUCTOS WHERE SECCIÓN=? AND PAÍSESDEORIGEN=?;
            
            QUE SIGNIFICA Y PERMITE EL ? PERMITE MODIFICAR EN TIEMPO DE EJECICIÓN EL VALOR DEL CRITERIO
            
            SINTAXIS CONSTRUIR CONSULTAS PREPARADAS
            PreparedStatement sentencia=conexión.prepareStatement("SELECT*FROM PRODUCTOS WHERE sección=? and sección=?");
            
            AL TENER ALMACENADO EL OBJETO  EN LA VARIABLE SENTENCIA RESTA VER LOS METODÓS
            Y CUAL CORRESPONDE APLICAR
            
            sentencia.setString(1,'Deportes'); // indicamos con el 1 que en el primer interrogante debe almacenar deportes
            sentencia.setString(2,'España'); // indicamos en el segundo interrogante almacene españa
            ResultSet rs=sentencia.executeQuery(); //con el ResulSet ejecuta la consulta con el metodo execute query
            
            
            */
            
            //1. crear conexion
            Connection miConexion=DriverManager.getConnection("jdbc:mysql://localhost:3306/curso_sql","root","");
            //2.preparar consulta
            PreparedStatement miSentencia=miConexion.prepareStatement("SELECT NOMBREARTÍCULO,SECCIÓN,PAÍSDEORIGEN "
            + "FROM PRODUCTOS WHERE SECCIÓN=? AND PAÍSDEORIGEN=?");
            //3.establecer parametros de consulta
            miSentencia.setString(1,"deportes");
            miSentencia.setString(2,"usa");
            //4.ejecutar y recorreer consulta 
            ResultSet rs=miSentencia.executeQuery();
            while (rs.next()){System.err.println(rs.getString(1)+""+rs.getString(2)+""+rs.getString(3));}//getDate getInt según requiera
            rs.close(); //cerrar el resulset despues de recorrer para liberar la memoria 
            
           //5. reutilización de consulta sql
            System.out.println("ejecución segunda consulta");
            System.out.println("");
            //notar que solo llamamos a miSentencia que contiene la consulta y solo cambiamos parametros
            //definirlo menos veces y solo llamar al que contenga la consulta y solo programar
            //sus variaciones de parametros
            miSentencia.setString(1, "cerámica");
            miSentencia.setString(2, "china");
            
            
           //4.ejecutar y recorreer consulta 
            rs=miSentencia.executeQuery();
            while (rs.next()){System.err.println(rs.getString(1)+""+rs.getString(2)+""+rs.getString(3));}//getDate getInt según requiera
            rs.close();
            
        } catch (SQLException e) {
            Logger.getLogger(cConectarConsultasPreparadas.class.getName()).log(Level.SEVERE, null, e);
            e.printStackTrace();
        }
        
    }
    
}
