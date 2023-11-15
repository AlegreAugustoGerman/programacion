/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IEjercicioInterfaceHerenciaEnlazeDinamico;

/**
 *
 * @author l2k49
 */
public class BTierra extends ATerrenal{
    public BTierra(String nombre, double peso, double valor, String descripcion,
    String color, double alto, double ancho, double largo){
        super(nombre,peso,valor,descripcion,color,alto,ancho,largo);}
    
    public String Descripcion(){return"";}
    
}
