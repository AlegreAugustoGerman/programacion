/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Conecta_Pruebas;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author l2k49
 */
public class aConectar_Pruebas {
    public static void main (String[] args){
    
    
    
   
        try {
            //1. crear conexión
            Connection miConexion=DriverManager.getConnection("jdbc:mysql:localhost:3306/pruebas","root","");
            //2. crear objeto statement
            Statement miStatement=miConexion.createStatement();
            //3. ejecutar sql
            ResultSet miResulset=miStatement.executeQuery("SELECT * FROM PRODUCTOS"); //RESULSET TABLA VIRTUAL QUE SE ALMACENA EN MEMORIA RESULTADOS A VER IDEAL PARA HACER PRUEBAS
            //4. recorrer el resulset
            while(miResulset.next()){
                System.out.println(miResulset.getString("NOMBREARTÍCULO")
                +""+miResulset.getString("CÓDIGOARTÍCULO")
                +""+miResulset.getString("PRECIO")+""+miResulset.getDate("FECHA"));
            }
                    } catch (Exception e) {
            System.out.println("NO CONECTA!!");
        }
    }
    
}
