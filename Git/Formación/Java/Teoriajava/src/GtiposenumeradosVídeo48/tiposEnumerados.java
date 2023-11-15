/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GtiposenumeradosVídeo48;

import java.util.Scanner;

/**
 *
 * @author l2k49
 */
public class tiposEnumerados {
//String talla;   //almaceno tallas 
/*talla="pequeña";
talla="mediana"
talla="grande";
talla="azul";//esto pierde el sentido como me aseguro que esto no pase*/
    
//COMO LOGRO ALMACENAR LO QUE DESEO SIN QUE SE PUEDA ALTERAR O ALMACENAR
//DE FORMA DISTINTA CUANDO SON VARIOS VALORES EN UNA SOLA VARIABLE
    
//ENUM VARIABLE OBJETO PERMITE ALMACENAR UN GRUPO DE VALORES Y 
//SOLO ESE GRUPO DE VALORES ADEMAS NO PUEDE ESTAR DECLARADO DENTRO DEL MAIN
enum talla {MINI,MEDIANO,GRANDE,MUY_GRANDE};
//tambien podemos usar constructores parametros metodos declararlo distinto al enum}
enum Talla{MINI("S"),MEDIANO("M"),GRANDE("L"),MUY_GRANDE("XL");//asociamosAlgo("abreviado") notar que no se puede crear un objeto pero se declara como tal  objeto MINI  asociado("S")  para usar como argumento
private String abreviatura;//declaro variable encapsulada tipo string por el tipo talla (")
private Talla(String abreviatura){this.abreviatura=abreviatura;}//entonces String abreviatura revibe ese parametro  "S" this.abreviatura=abreviatura;  esto.clase="esto"; entonces interpreta a que nos referimos
//porque en este constructor hemos usado private y no public bueno porque 
//los tipos enumerados no permiten la creación de objetos entonces no se puede invocar
//un constructor como perteneciente a la clase enum por eso tampoco se puede usar operador
//new que seria crear una instancia para un objeto nuevo por  eso es private como no admite 
//no podra ser invocado desde fuera 
public String dameAbreviatura(){return abreviatura;}
}

public static void main(String[] args){
//la anterior declaracion enum ahora nos permite 
talla s=talla.MINI;//asi guardamos en el objeto s el valor mini
//HACIENDO USO DE METODOS Y CONSTRUCTOR POr METÓDO ESTATICO 
Scanner entrada=new Scanner(System.in); //scanner para saber que tipea el usuario
    System.out.println("Escribe una talla: MINI,MEDIANO,GRANDE,MUY_GRANDE");
    
    String entrada_datos=entrada.next().toUpperCase();//variable aux=entradaUsuario.siguiente.Convertirenmayuscula  |por si el usuario ingresa una minuscula verificamos
    Talla la_talla=Enum.valueOf(Talla.class, entrada_datos);//class NuevarAaux=Enum.valueOf(nombreVarEnum.class, )
    System.out.println("Talla"+la_talla);
    System.out.println("Abreviatura"+la_talla.dameAbreviatura());
    
    /*
    
1) Efectivamente no se trata de un Array, sino de una clase (Talla) que posee en nuestro ejemplo cuatro ejemplares 
    (MINI, MEDIANO, GRANDE y EXTRA_GRANDE) denominados "Constantes enumeradas"  en la que no se pueden añadir más
    ejemplares a posteriori.

2) Los valores en mayúsculas se definen como "Constantes enumeradas". No son Arrays, fuera esa idea de la cabeza!

3) Al escribir final String[] Talla={“MINI”, “MEDIANO”, “GRANDE”, “MUY_GRANDE”} lo único que estás haciendo 
    es impedir que se pueda redefinir el Array en el futuro como por ejemplo: Talla =new String[7]; ya que
    ha sido declarado como final. Pero si que puede hacer lo siguiente: Talla [0]="EXTRA_GRANDE" a pesar del
    final. La solución para no poder modificar los valores almacenados en un Array pasaría por almacenar objetos
    inmutables (hablaremos de ello).

4) CORRECTO !!

5) La definición correcta que te darán todos los libros es "Constantes enumeradas". Son en definitiva ejemplares
    de clase pertenecientes a la clase enumerada Talla. Creo que a estas alturas de curso, todos sabemos lo que es
    un ejemplar de clase. ¿Por qué entonces la definición de constante enumerada? "Constante" porque no pueden cambiar
    una vez definidos (no existe ni podrá existir Talla.MEGA_GRANDE) y "enumerada" porque la clase Talla hereda de
    la clase enum de la API Java. Siempre que crees en tus programas un tipo enumerado, estás heredando de la clase
    enum de la API. Por tanto podrás utilizar todos los métodos pertenecientes a enum reflejados en la API (tal y 
    como hacemos en nuestro código con valueOf por ejemplo)

6) private Talla(MINI(“S”) . El this hace referencia siempre al parámetro implícito. Como siempre intento utilizar
    la menor "jerga" de programación posible para no asustar a nadie, yo hablo de objeto cuando me refiero al parámetro
    implícito. Es decir, el this hace referencia al objeto. En la instrucción this.abreviatura=abreviatura, el this hace
    referencia al campo de clase abreviatura (la variable abreviatura del objeto), mientras que abreviatura a secas 
    hace referencia al parámetro del constructor. Es por este motivo por el cual realmente es Talla.MINI("S").

Cuando construyes una constante enumerada, estás invocando al constructor (al de la clase enum de la API si 
    no has declarado tú otro constructor, o al que has creado tú como es nuestro caso). Al escribir enum Talla{
    MINI("S")....... ahí ya hemos invocado (llamado) al constructor (private Talla (String abreviatura){...}) 
    ¿Dónde se asocia la "S" a la constante enumerada MINI?? Precisamente al invocar al constructor: en MINI("S")
    . La "S" viaja al parámetro del constructor (explícito) y se almacena en abreviatura. De esta forma queda
    asignada la "S" a la constante que invoca (llama) al constructor, en este caso MINI.

7) Esta duda se arrastra de antes. Son constantes enumeradas


Este vídeo lo puse como respuesta a una petición que me hicisteis varios de vosotros. Estoy dudando de si lo he
    subido en el momento adecuado, tal vez debí esperar a avanzar un poco más. No os preocupéis si no se ha entendido
    este vídeo. No influye en el desarrollo de los siguientes. Suelen poner cosas de tipos enumerados en los exámenes 
    de certificación (OCPJP de Oracle).

    
    
    Variables estáticas
    Métodos estáticos
    Bloques estáticos de código.
    https://guru99.es/java-static-variable-methods/
    */

}}    

