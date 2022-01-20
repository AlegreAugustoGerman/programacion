package Ateoriajava;

import java.util.Scanner;
import javax.swing.JOptionPane;

/**
 *
 * @author l2k49
 */



/**
 *
 * @author l2k49
 */
/*
================================================================================================================
TIPOS DE DATOS PRIMITIVOS EN JAVA
Enteros
int 4 bytes de espacio para almacenamiento. desde -2,147,483,648 hasta 2,147,483,647
short 2 bytes de espacio para almacenamiento desde -32,768 hasta 32,767
Long 8 bytes de espacio para almacenamiento  100000000L   Al final un SUFIJO L indica tipo Long
Byte 1 byte de espacio para almacenamiento desde -128 hasta 127
Decimales (Coma flotante)
Float 4 bytes de espacio para almacenamiento Aproximadamente 6 a 7 cifras decimales signifiativas 3.25F Sufijo F
Double 8 bytes de espacio para almacenamiento aproximadamente 15 cifras decimales  no lleva sufijo
Caracteres
char para representar caracteres unicode 'a'
Valores 
Boolean  2 unicos valores true/false
Tipo Objeto //importar librerias para su uso de hay objeto
String
Date
================================================================================================================
VARIABLES EN JAVA 
// se guardan en la ram es importante saberlo por los 
siguientes problemas que podria causar  DESBORDAMIENTOS , CORRUPCION DE MEMORIA
O DE LENTITUD   porque la ram es utilizada para procesos internos de manejo 
aplicaciones y procesos en segundo plano  por lo que es importante saber que hacemos

AL DECLARAR  POSIBLES ERRORES COMPILACION EJECUCION ERRORES DE MEMORIA
asi reservamos espacio en memoria ram int num;
asi asignamor un valor a ese espacio reservado int num=5;

QUE ES LO COHERENTE PARA NO MALGASTAR ESPACIO 
que voy a almacenar pensar si el tipo de dato es el correcto
el mas ajustado a lo que ocupara ese espacio 

COMPILACION debes encontrar el error en tu sintaxys para poder resolver porque
de otra manera no llega a compilar no teniendo solucion.

EJECUCION el error no es de sintaxys todo pero al ejecutar e interpretar el
programa ocurre un error inesperado  como Exception


¿Que es una variable? espacio en la memoria del ordenador donde se almacena un valor
que podra cambiar durante la ejecucion de un programa,
¿por que hay que utilizar variables?por necesidad en guardar temporalmente datos que 
se requeriran en ese mismo programa.
¿Como se crea una variable en java? especificando el tipo de dato que almacenara
en su interior el nombre de variable ejemplo  int salario;
¿Que es iniciar una variable? es darle un valor ejemplo nombre_variable=valor
int salario=2000; java no permite utilizar variables que no se hayan iniciado.

CONSTANTES ¿Que es una constante? espacio en la memoria del ordenador donde se almacenará un valor que no 
podra cambiar durante la ejecucion del programa
¿Porque hay que utilizar contantes? porque a la hora de crear un programa a veces surge la necesidad de guardar datos
temporales que necesitarás utilizr en el futuro en ese mismo programa. dichos datos deberan ser fijos.ej iva
¿Como se crean contantes en java ? utilizando la palabra clave final y a continuacion especificando el tipo de dato
que almacenara en su interior mas el nombre de la constante  ej  final Double a_pilgadas=2,54
================================================================================================================
OPERADORES ARITMETICOS EN JAVA
+ suma 
- resta
* multiplicacion
/ division

LOGICOS RACIONALES BOOLEANOS 
> mayor que
< menor que
<> mayor o menor que
!= distinto que
== igual que
&& y logico 

INCREMENTO Y DECREMENTO
++ incremento
-- decremento
+= n° incremento 
-= n° restar

CONCATENACION
+


*/

