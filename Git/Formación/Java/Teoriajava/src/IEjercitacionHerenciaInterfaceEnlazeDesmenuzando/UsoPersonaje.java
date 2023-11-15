/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IEjercitacionHerenciaInterfaceEnlazeDesmenuzando;

import IEjercicioInterfaceHerenciaEnlazeDinamico.ATerrenal;

/**
 *
 * @author l2k49
 */
public class UsoPersonaje {
    public static void main(String[]args){
    Personaje person=new Personaje("Personaje1",12.0,12.0,"un personaje de algún lugar","blanco",15.0,4.0,2.0,1,1,1,2,2,2,2);
    Enemigo enemi=new Enemigo("Enemigo",12.0,12.0,"un enemigo de algún lugar","algo",15.0,4.0,2.0,1,1,1,2,2,2,2);
    
    //un array de este tipo solo contendria objetos ATerrenal al ser el inicio de la herencia distinto es con personaje que si podria contener ATerrenal
    ATerrenal[] Objetos=new ATerrenal[6];
    //si en algún momentpo se usara asi y diera error  ver si declare  public static void main(String[]args){
    Personaje[] habitante=new Personaje[6];
    habitante[0]=new Personaje("Personaje0",12.0,12.0,"un personaje de algún lugar","blanco",15.0,4.0,2.0,1,1,1,2,2,2,2);
    habitante[1]=enemi;//polimorfismo
    habitante[2]=person;//asignar objeto creado a un lugar 
    
   //creo un nuevo enemigo
   habitante[3]=new Enemigo("Enemigo3",12.0,12.0,"un enemigo de algún lugar","algo",15.0,4.0,2.0,1,1,1,2,2,2,2);//polimorfismo
           
   //refundiendo objeto de Enemigo a Aliado
   Personaje Aliado=(Personaje) habitante[3]; 
   
   System.out.println(" refundicion exitosa: "+habitante[3].Descripcion());
   //for (Personaje p: habitante; p++){
   for (int i=0;i<6;i++){//no imprime lo refundido entonces imprimo antes del for o podria agregar un condificonal
        System.out.println("La Descricion de los Habitantes es : "+habitante[i].Descripcion());}
        
          

   
   
 
    
    
    
    
    } 
}
