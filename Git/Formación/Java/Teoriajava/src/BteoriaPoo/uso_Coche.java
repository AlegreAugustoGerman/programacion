/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BteoriaPoo;

import javax.swing.JOptionPane;

/**
 *
 * @author l2k49
 */
public class uso_Coche {
public static void main(String[]args){
coche Renault=new coche(); //esta linea busca la clase coche la encucnetra y crea un objeto crea llamar o ejecuta al constructor entonces desplaza el flujo de ejecucion del programa al constructor sabiendo que informacion debe contener
//clase nombreobjeto=instanciar constructor de clase();
//nombre de clase coche nombreobjeto Renault =new intancia  constructor clase coche(); 
//en tonces puedo decir clase coche ranault instancia de coche y el renglon de codigo es ejemplarizar una clase

                      //System.out.println("Este coche tiene "+Renault.ruedas+"ruedas");
    
//CUANDO SE DA LA INCONGRUENCIA EN VIOLACOIÓN DE DATOS 
//CUANDO NO SE ENCAPSULA  QUE SERÍA ESA VIOLACIÓN?
//PODER CAMBIAR UN ATRIBUTO,VALOR DESDE OTRA CLASE
//CUANDO SOLO DEBERÍA SER POSIBLE HACERLO POR METODOS EN ESA CLASE
//PORQUE TENGO UN CONSTRUCTOR ENTONCES SI PUEDO VOLVER A CAMBIAR PIERDE
//EL SENTIDO SI PUEDO HACER LO SIGUIENTE
                    //Renault.ruedas=1;//CAMBIAR DATOS CLASE COCHE DESDE uso_Coche
                    //System.out.println("Este coche tiene "+Renault.ruedas+"ruedas");
//PARA EVITAR ESTO DEBERIA AGREGAR UN MODIFICADOR DE ACCESO EN LA CLASE 
//COCHE QUE SERÍA AGREGARLE PRIVATE ANTES DEL TIPO DE DATO
//ESTO IMPIDE QUE SEA VISIBLE EN UNA CLASE DIFERENTE SOLO ES VISIBLE
// Y MODIFICABLE DESDE LA OTRA CLASE
                    //Renault.motor=1;//CAMBIAR DATOS CLASE COCHE DESDE uso_Coche
                    //System.out.println("Este coche tiene "+Renault.motor+"motor");
//entonces java detecta y lanza el error por intentar  modificar o acceder
//a los datos que contenga
//al estar encapsulada no se puede modificar o accederfuera de la clase
//LO QUE CONECTA LAS CLASES AL ESTAR MODULARIZADA PERMITIENDO ACCEDER
//EN PROGRAMACIÓN SON METODOS QUE PERMITEN FORMAR UNA INTERACCION
//para eso están los metodos QUE AGREGUEN COMPORTAMIENTOS getter y setter 

//|------------------------GETTER-------------------------------------|//    
    System.out.println("El auto tiene"+Renault.dato_largo()+"metros");
//|-------------------------SETTER------------------------------------|//    
 coche micoche=new coche();
 micoche.establece_color();
    System.out.println("Es Color"+micoche.obtener_color()+"");
    
//|--------------------------PARAMETRO--------------------------------|//
                        //micoche.establece_cant_ruedas(0);
/*automaticamente net beans sabe que le debo pasar un parametro y el tipo
de dato*/
    
    //enviando parametro
    micoche.configura_asientos("si");
    //imprimiendo por clase metodo lo recibido por parametro
    System.out.println(micoche.dato_asientos());
//|-----------------------GETTER SETTER Y PARAMETRO---------------------|//    
    micoche.configura_climatizador(JOptionPane.showInputDialog("Introduce si tiene climatizador"));
    System.out.println(micoche.dato_climatizador());
    
        System.out.println("El precio final del coche es : "
        +micoche.precio_coche());
        //no sumara lo declarado en la clase porque esta con == cuando en java para comparar se usa equals
}}
