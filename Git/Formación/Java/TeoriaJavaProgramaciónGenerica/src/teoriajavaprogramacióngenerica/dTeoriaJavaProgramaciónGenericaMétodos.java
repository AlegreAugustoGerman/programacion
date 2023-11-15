/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package teoriajavaprogramacióngenerica;

import teoriajavaprogramacióngenerica.bTeoriaProgramaciónGenericaArrayLista.Empleado;

/**
 *
 * @author l2k49
 */
public class dTeoriaJavaProgramaciónGenericaMétodos {
    public static void main (String[] args){
        String nombres[]={"Jose","Maria","Pepe"};
        String elementos=MisMatrices.getElemento(nombres);
        System.out.println(elementos);
        
        Empleado listaEmpleado[]={new Empleado("Empleado1",1,1),
        new Empleado("Empleado2",2,2),new Empleado("Empleado3",3,3),
        new Empleado("Empleado4",4,4),new Empleado("Empleado5",5,5)};
    
    //    System.out.println(MisMatrices.getElemento(listaEmpleado));
    }
}
/*    class MisMatrices {
        //declarando metodo generico
    public static <T> String getElemento(T[]a){
    return "El array tiene : "+a.length+" elemento";
    } 
    
}*/

/*
La diferencia entre un método estático y un método normal
es que el método estático se llama a través de su nombre 
de clase, sin que se cree ningún objeto de esa clase

a) static: los atributos miembros de una clase pueden
ser atributos de clase o atributos de instancia; se dice
que son atributos de clase si se usa la palabra clave static:
en ese caso la variable es única para todas las instancias
(objetos) de la clase (ocupa un único lugar en memoria). 
A veces a las variables de clase se les llama variables 
estáticas. Si no se usa static, el sistema crea un lugar
nuevo para esa variable con cada instancia (la variable 
es diferente para cada objeto). En el caso de una constante
no tiene sentido crear un nuevo lugar de memoria por cada objeto
de una clase que se cree. Por ello es adecuado el uso de la palabra 
clave static. Cuando usamos “static final” se dice que creamos una
constante de clase, un atributo común a todos los objetos de esa clase.

 metodo generico 
<> se indica con corchetes angulares y el argumento de tipo una letra 
                        
                     siempre String por el return
TipoAcc AtrCla TipoDat  TipoRetorna nombreGet (PasarArrayTipo[]NombreRecibe)
public static <T> String getElemento(T[]a)
si recibiese un string en lugar de T[] seria String[]
acceso 
*/

    class MisMatrices {
   //declarando metodo generico con interface pero en 

        
  //              <T tipoArgumento>  
  //como necesito que me devuelva un elemento del array al compararse entre si 
    //            <>en lugar del String  T       
    public static <T extends Comparable> T getElemento(T[]a){
               //<tipo  interface> tipo
        if (a==null||a.length==0){//si el array esta nulo o vacio
    return null;  // devuelver null
    } 
    T elementoMenor=a[0];
    for(int i=1;i<a.length;i++){
        if(elementoMenor.compareTo(a[i])>0){elementoMenor=a[i];
        
        }
    
    }
   return elementoMenor; 
    } 
     
}   
    
    
