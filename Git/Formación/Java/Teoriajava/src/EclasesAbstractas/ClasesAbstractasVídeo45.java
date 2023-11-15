/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package EclasesAbstractas;


import java.util.Date;
import java.util.GregorianCalendar;

/**
 *
 * @author l2k49
 */
public class ClasesAbstractasVídeo45 {
    /*|---------JERARQUÍA---------|
 Método          Clase           Método  -----------> se identifica un Método que debe ser declarado abstracto
dameNombre-----> Persona <------ dameDescripción
   ________________|_____________________
        |                        |
    Empleado                  Alumno
        |
    Jefatura
        |
    Director
    
    |----------Sintaxys-----------|
    al declarar un metodo como abstracto estas obligado a declarar como abstracto tambien 
    la clase pero los que hereden de esa clase se ven obligados a sobreescribir ese método abstracto
    pero también en algún punto por cada clase se debe crear un public Sring dameDescripcion {}
    entonces escribirias en cada clase este metodo para devolver una descripción  entonces 
    declarar como abstracto no hace mas que seguir un patrón de diseño en gerarquia de herencia
    
    
    abstract class Persona {.....}
    public abstract String dameDescripcion();
    
    |public : si queremos que las demas clases accedan a este método
    |abstract : indica que el método será abstracto
    |String : tipo de dato que devolvera el método
    |dameDescripcion : nombre método
    |(); : () argumentos o vacio sin llaves {}
    |---------------------| 
    Patron en diseño Gerarquia de Herencia
    si todos las clases que heredan tienen caracteristicas en común
    que heredan de una clase como persona como el nombre pero que sucede
    si es una descripción que de información de cada objeto para aplicarlo en todos los aspectos
    lo difrente es que no puede ser un getter que retorne un nombre que funcionaria igual para cada 
    clase debido a que la descripción de un empleado es muy diferente a la de un alumno porque la descripcion
    no es lo mismo para todo objeto como no se tiene claro se declara como abstracto claro en cantidad de parametros
    porque no sera igual para todos 
    
    */
    /*|---------------CLASE MAIN------------------|*/
    public static void main(String[] args){  //creando instancia de clases 
        Persona[] lasPersonas=new Persona[2];//array tipo persona
        lasPersonas[0]=new Empleado("Luis",5000,2009,02,25);//creo en el array un objeto tipo empleado cuando el array es tipo persona
        lasPersonas[1]=new Alumno("Ger","Lic");//regla es un metiendo en un array tipo persona un objeto diferente alumno
    
        /*se declara como array la clase base en este caso persona para entonces se da que al reescribir metodos en cada clase
        que valla heredando en el array se puede aplicar polimorfismo que es agregar objetos diferentes al declaradod
        en el array y el enlaze dinamico al compartir nombre los operadores en un for lo interpreta por la gerarquia sabiendo a cual 
        corresponde cada uno */
       
        //recorriendo array con bucle for-each
        //   Clase  Var : nombreArray-O-Lista
        for (Persona p:lasPersonas)
        {System.out.println(p.dameNombre()+""+p.dameDescripcion());}//ejemplo de herencia enlaze dinamico polimorfismo 
    }}
/*|---------------CLASE------------------|*/
abstract class Persona{
//Declaración de Constructor (parametros)    
public Persona(String nom){nombre=nom;}
//Logica de Constructor
String nombre;
//setter
public String dameNombre(){return nombre;}
//getter
public abstract String dameDescripcion(); //TAN SOLO SE DEFINE PERO NO SE CONSTRUYE (PARAMETROS) cada clase vea que le pasa al sobreescribir el metodo
}
/*|---------------CLASE MAIN------------------|*/
//public static void main(String[] args){  }

/*|---------------CLASE------------------|*/
               //esto requiere llamar al constructor clase padre
class Empleado extends Persona{// Empleado tendra error hasta no corregir lo heredado de la clase padre abstracta metodo
//Declaración de Constructor (parametros)
public Empleado(String nom,double sue, int agno, int mes ,int dia){
super(nom);//constructor clase padre
//Logica de Constructor
sueldo=sue;
GregorianCalendar calendario=new GregorianCalendar(agno,mes-1,dia);
altaContrato=calendario.getTime();
++idSiguiente;
id=idSiguiente;
}
//Variables de Objeto
private double sueldo;
private int agno;
private int mes;
private int dia;
Date altaContrato;
private  int idSiguiente=0;
private  int id;

//setter
public void subeSueldo(double porcentaje){
double aumento=sueldo*porcentaje/100; sueldo+=aumento;}
public String dameDescripcion(){return"Este empleado tiene un Id"+id+"con un sueldo="+sueldo;}//sobreescribiendo metodo de clase padre abstracta
//getter
public double dameSueldo(){return sueldo;}
public Date dameFechaContrato(){return altaContrato;}
}
/*|---------------CLASE------------------|*/
class Alumno extends Persona{
public Alumno(String nom,String car){super(nom); carrera=car;}
private String carrera;

public String dameDescripcion(){return "El Alumno"+nombre+" está estudiando"+carrera;}
}

