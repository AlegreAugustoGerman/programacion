/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IEjercitacionHerenciaInterfaceEnlazeDesmenuzando;

/**
 *
 * @author l2k49
 */
public class Enemigo extends Personaje{

    public Enemigo(String nombre, double peso, double valor, String descripcion, String color, 
            double alto, double ancho, double largo, int cabeza, int cuello, int cuerpo,
            int brazos, int manos, int piernas, int pies) {
        super(nombre, peso, valor, descripcion, color, alto, ancho, largo, cabeza, cuello, cuerpo, brazos, manos, piernas, pies);
        
        
    }
    
    
     
    public String Descripcion (){return" tine de nombre: "+nombre+
            " tine de peso: "+peso+" tine de valor: "+valor+
            " tine de descripcion: "+descripcion+" tine de color: "+color+
            " tine de alto: "+alto+" tine de ancho: "+ancho+
            " tine de largo: "+largo+" tine : "+cabeza+"cabeza"+
            " tiene: "+cuello+"cuello" +" tiene: "+cuerpo+"cuerpo"
            +" tiene: "+brazos+"brazos"+" tiene: "+manos+"manos"+
            " tiene: "+piernas+"piernas"+" tiene: "+pies+"pies";}

}
