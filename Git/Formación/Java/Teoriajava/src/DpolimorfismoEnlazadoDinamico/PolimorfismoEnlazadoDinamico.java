/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DpolimorfismoEnlazadoDinamico;

import java.util.Date;
import java.util.GregorianCalendar;

/**
 *
 * @author l2k49
 */
public class PolimorfismoEnlazadoDinamico {

/*|-----------POLIMORFISMO.PRINCIPIO DE SUSTITUCIÓN---------------------|
  PRINCIPIO DE SUSTITUCION SE PUEDE UTILIZAR UN OBJETO DE LA SUBCLASE SIEMPRE QUE 
  EL PROGRAMA ESPERE UN OBJETO DE LA SUPERCLASE.
  O LO QUE ES LO MISMO: UN OBJETO SE PUEDE COMPORTAR DE DIFERENTE FORMA DEPENDIENDO DEL 
  CONTEXTO.LAS VARIABLES OBJETO SON POLIMORFICAS */


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
    

}


 class Jefatura extends Empleado{
     //Constructor   
    public Jefatura(String nom,double sue,int agno,int mes,int dia){
    super(nom,sue,agno,mes,dia);}//invocando constructor clase padre
    
        
    private double incentivo;
    //setter
    public void estableceIncentivo(double b){
    incentivo=b;}
    //getter reemplaza metodo clase padre a la izquierda overerride sobreescribe
    public double dameSueldo(){
    double sueldoJefe=super.dameSueldo(); //deberia llamar al metodo de clase padre pero no aparece extraño
    return sueldoJefe+incentivo;}
    
    public final void cortarHerenciaMetodos(double c){}
    

}



final class  Director extends Jefatura{
    public Director(String nom,double sue,int agno,int mes,int dia){
    super(nom,sue,agno,mes,dia);}
    
   // public void cortarHerenciaMetodoa(double c){} //esto no es posible al estar declarado en jefatura como final asi se corta la herencia en metodos
    
}

/*class CortarHerenciaClases extends Jefatura {  //no es posible heredar de clase jefatura por usar final
    public Director(String nom,double sue,int agno,int mes,int dia){
    super(nom,sue,agno,mes,dia);}
}*/