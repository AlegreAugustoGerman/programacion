/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package FmodificadoresDeAcceso;

/**
 *
 * @author l2k49
 */
public class ModificadoresDeAcceso {
/*
MODIFICADOR----CLASE---PACKAGE----SUBCLASE----TODOS|
Public          si       si          si         si|  acceso de cualquier lado 
Protected       si       si          si         no| parecido a por defecto pero con una diferencia accesible en clase y dentro del packete pero por fuera del packete solo es accesible por sus subclases herencia.
Private         si       no          no         no| accesible desde clase propia declarada pero no otro sitio
Por Defecto     si       si          no         no| accesible desde clase y subclase siempre este en el mismo paquete 

private delante de metodos solo cuando este metodo participe en el funcionamiento de otros dentro de una misma
clase ejemplo si un objeto necesitara para su funcionamiento otro objeto mas pequeño que esta en su interior
que no necesita ser accedido desde fuera si no que solo es para funcionamiento interno-    
    |--------------------------Objet llamado superclase cosmica----------------------------------------------|
    siempre sea clase que sea heredan de la clase objet creadas por nosotros, nativas,etc esta en la cuspide
    de la gerarquia java por eso siempre veremos sus metodos con cualquier objeto 
    es como si tuvieras tu clase extends objet se da automaticamente  entonces al usar una instancia
    de cualquier clase    ejemplo     
    miClase nombreclase=new miClase();
    miClase.|equals
            |hashCode
            |toString 
            |etc....
*/
    
    
}
