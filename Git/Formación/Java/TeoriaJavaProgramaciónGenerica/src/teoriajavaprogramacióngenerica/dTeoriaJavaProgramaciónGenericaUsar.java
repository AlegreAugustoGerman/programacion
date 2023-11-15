/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package teoriajavaprogramacióngenerica;

import teoriajavaprogramacióngenerica.dTeoriaJavaProgramaciónGenericaCrear;


/**
 *
 * @author l2k49
 */
public class dTeoriaJavaProgramaciónGenericaUsar {
        public static void EjecutandoGenerico(String[] Contenido){
       
       Generico<String> Cad=new Generico<String>();
       Cad.setValorGenerico("Cadena String");
       
            System.out.println("La cadena  es : "+Cad.getValorGenerico());
       
       Persona per=new Persona("Alguien",20);
       Generico<Persona> p=new Generico<Persona>();
            
            p.setValorGenerico(per);
    }
}


    class Persona{
    private String nombre;
    private int edad;

 
 
   
        public Persona(String nombre,int edad) {
            this.nombre = nombre;this.edad=edad;
            
        }
    
    }
