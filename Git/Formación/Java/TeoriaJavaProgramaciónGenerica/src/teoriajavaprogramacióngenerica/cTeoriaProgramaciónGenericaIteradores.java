/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package teoriajavaprogramacióngenerica;

import java.util.ArrayList;
import java.util.Iterator;

/**
 *
 * @author l2k49
 */
/*                   |---iterator  
ArrayList            |      |     I
    |   C            |   hasNext()      
    |                |      |     M      
   Iterator()--------|     next
            M               |     M
                          remove() 
                                  M
clase ArrayList tiene un metodo llamado iterador es un mecanismo que nos
permite acceder secuencialmente a los elementos de una coleccion cuando
crees esa coleccion de objetos o lo que fuese 
*/
public class cTeoriaProgramaciónGenericaIteradores {
    public static void main (String[] args){
    ArrayList<Empleado> listaEmpleados = new  ArrayList <Empleado>();
    listaEmpleados.add(new Empleado("Empleado1",1,1));
    listaEmpleados.add(new Empleado("Empleado2",2,2));
    
      /*for (Empleado e :listaEmpleados){
            System.out.println("los empleados son : "+e.MostrarDatos());
            }*/
      //reemplazo el for each por un metodo de la clase arrayList 
        Iterator<Empleado>mi_iterador=listaEmpleados.iterator();//Iterator Objeto nombreIterador=Lista
        while(mi_iterador.hasNext()){ //hasNext true si hay mas elementos en la lista 
            System.out.println("El Empleado"+mi_iterador.next().MostrarDatos());//next devuelve el proximo elemento de tipo iterador
        }
    }
    
    public static class Empleado {
       private  String nombre;
       private  int edad,sueldo;
    
        public Empleado() {}

        public Empleado(String nombre, int edad, int sueldo) {
        this.nombre = nombre;this.edad = edad;this.sueldo = sueldo;}
        
        public String MostrarDatos(){
           return "nombre : "+nombre+" edad : "+edad+" sueldo : "+sueldo;}
       } 
    

}