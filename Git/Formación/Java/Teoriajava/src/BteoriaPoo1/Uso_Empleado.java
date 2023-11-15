 /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BteoriaPoo1;

import java.util.Date;
import java.util.GregorianCalendar;

/**
 
 * @author l2k49
 */
public class Uso_Empleado {
    public static void main(String[] args){
    Empleado empleado1=new Empleado ("Paco",85000,1990,12,17);
    Empleado empleado2=new Empleado ("Ana",95000,1995,06,02);
    Empleado empleado3=new Empleado ("Maria",105000,2002,03,15);
   
    
    
    empleado1.subeSueldo(5);
    empleado2.subeSueldo(5);
    empleado3.subeSueldo(5);

        System.out.println("Nombre:"+empleado1.dameNombre()+"Sueldo: "+empleado1.dameSueldo()
        +"Fecha de Alta: "+empleado1.dameFechaContrato());
        
        System.out.println("Nombre:"+empleado2.dameNombre()+"Sueldo: "+empleado2.dameSueldo()
        +"Fecha de Alta: "+empleado2.dameFechaContrato());
                
        System.out.println("Nombre:"+empleado3.dameNombre()+"Sueldo: "+empleado3.dameSueldo()
        +"Fecha de Alta: "+empleado3.dameFechaContrato());
            
     Empleado[] misEmpleados=new Empleado[6];
     misEmpleados[0]=new Empleado("Pac",80000,1980,12,17);
     misEmpleados[1]=new Empleado("An",90000,1970,12,17);
     misEmpleados[2]=new Empleado("Mar",10000,1990,12,17);
     misEmpleados[3]=new Empleado(1,"ds",213.0);

     
     
     
     
     for (int i=0;i<3; i++){//for each  for(Empleado e: misEmpleados){misEmpleados[e].subeSueldo(5);}
     misEmpleados[i].subeSueldo(5);}
     for(int i=0;i<3;i++){//for mejorado for(Empleado e: misEmpleados){"Nombre:"+misEmpleados[e]dameNombre()}
         System.out.println("Nombre:"+misEmpleados[i].dameNombre()+"Sueldo: "+misEmpleados[i].dameSueldo()
        +"Fecha de Alta: "+misEmpleados[i].dameFechaContrato());}
     
    
    }
    
    
}

class Empleado{
 //-TIPO---CLASE---(PARAMETROS-------------------------------------)//
    public Empleado(String nom,double sue,int agno, int mes,int dia){
    nombre=nom;
    sueldo=sue;
    GregorianCalendar calendario=new GregorianCalendar (agno,mes-1,dia);//DECLARACIÓN INSTANCIA CLASE DE LA API 
    altaContrato=calendario.getTime(); //METÓDO OBTENER DE LA CLASE EN LA API POR PARAMETROS
    }
//|---------Declaración de variables (atributos de la clase) o campos de clase-------|//
    private String nombre;
    private double sueldo;
    private Date altaContrato;
    //|----------GETTERS-------------|//
    public String dameNombre(){return nombre;}
    public double dameSueldo(){return sueldo;}
    public Date dameFechaContrato(){return altaContrato;}
    //|-----------SETTERS------------|//
    public void subeSueldo(double porcentaje){
    double aumento=sueldo*porcentaje/100;
    sueldo+=aumento;}//sueldo mas aumento 
    //|----------SOBRECARGA DE METODOS SOBRECARGA DE CONSTRUCTORES-------------|//
    /*
    si tienen metodos o constructores el mismo nombre como java sabe a cual estamos
    haciendo referencia simplemente por la cantidad de argumentos que le pasemos
    que son los declarados en el metodo como parametros sirve para dar a objetos
    estados diferentes de inicio 
    */
    
    public Empleado(String nom){//Ejemplo de sobrecarga de constructores
    this(nom,3000,2000,01,01);}//notar que el unico campo no fijado pudiendo ser cambiado es nombre por si no supoiesemos en el momento

    //si hubiesen mas constructores el this se referiria al que coincida en numero de parametros
    private int sucursal;
    private String puesto;
    
    
    public Empleado(int sucursal,String puesto,double sue){//los parametros entre () recibiran los argumentos al ser invocados por sea fijo o usuario que ingrese Empleado.
        sucursal=sucursal;
        puesto=puesto;
        sueldo=sue;}
    /*
    public Empleado(double sue,String nom){this(sue,nom);}
 se pueden crear tantos constructores como uno quiera siempre 
    y cuando no se repitan el número de parámetros. Realmente 
    la condición no es el número, sino el número y el órden de
    tipos de parámetros. Se puede tener un constructor que reciba 2 
    (String, int) y otro que también reciba 2 (int, String) y además
    otro con otros 2 (String, String) y otro con otros 2 (int, int). 
    Pero si se tienen estos 4... no se podría hacer otro constructor más
    que sea tipo (String, String) pero si otro más que sea (doublé, String).
    Lo que no debe coincidir es la conjunción de 3 factores en cuanto a los
    parámetros: (nº, tipo y orden)
    */
     
        
            
        

    
    }
    
    
    

    