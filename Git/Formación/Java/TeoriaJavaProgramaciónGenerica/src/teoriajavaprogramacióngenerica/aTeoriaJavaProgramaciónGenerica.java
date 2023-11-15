/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package teoriajavaprogramacióngenerica;

/**
 *
 * @author l2k49
 */
public class aTeoriaJavaProgramaciónGenerica {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Empleado listaEmpleados[]=new Empleado[4];
        listaEmpleados[0]=new Empleado("Empleado1",1,1);
        listaEmpleados[1]=new Empleado("Empleado2",2,2);
        listaEmpleados[2]=new Empleado("Empleado3",3,3);
        listaEmpleados[3]=new Empleado("Empleado4",4,4);
        
        for (Empleado e :listaEmpleados){
            System.out.println("los empleados son : "+e.MostrarDatos());
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