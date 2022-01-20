/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DpolimorfismoEnlazadoDinamico;
import DpolimorfismoEnlazadoDinamico.PolimorfismoEnlazadoDinamico;
/**
 *
 * @author l2k49
 */
public class Uso_Polimorfismo{
public static void main (String[]args){

Jefatura  jefe_RRHH=new Jefatura("Jefe",213,45,32,2);
jefe_RRHH.estableceIncentivo(2570);

     Empleado[] misEmpleados=new Empleado[6];
     misEmpleados[0]=new Empleado("Pac",80000,1980,12,17);
     misEmpleados[1]=new Empleado("An",90000,1970,12,17);
     misEmpleados[2]=new Empleado("Mar",10000,1990,12,17);
     misEmpleados[3]=jefe_RRHH;//Polimorfismo en acción. principio de sustitución
     misEmpleados[4]=new Jefatura("Maria",95000,1999,5,26);//creo objeto jefatura
     /*|-REFUNDICION DE TIPOS DE DATOS -|
     double num1=7.5;       int num2=(int) num1;
       |REFUNDICION DE OBJETO|*/
//VariableObjeto nombreVarObj=(TipoObjConvertir) ListaArrayAlmacenado    
     Jefatura jefa_Finanzas=(Jefatura) misEmpleados[4];//Casting o Refundir se puede hacer porque un jefe es un empleado
     jefa_Finanzas.estableceIncentivo(55000);//ahora es posible al refundir establecerIncentivo
     //que pasa si un empleado común quiero hacerlo jefe porque si?
     Jefatura jefe_compras=(Jefatura) misEmpleados[1];//un empleado no siempre es un jefe por eso dara error esto al ejecutar
     /*se empezo por herencia padre empleado hijo jefe por eso se puede convertir  porque siempre jefe es un empleado
     y no viceversa porque no todos los empleados son jefes  entonces la diferencia es que
     Jefatura jefa_Finanzas=(Jefatura) misEmpleados[4];  funciona porque es de tipo [4]=new Jefatura("Maria",95000,1999,5,26);
     a diferencia de esto Jefatura jefe_compras=(Jefatura) misEmpleados[1]; [1]=new Empleado("An",90000,1970,12,17); siendo que no pertenece al tipo jefatura*/
    Empleado jefe_Humo=(Jefatura) misEmpleados [0];//aun arreglando no funciona porque lo que determina  que se puede
    //es el orden de la herencia que permite el uso de polimorfismo funciona mas como relación logica
     
     //al imprimir imprimira los empleados pero ademas tambien 
     //al llegar a jefe__rrhh funciona el polimorfismo
     //de variable e empleado pasa a ser de tipo e jefatura
     //logrando que el for each imprima y calcule para la clase hijo y el metodo dameSueldo
     //su comportamiento al definirse en una clase reemplazarse en otra clase hijo pero funcionar en ambas
     //se denomina enlazado dinamico. quiere decir que la maquina virtual de java sabra a cual metodo nos 
     //referimos de clase padre o subclase debe llamar.
          for (int i=0;i<3; i++){//for each  for(Empleado e: misEmpleados){misEmpleados[e].subeSueldo(5);}
     misEmpleados[i].subeSueldo(5);}
     for(int i=0;i<3;i++){//for mejorado for(Empleado e: misEmpleados){"Nombre:"+misEmpleados[e]dameNombre()}
         System.out.println("Nombre:"+misEmpleados[i].dameNombre()+"Sueldo: "+misEmpleados[i].dameSueldo()
        +"Fecha de Alta: "+misEmpleados[i].dameFechaContrato());}
     
     
     /*
     Efectivamente ya puede hacer lo que quiera. Pero se supone (solo se supone) que cuando varios programadores están trabajando en un proyecto 
     común, no se van borrando ni modificando el código unos a otros. Es decir, uno como programador que forma parte de un equipo de programadores,
     de repente se da cuenta de que el programa no le deja asignar un valor a una variable. Entonces caes en la cuenta de que es porque algún 
     compañero tuyo del equipo declaró esa variable como final convirtiéndola en constante y que seguramente lo hizo por algo. Entonces se supone
     que le preguntarás: "Oye compañero por qué has declarado esto como final??" Ese es el objetivo de declararlo como final.


Otra situación: Imagina que debes ampliar las capacidades de un programa que no has hecho tú. Pongamos por caso que ese programa tiene miles
     de líneas de código. Te pones manos a la obra y creas una clase que hereda de otra que hizo el programador en su día y te das cuenta de
     que no puedes dar valor a lo que se supone es una variable. Y caes en la cuenta de que es porque el que hizo el programa en su día la
     declaró como final convirtiéndola en constante. Aquí pueden pasar dos cosas: 


1. Eres un mal programador y dices "me da igual, le quito el final que puso aquí el otro programador en su día y sigo..." con lo que es probable
     que te cargues cosas importantes del programa


2. Eres un buen programador y piensas: "si está declarado esto como final debe ser por un motivo importante. Vamos a investigar por qué..."


Resumiendo: esto no se hace para "blindar" un programa ante otros programadores que trabajen en el mismo código, sino para proteger el programa
     de acceso externos y dotarle de lógica y coherencia.
     */

}}
