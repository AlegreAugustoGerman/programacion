/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package HInterfacesClasesInternas;

/**
 *
 * @author l2k49
 */
public class InterfacesClasesInternas {
/*
 ¿QUE SON LAS INTERFACES? son un conjunto de (metodos)directrices
  que deben cumplir las clases como en clases abstractas por aquellas clases
  que heredaban de la abstracta  un metodo abstracto que obligadamente debian
  sobreescribir entonces si una interfaz tiene en su interior 2 metodos
  la clase que utilize implemente la interfaz tambien tenga esos metodos 
  ¿QUE HACEN LAS INTERFACES ?entonces establecen comportamientos a cumplir 
  por las clases que la implementan y esos comportamientos establecidos 
  es por lo metódos que contiene la interface en cuestion 
  |CARACTERISTICAS INTERFACE| DENOMINADAS (API)  
 tanto predefinidas en la api de java| como propias creadas
  
                |PRINCIPAL CARACTERISITICA|
  interfaz--->soloPuedenContener----->metodosAbstractos  
                     |--------------->Constantes
    NO PUEDEN TENER METODOS IMEPLEMENTADOS CONSTRUIDOS VARIABLES 
    SOLO ADMITE METODOS ABSTRACTOS
    
    °SE ALMACENAN EN UN FICHERO.CLASS
    °NO SE PUEDEN INSTANCIAR (NO USO DE NEW)
    °TODOS SUS MÉTODOS SON PUBLIC Y ABSTRACT NO SE IMPLEMENTAN
    °NO TIENEN VARIABLES. SI CONSTANTES
    
    
    ¿Y ESTO NO LO HACIAN YA CLAS CLASES ABSTRACTAS? SI PERO...
    PROBLEMA HERENCIA SIMPLE.
    
    ClaseEmpleado
         |               |-------------->Interfaz1
    ClaseJefatura--------|-------------->Interfaz2
    
    |si quiero dar un comportamiento especial estar obligados implementar
    |2 metodos de obligado cumplimiento solo en la clase jefatura no se 
    |podria hacer con una clase abstracta porque seria requerido en la
    |cadena de herencias y solo queremos afectar a una clase
    
    CONSULTANDO LA API DE JAVA TODAS LAS QUE SE VEAN EN CURSIVA SON INTERFACES INCLUIDAS
    IMPLEMETNRAR UNA INTERFACE VIDEO 49
*/    
}
