/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package teoriajavaprogramacióngenerica;

import java.util.ArrayList;

/**
 *
 * @author l2k49
 */
public class bTeoriaProgramaciónGenericaArrayLista {
    
        public static void main(String[] args) {
        /*
        Empleado listaEmpleados[]=new Empleado[4];
        listaEmpleados[0]=new Empleado("Empleado1",1,1);
        listaEmpleados[1]=new Empleado("Empleado2",2,2);
        listaEmpleados[2]=new Empleado("Empleado3",3,3);
        listaEmpleados[3]=new Empleado("Empleado4",4,4);*/
        
        /*diferencias 
        array es por posicion fija [0]  indices de posiciones
        un arrayList utilizando el metodo add de forma dinamica inicialmente capacidad 10 automatico incrementa el indice*/
        
        ArrayList<Empleado> listaEmpleados = new  ArrayList <Empleado>();
        //los array list almacenan objetos no datos primitivos solo es posible utilizando una clase envoltorio
        //fijar capacidad maxima inicial de array list
        listaEmpleados.ensureCapacity(11);
        listaEmpleados.add(new Empleado("Empleado1",1,1));
        listaEmpleados.add(new Empleado("Empleado2",2,2));
        Empleado empleado3=new Empleado("Empleado3",3,3);
        listaEmpleados.add(empleado3);
        //metodos 
            //size para saber el tamaño de la lista
            System.out.println(listaEmpleados.size());
            //ensureCapacity definir el tamaño de array list inicial consume mas recursos ram si te excedes despues
            listaEmpleados.trimToSize();
            //trimToSize corta el exceso de memoria vacia no se este utilizando
        
            //add acomoda el objeto en la lista por defecto pero que sucede si quiero agregarlo en un sitio
            //especifico bueno se utilizan los metodos get y set 
            //set permite incluir o reemplazar un objeto en una determinada posicion
            //get obtenemos un elemento de una posicion en concreto
            
         listaEmpleados.add(new Empleado ("Empleado4",4,4));
         //agregar nuevo empleado en una posicion
         listaEmpleados.set(1, new Empleado("empleado5",5,5));
         //cambiar lugar Empleado
         listaEmpleados.set(2, empleado3);
         //acceder a un elemento de la lista
         System.out.println(listaEmpleados.get(2));//Gran Detalle retornara los datos si pero Hasheados
         System.out.println("sus datos son : "+listaEmpleados.get(2).MostrarDatos());//por eso es importante usar el metodo
         
         
        /*for (Empleado e :listaEmpleados){
            System.out.println("los empleados son : "+e.MostrarDatos());
            }*/
        for (int i=0;i<listaEmpleados.size();i++){//.length corresponde a array posiciones por indice 
        //no valido para array list 
        Empleado e=listaEmpleados.get(i);
            System.out.println(e.MostrarDatos());
        }
        //PASAR UN ARRAY LIST A ARRAY COMÚN
        Empleado arrayEmpleados[]=new Empleado[listaEmpleados.size()];
        //CON EL METODO toArray COPIAMOS EL CONTENIDO DE  listaEmpleados A (arrayEmpleados)
        listaEmpleados.toArray(arrayEmpleados);
        
        for (int i=0; i<arrayEmpleados.length;i++){
            System.out.println(arrayEmpleados[i].MostrarDatos());
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
    
    