/*
================================================================================================================
DIRECTORIO PROYECTO
la carpeta src contiene el codigo java 
pero la bin contiene el bytecode que es lenguaje maquina que es 
el multiplataforma 
*/
//Syntaxis
public class Teoriajava {
//las clases se abren y cierran 
 
    public static void main(String[] args) {
        //los metodos 
        System.out.println("Relajante Valeriana"); 
        //toda sentencia termina en ;
        
        int a=5;//declaracion una sola linea
        int b;//declaracion sin valor no puede ir en sentencia hasta inicializar con valor
        b=7;//inicializa un valor
        int c=b+a;
        c++;
        System.out.println(c);
        final int d=5; //definicion de contante
        System.out.println(d);
        final double apulgadas=2.54;
        double cm=6;
        double resultado=cm/apulgadas;
        System.out.println("En"+cm+"Cm hay"+resultado+"pulgadas");
        
        /*
        CLASE MATH 
        CONTIENE MUESTRARIO DE METODOS QUE PERMITEN REALIZAR CALCULOS MATEMATICOS
        Math.sqrt(n):raiz cuadrada de un numero
        Math.pow(base,exponente); potencia de un numero base exponente son double 
        Math.sin(angulo).Math.cos(angulo).Math.tan(angulo)
        Math.round(decimal): redondeo de un numero 
        Math.PI: contante de pi
        */
        double raiz=Math.sqrt(9);//si fuese int al inicio daria error de typos de datos
        System.out.println(raiz);
        
        //REFUNDICIONES CONSISTE EN CONVERTIR UN TIPO DE DATO
        // EN OTRO EJ; INT RAZIZ=(INT)MATH.ROUND(NUM1);
        //                 RAZIZ=(INT) OCURRE AQUI DONDE DECIMON ENTRE () QUE TIPO DE DATO A REFUNDIR
        double num1=5.85;
        int resultad =(int)Math.round(num1);
        System.out.println(resultad);
        
        //
        double base=5;
        double exponente=3;
        int resulta =(int)Math.pow(base,exponente);
        System.out.println("El resultado de"+base+"elevado a"+exponente+"es"+resulta);
        
        /*
        String mi_nombre="Juan"; donde mi_nombre es un objeto (instancia,ejemplar) de la clase String
        ¿Que es instanciar una clase? es darle un nombre a un objeto donde almacenaremos un valor
        (instancia,ejemplar) es lo mismo.
        
        Métodos de la clase String para manipular cadenas de texto 
        length(); devuelve la longitud de una cadena de caracteres
        charAt(); devuelve la posicion de un caracter dentro de una cadena (las posiciones empiezan a contar de 0)
        mi_nombre.charAt(2)=a
        substring(x,y); devuelve una subcadena dentro de la cadena,siendo X el caracter a partir del cual se 
        trae el Y el n° de caracteres que se quieren extraer.
        equals(cadena) devuelve true si dos cadenas que se comparan son iguales y false si no lo son. Distingue
        mayusculas y minisculas.
        equalsIgnoreCase(cadena): igual que el anterior pero no tiene en cuenta minisculas y mayusculas
        */
        String nombre="Jasd";
        System.out.println("Su nombre es" +nombre);
        System.out.println("Su nombre es"+nombre.length()+"letras.");
        System.out.println("La primera letra de la variable es"+nombre.charAt(1));
        int Ultima_letra;
        Ultima_letra=nombre.length();
        System.out.println("La ultima letra es la"+nombre.charAt(Ultima_letra-1));
        
        //posiciones  0123456789
        String frase="Hot es un estupendo dia para aprender a programar en Java";
        String Resumen_frase=frase.substring(28,55);
        System.out.println(Resumen_frase);
        Resumen_frase=frase.substring(0,28)+"irnos a la playa y olvidarnos de todo...";
        System.out.println(Resumen_frase);
        //
        Resumen_frase=frase.substring(0,28)+"irnos a la playa y olvidarnos de todo..."+frase.substring(28,55);
        System.out.println(Resumen_frase);
        //================================================================================================================
        /*
        
        API DE JAVA
        Se deividen en paquetes para organizar las clases y evitar conflictos
        de nombres 
        PAQUETES  orden por carpetas con un conjuntos de clases 
        para tambien controlar la visibilidad de las clases
        CLASES PREFINIDAS 
        CLASES PROPIAS
        NOTA: SI NO PERTENECE A LA CLASE JAVA.LANG NO SE PUEDE INICIALIZAR
        COMO UN STRING ETC EH SCANNER SOLO POR MEDIO DE DIRECTIVAS IMPORT POR
        NO SER NATIVO
        IGU ENTRADA Y SALIDA DE DATOS
        */
        Scanner entrada=new Scanner(System.in);
        System.out.println("Introduce tu nombre, por favor");
        String nombre_usuario=entrada.nextLine();
        System.out.println("Introduce edad , por favor");
        byte edad=entrada.nextByte();
        System.out.println("Hola"+nombre_usuario+". tengo"+
        (edad)+"y el año entrante tendre"+(edad+1)+"años");
        entrada.close();
        
        /*Ej como proceder cuando tienes un metodo de tipo String
        para realizar operaciones con su contenido de no hacerse 
        al ser considerado String concatenara ej   18+1 String 181
        int 19
        */
        String usuario_nombre=JOptionPane.showInputDialog("Introduce Tu Nombre");
        String usuario_edad=JOptionPane.showInputDialog("Introduce Tu Edad");
        int  usuario_Edad=Integer.parseInt(usuario_edad);
        System.out.println("Hola"+usuario_nombre+"Tines"+
        usuario_Edad+" El Siguiente Año Tendras"+(usuario_Edad+1)+"Años");
        //
        double x=10000.0;
        System.out.printf("%1.2f", x,3);
        //INTEGRANDO
        String num0=JOptionPane.showInputDialog("Introduce Un Numero");
        double num=Double.parseDouble(num0);
        System.out.printf("La raiz de"+num+"es");
        System.out.printf("%1.2f", Math.sqrt(num));
        //
    //ESTRUCTURAS DE CONTROL DE FLUJO 
        
    Scanner entradas=new Scanner(System.in);
    System.out.println("Introduce tu edad, por favor");
    int Edad=entradas.nextInt();
    if(Edad>=18){System.out.println("Eres mayor de edad");
    }else{System.out.println("No Eres Mayor de Edad");}
    if (Edad>=17){System.out.println("Eres Adolescente");}
    else if (Edad<30){System.out.println("Eres Adulto");}
    else if (Edad<40){System.out.println("Eres Maduro");}
    else if (Edad<50){System.out.println("Eres Viejo");}
    else if (Edad<60){System.out.println("Eres Todo un Abuelo");}
    else {System.out.println("Tienes toda una vida por delante");}
    entradas.close();
    //
    Scanner entrad=new Scanner (System.in);
    System.out.println("Elige una opcion: \n1: Cuadrado \n2: Rectámgulo \n3: Triángulo \n4: Círculo");
    int figura=entrada.nextInt();
    switch(figura){
        case 1:
            int Ladoc=Integer.parseInt(JOptionPane.showInputDialog("Intrduce el lado"));
                System.out.println("El área del cuadrado es "+ Math.pow(Ladoc,2));
                  break;
        case 2: int Baser=Integer.parseInt(JOptionPane.showInputDialog("Intrduce la base"));
                int  Alturar=Integer.parseInt(JOptionPane.showInputDialog("Intrduce la altura"));
                System.out.println("El area del rectángulo es"+ Baser*Alturar);
                  break;
        case 3: 
            int Baset=Integer.parseInt(JOptionPane.showInputDialog("Intrduce la base"));
            int  Alturat=Integer.parseInt(JOptionPane.showInputDialog("Intrduce la altura"));
            System.out.println("El area del Triángulo es"+ (Baset*Alturat)/2);
                  break;
        case 4:
            int Radioc=Integer.parseInt(JOptionPane.showInputDialog("Intrduce el radio"));
            System.out.print("El area del Circulo es \n");
            System.out.printf("%1.2f",Math.PI*(Math.pow(Radioc,2)));//(Math.pi)=quiere decirPI 3,1416 *(Math.pow(radio,2))=quiere decir radio al cuadrado el exponenete es el numero elevado
                  break;
        default: //se comporta como un else
            System.out.println("La Opcion No es Correcta");
                  } 
    entrad.close();
    
    /*
    BUCLES INDETERMINADOS   no saber cuantas veces se repetiran las lineas de
    codigo que hay dentro del bucle sin saber si se repetiran 2 o 2000 veces
    °While
    °Do-While
    BUCLES DETERMINADOS son aquellos que observablemente sin necesidad de ejecurar
    un programa sabes cuantas veces se ejecutaran 
    °For
    °For-each
    */
    //VERIFICACION POR PASSWORD COMPARANDO CONTENIDO DE CLASE POR FORMULARIO PENDIENTE*
    String clave="Juan";
    String pass="";
    while(clave.equals(pass)==false){
    pass=JOptionPane.showInputDialog("Introduce la Contraseña Por Favor!!");
    if(clave.equals(pass)==false){System.out.println("Contrseña Incorrecta");
    }//else{System.out.println(" Acceso Permitido Esto pasa por colocar unb else donde no debe ir");}
    System.out.println("Contraseña Correcta");
    }
    //aleatorio pero  usando double da entre 0 y 1 pero 0,256 0,852 
    System.out.println(Math.random());
    /*para que no sea double y decimal seria..
    tendriamos que multiplicar por 100 lo  que hacemos es desplasar la coma decimal
    dos lugares hacia la derecha tantos numeros como 0 por la unidad que 
    estemos multiplicando si fuese 100 tiene 2 0 serian entonces 2 lugares
    hacia la derecha
    */
    System.out.println(Math.random()*100);
    /*
    siguiente objetivo eliminar lo decimal para que sea 
    entero como lo hacemos? se logra aplicando refundicion
    tambien se puede volver a un numero entero asi: Math.round(Math.random() * 100);
    */
    byte aleatorio=(byte)(Math.random()*100);
    System.out.println(aleatorio);
    //ahora hacemos un juego reutilizando lo declarado anteriormente
    Scanner entr=new Scanner(System.in);
    byte numero=-1;
    byte intentos=0;
    while (numero!=aleatorio){
    intentos ++;
    System.out.println("Introduce un número, por favor");
    numero=entr.nextByte();
    if (aleatorio<numero){System.out.println("Más Bajo");}
    else if(aleatorio>numero){System.out.println("Más Alto");}
    }System.out.print("Correcto Lo Lograste En "+intentos+"intentos");
    
    entr.close();
    
    //siempre cerrar las instancias creadas no nombres de variables objeto sino instancias new nombreinstancia.close();nombre.close();
    /*
    SU FINALIDAD IGUAL QUE EL WHILE PERO EVALUA LA CONDICION DESPUES DE EJECUTAR EL CODIGO EN SU INTERIOR DO WHILE
    asegura que aunque la condicion de entrada sea falsa se ejecute al menos una vez 
    que pasa si no entra a un bucle porque coincide con el 0 en aleatorio podriamos usar -1 pero si el valor inicial fuese
    0 obligatoriamente utilizariamos un do*/
    byte alea=(byte)(Math.random()*100);
    System.out.println(alea);
    //ahora hacemos un juego reutilizando lo declarado anteriormente
    Scanner entra=new Scanner(System.in);
    byte numer=0;
    byte intento=0;
    do {
    intento ++;
    System.out.println("Introduce un número, por favor");
    numer=entr.nextByte();
    if (alea<numer){System.out.println("Más Bajo");}
    else if(alea>numer){System.out.println("Más Alto");}
    }while(numer!=alea); 
    System.out.print("Correcto Lo Lograste En "+intento+"intentos");
    
    entra.close();
    //
    String genero="";
    do {genero=JOptionPane.showInputDialog("Ingrese tu Género(H/M)");
    }while(genero.equalsIgnoreCase("H")==false && genero.equalsIgnoreCase("M")==false);{
    int altura=Integer.parseInt(JOptionPane.showInputDialog("Introduce altura en cm"));
    int pesoideal=0;
    if (genero.equalsIgnoreCase("H")){pesoideal=altura-110;}
    else if (genero.equalsIgnoreCase("M")){pesoideal=altura-120;}
    System.out.println("Tu Peso Ideal Es "+pesoideal+"Kg");
    }
    //
    boolean arroba=false;
    String mail=JOptionPane.showInputDialog("");
    for(int i=0; i<mail.length();i++){
    if(mail.charAt(i)=='@'){arroba=true;}
    }
    if(arroba==true){System.out.println("Es Correcto");}
    else{System.out.println("No Es Correcto");}
    //
    //for que encuentra el factor de un numero
    int res=1;
    int nume=Integer.parseInt(JOptionPane.showInputDialog("Introduce un numero"));
    for (int i=nume;i>0;i--){res=res*i;} System.out.println("El factor de "+nume+"es"+res);
    
    /*MATRICES ARRAYS
    ¿Que es ? estructura de datos que contiene una coleccion de valores
    del mismo tipo
    ¿Para que? para almacenar valores que normalmente tienen una relacion
    entre si
    Sintaxis: 
    Declaracion:  tipodedato[]nombrematriz=new tipodedato[10];
    */
    int mi_matriz2 []=new int [5]; //sintaxys que funciona pero
    mi_matriz2[0]=5;
    mi_matriz2[1]=38;
    mi_matriz2[2]=-15;
    mi_matriz2[3]=92;
    mi_matriz2[4]=71;
    for (int i=0;i<5; i++){
    System.out.println("valor de posicion"+i+"="+mi_matriz2[i]);}
   ////////////////////////////////////// 
    int []mi_matriz=new int [5]; //sintaxys normal mente usada
    
    mi_matriz[0]=5;
    mi_matriz[1]=38;
    mi_matriz[2]=-15;
    mi_matriz[3]=92;
    mi_matriz[4]=71;
    for (int i=0;i<5; i++){
    System.out.println(mi_matriz[i]);}
    ///////////////otra manera de lo mismo//////////////////
    int [] mi_matriz3={5,38,-15,92,71};//a esto llaman declaracion simplificada de matriz o implicita
    for (int i=0;i<mi_matriz3.length; i++){
    System.out.println("valor de posicion"+i+"="+mi_matriz2[i]);}
    
    ///uso arrays 2 ///
    /*
    String [] paises=new String[8];
    paises[0]="españa";
    paises[1]="mexico";
    paises[2]="colombia";
    paises[3]="peru";
    paises[4]="chile";
    paises[5]="argentina";
    paises[6]="ecuador";
    paises[7]="venezuela";*/
    /*for (int i=0;i<paises.length; i++){
    System.out.println("Pais"+(i+1)+""+ paises[i]);*/
    //forma resumida for each 
    String[]paises={"españa","mexico","colombia","peru","chile","argentina","ecuador","venezuela"};
    for(int i=0;i<8;i++){paises[i]=JOptionPane.showInputDialog("Introduce pais"+(i+1));}//imprimiendo posiciones
    for (String elemento:paises){  
        System.out.println("pais"+elemento);}//imprimiendo todos los elementos
    //////otra forma///////
    int []matriz_aleatorios=new int [150];
    for (int i=0;i<matriz_aleatorios.length;i++){matriz_aleatorios[i]=(int)Math.round(Math.random()*100);}
    for (int numeros:matriz_aleatorios){System.out.println(numeros+"");}
    //Java Arrays III. Arrays bidimensionales. Vídeo 25/arrays 2 dimensiones  /
    //en java como no existen como tal arrays de 2 dimensiones sino como un array dentro de otro//
    int [][] matrix=new int [4][5];
    matrix [0][0]=15;   matrix [1][0]=10;   matrix [2][0]=19;   matrix [3][0]=-92;
    matrix [0][1]=21;   matrix [1][1]=52;   matrix [2][1]=-2;   matrix [3][1]=-13; 
    matrix [0][2]=18;   matrix [1][2]=17;   matrix [2][2]=-19;  matrix [3][2]=-13;
    matrix [0][3]=9;    matrix [1][3]=19;   matrix [2][3]=-17;  matrix [3][3]=-32;
    matrix [0][4]=15;   matrix [1][4]=7;    matrix [2][4]=-7;   matrix [3][4]=-41;
    
    for (int i=0;i<4;i++){System.out.println();
        for (int j = 0; j < 5; j++) {System.out.println(matrix[i][j]+"");
       }}
    //forma recorrer for each //
    int [][] matrixx={
        {10,15,18,19,21},
        {5,25,37,41,15},
        {7,19,32,14,90},
        {85,2,7,40,27}};
     for (int[]fila:matrixx){System.out.println();
     for (int z: fila){System.out.println(z+"");}}
     
     //Curso Java Arrays IV. Arrays bidimensionales II. Vídeo 26//
    double acumulado;
    double interes=0.10;
    double [][] saldo=new double[6][5];
    
    for (int i=0; i<6; i++){  //[6] array  posicion i  saldo
        saldo[i][0]=10000;//asigno posicion y valor fijo
        acumulado=10000;
    for (int j=1;j<5;j++){ // [5] array i posicion j acumulado * interes 
        acumulado=acumulado+(acumulado*interes);
        saldo[i][j]=acumulado;
    }
    interes=interes+0.01;//incrementar interes al salir del bucle
    }
    for (int z=0; z<6; z++){//separar espacios dimension 1 de 2
        System.out.println("");
        for (int h = 0; h < 5; h++) {//
            System.out.printf("%1.2f",saldo[z][h]);//decimaloes y la posicion un espacio con el valor saldo
            System.out.println(""); 
        }}
    //Curso Java. POO I. Vídeo 27//
    /*
    entender conceptos es diferenciador  entre quienes pretenden ir al grano picando codigo 
    se memoriza la sintaxys pero no entiende que esta haciendo entender los conceptos al ir aprendiendo
    sintaxys da un sentido que te permite saber que estas haciendo 
    
    VOCABULARIO DE LA POO
    |-°Clase
    |-°Objeto
    |-°Ejemplar de clase. Instancia de clase. Ejemplarizar una clase. Instanciar una clase
    |-°Modularización
    |-°Encapsulamiento / encapsulación
    |-°Herencia
    |-°Polimorfismo
    
    Clase donde se establecen caracteristicas en  comun del objeto ej auto
    Clase es un Modelo donde se redactan las características comunes
    de un grupo de objetos.  de 1 a n el uso
    
    Objeto creado a partir de una o varias clases
    ej una clase crear objeto pieza toroidal de caucho
    a crear una rueda que requiere mas de una clase.
    
    Objeto tiene propiedades (atributos)
    color 
    peso
    alto 
    largo
    
    tiene funcionalidades (¿qué es capaz de hacer?)
    arrancar
    frenar
    girar
    acelerar
    
    Objeto Acceder a propiedades desde Código
    Renault.color="rojo";
    Renault.peso=1500;      sintaxys nombredelclase.atributo=valor
    Renault.ancho=2000;
    
    Objeto Accediendo a funcionalidades del objeto desde Código
    Renault.arranca();
    Renault.frena();       sintaxys nombredeclase.método();
    Renault.gira();
    Renault.acelera();
    
    atributo o propiedad es lo mismo   funcionalidad o metodo es lo mismo en una clase
    */
    
    }}
