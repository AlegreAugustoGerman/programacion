/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BteoriaPoo1;

/**
 *
 * @author l2k49
 */ /*
   |----------------DECLARACIONES--VALIDAS--DEL--MAIN----------------------------|
    public static void main(String[]args){}
    public static void main(String[]nombrearraymain){}
    static public void main(String[]args){}
   */

    /*
|---------------SINTAXYS---------------------------|
public static void main(String[]args){}
public PARA PODER ACCEDER AL DESDE FUERA DE LA CLASE DONDE ESTA DEFINIDO
static INDICA QUE PERTENECE A LA CLASE SEA VARIABLE METODO LO DEFINIDO
void   INDICA QUE NO DEVUELVE NINGUN DATO CASO SETTER CASO CONTRARIO GETTER DEBE LLEVAR UN RETURN
main   INDICA EL INICIO DEL PROGRAMA DE LA CLASE A LA CUAL PERTENECE EN SI NO ACTUA SOBRE OBJETOS 
AL SER STATIC LOS OBJETOS COMPARTEN Y TODO LO CONTENIDO COMPARTEN SU EJECUCIÓN POR EL MISMO METODO
(String[]args){}//String tipo de dato [] referencia a un array  args nombre del array
    */
public class ConstanteUsoFinalPooStaticEtc {
    public static void main(String[]args){//punto de inicio de ejecución de un programa metodo main actuando como cualquier setter
       
        Empleados trabajador1=new Empleados("Paco");
        trabajador1.cambiaSeccion("RRHH");
        System.out.println(trabajador1.devuelve());//imprime el nombre paco y la seccion administracion
        
        //pero que sucede si este dato fuese un documento deberia ser inalterable sucede porque la variable
        //private no tiene un final para volverlo constante por tanto inalterable
        //||-----------------------CREO OTRO EMPLEADO PARA LA PRUEBA FINAL----------------------------||//
        Empleados trabajador2=new Empleados("PABLO");
        trabajador2.cambiaNombre("Andy");//pasamos por parametro un cambio al nombre 
        System.out.println(trabajador2.devuelve());
        
        //||----------LLAMO A LA VARIABLE DE CLASE STATIC ID PARA INCREMENTAR ASIGNAR ID-----------||//
        System.out.println(trabajador1.devuelve());
        Empleados.id ++;//este es el problema estoy saltando la encapsulación modificando un valor cuando deberia incrementarse solo
        System.out.println(trabajador2.devuelve());
        //||--------------SOLUCIÓN-------------------------------------||//
        System.out.println(trabajador1.devuelveValorStaticId());
        System.out.println(trabajador2.devuelveValorStaticId());
                
        
    }   
}
class Empleados{
public Empleados(String nom){
nombre=nom;
seccion="Administración";//estado inicial todo empleado 

//|-----SI NECESITO ASIGNAR VALOR QUE INCREMENTE RESTE MULTIPLEQUE ETC ALEATORIO O ASIGNAR ID---------------------|//
Id=IdSiguiente; //Id vale 0 pero IdSiguiente vale 1 como valor inicial entonces creo objeto uno y obtengo que su id es 1
IdSiguiente++;//creo objeto 2   entonces el  contador incrementa en uno su id sera 2
}

private /*final*/ String nombre; //variable privada y constante dato fijo incambiable por metodos si quiera por propios de clase
private String seccion;

public void cambiaSeccion(String seccion){this.seccion=seccion;}//setter

public String devuelve(){return"El nombre es:"+nombre+//getter
        "y la seccion es : "+seccion+"y el numero de identificación es :"+id;}

//|----------------------metodo getter para retornar y visualizar la solución de Id------------------------------------|//
public String devuelveValorStaticId(){return"El nombre es:"+nombre+//getter
        "y la seccion es : "+seccion+"y el numero de identificación es :"+IdSiguiente;}

public void cambiaNombre(String nombre){this.nombre=nombre;}//setter que intenta cambiar un dato  final o constante

/*|--------------------
//|------STATIC-----|//
solo la clase tiene copia de variables static ningun objeto tiene copia su versión 
si no que al ser de la clase todos los objetos la comparten.

Clase 
variables

objeto de clase 1    objeto de clase 2 
variable1=9;               variable1=5;
private int id=1;     private int id=2;

PARA QUE EL ID SE AUTO INCREMENTE AL CREAR UN NUEVO OBJETO NO DEBE TENER COMO 
ATRIBUTO EL ID SI NO QUE DEBE RECIBIRLO DE FORMA COMPARTIDA POR CADA OBJETO CREADO
A PARTIR DE ESA CLASE LO QUE IMPLICA QUE LA VARIABLE DEBE SER DE CLASE Y NO ATRIBUTO DE
CLASE COMO CARACTERISTICA COMÚN DE OBJETO ¡¿CREAR VARIABLES DE CLASE ? private static int id=;
--------------------|*/
public static int id=1; //al ser estatic afectara a todo objeto creado a partir de la clase con la diferencia
//y java diferencia lo declarado como variable de clase dejando id en italic el tipo de letra notar que al ser
//ublic puede modificarse saltandose la regla de encapsulación al ser un dato sensible como numero de identificacion

        //||--------------SOLUCIÓN-------------------------------------||//
private static int Id;//privada por encapsulación  y static para que la compartan todos los objetos que partan de esta clase
private static int IdSiguiente=1;//static para que la compartan todos los objetos que partan de esta clase
//IdSiguiente =1 primer empleado entonces cada vez que sumemos uno ira incrementando


/*|------video 38---------------
//|------MÉTODOS--STATIC-----|//
NO ACTÚAN SOBRE OBJETOS
NO ACCEDEN A CAMPOS DE EJEMPLAR(VARIABLES/CONSTANTES DECLARADAS EN LA CLASE),
A MENOS QUE ESTAS SEAN TAMBIÉN STATIC.
PARA LLAMARLOS SE UTILIZA EL nombre_clase.nombre_metodo
*/
}
