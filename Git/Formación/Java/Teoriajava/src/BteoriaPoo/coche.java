/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BteoriaPoo;

/**
 *
 * @author l2k49
 */
public class coche {
private Byte ruedas;
private double largo;
Byte ancho;
private int motor; //modificador de acceso encapsulamiento 
private int peso;
private int peso_total;
private int peso_plataforma;
private String color;
private boolean asientos_cuero,climatizador;

public coche(){
ruedas=4;
largo=1.6;
ancho=3;
motor=1600;
peso=100;
peso_total=500;
}
//forma valida de programar pero desaconsejada
//porque modularizas codigo pero no en ficheros
class camión{}
class moto{}

          /*Métodos Getters y Setters
          2 tipos de métodos de acceso
_________________________|_______________________
        |                              |
Setters o definidores          Getters o captadores

|------GETTERS-------------|
|-°Función : Devolver el valor de las propiedades de los objetos
|-°Sintaxis: public dato_a_devolver nombre_metodo(){codigo+return}  
|-public String dato_largo(){return "";} sin el return daría error  
*/

public String dato_largo(){return "El largo del coche es "+largo;}
/*explicación metodo getter sintaxis
public = modificador de acceso : colocarlo antes del metodo hace que se pueda usar en cualquier otra clase
String = tipo de dato que el metodo proporcionara si quiero el numero int pero si retorna una frase tambien string
dato_largo= nombre del metodo que le daremos siempre que respetemos las reglas no espacio en blanco simbolos raros
()=parentesis referencía a metodos
{return "";} un metodo getter esta obligado a llevar una instruccion return retorname tiene que devolver algo 
*/


/*
|-------------------SETTERS----------------------------|
|-°Función: Modificar el valor de las propiedades de los objetos.
|-°Sintaxis: public void nombre_método(){código}
|-¿Que indica void? Indica que el método no devuelve ningún valor

void quiere decir,indica que no devuelve valor

*/
public void establece_color(){color="azul";}

//getter imprimimos el color //
public String obtener_color(){ return"El color es"+color;}


//|----------------------PASAR PARAMETROS--------------------------------|
/*
¿QUE SE INDICA CON UN PARAMETRO?
cuando llamemos usando una instancia de clase junto con la llamada vamos
a tener que pasar obligatoriamente un parametro () para saber que tipo de parametro
revisar en la clase a la cual se hace referencia el método setter en cuestión*/

//EL PARAMETRO SE ESCRIBE DENTRO DEL () EN LA DECLARACIÓN DEL SETTER
public void establece_cant_ruedas(byte cant_ruedas){ruedas=cant_ruedas;}
//cant_ruedas recibe lo enviado por parametro entonces se indica a donde se almecena
//entonces en la variable private ruedas se almacena igualando con lo recibido por parametro

//This cuando variable y nombre de parametro se repiten
//public void configura_asientos(String asientos_cuero){this.asientos_cuero=asientos_cuero} pero deben ser mismo tipo de dato no como en este caso
//entonces como hacer si variable y parametro se llaman igual y son de distinto tipo  lo siguiente
public void configura_asientos(String asientos_cuero){
if (asientos_cuero=="si"){
this.asientos_cuero=true;}else{
this.asientos_cuero=false;}}

//un setter para imprimir la igualación logica
//entre el string recivido y el bollean correspondiente
//siempre un setter querra retornar un valor por lo que 
//obligadamente debera llevar 2 return en un if en un for
//dependera de la cantidad de casos posibilidades 
public String dato_asientos(){
if(asientos_cuero){return"El coche tiene asientos de cuero";}
else{return"El coche tiene asientos en serie";}}    


public void configura_climatizador(String climatizador){
if (climatizador.equalsIgnoreCase("si")){this.climatizador=true;}//if (climatizador=="si") nunca comparar asi si queremos que se comparen 2 cadenas de string para determinar algo 
else{this.climatizador=false;}}

public String dato_climatizador(){
    if(climatizador==true){
    return"El coche incorpora climatizador";}
    else{return"El coche lleva aire acondicionado";}}

//NO SE RECOMIENDA PERO A NIVEL CODIGO FUNCIONA 
//CON EL FIN DE ENTENDER POR SI VIESE EN ALGÚN MOMENTO
//UTILIZAR UN PUBLIC CON GETTER Y SETTER EN CONJUNTO
public String dato_peso_coche(){
int peso_carroceria=500; //variable ambito local
peso_total=peso_plataforma+peso_carroceria;
if (asientos_cuero==true){peso_total=peso_total+50;}
if(climatizador==true){peso_total=peso_total+20;}
return"El peso del coche es"+peso_total;}

public int precio_coche(){
int precio_final=10000;
if(asientos_cuero==true){precio_final+=2000;}
if (climatizador==true) {precio_final+=1500;}
return precio_final;}


public String dimeDatosCoche(){
return"las ruedas son :"+ruedas+"de largo es :"+largo+"de ancho es:"+ancho+"tiene un motor de :"+motor+
        "su plataforma pesa:"+peso;}
}


