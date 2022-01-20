/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CteoriaPoo2Herencia;

/**
 *
 * @author l2k49
 */
public class Furgoneta extends BteoriaPoo.coche{//asi aplico herencia con la palabra reservada extends
    //indico la clase de la que hereda que es coche pero al estar en otro paquete nombre de paquete . nombre de clase
    
    //extends teoriaPoo.coche pasaria a ser una superclase y class Furgoneta en subclase
    //JAVA NO ADMITE HERENCIA MULTIPLE 
    
    //DECLARAMOS CARACTERISTICAS QUE TIENE UNA FURGONETA QUE NO TIENE UN COCHE
    private int capacidad_carga;
    private int plazas_extra;
    
    public Furgoneta(int plazas_extra, int capacidad_carga){//constructor tipo furgoneta
    super();//al iniciar el constructor y iniciar la palabra reservada super  para crear un objeto tipo furgoneta
    //recibe el estado inicial de coche lo que contenga getter setter constructor por lo que luego se le debera 
    //pasar con el operador new plazas_extra,  capacidad_carga
    this.capacidad_carga=capacidad_carga;
    this.plazas_extra=plazas_extra;
    }
    
    public String dimeDatosFurgoneta(){
    return"la capacidad de carga es : "+capacidad_carga+"y las plazas extras son :"+plazas_extra;}
    
    /*|------------HERENCIA---------------|
    DISEÑO CORRECTO DE HERENCIA
    LA REGLA "ES UN..." QUE??
              VEHICULO
    ______________|_____________
      |       |       |      |
    COCHE FURGONETA CAMIÓN MOTO
    */
    
}
