/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IEjercicioInterfaceHerenciaEnlazeDinamico.Personajes;

/**
 *
 * @author l2k49
 */    
 public interface ComportamientosHablar{
     //según suerte tipos de conversaciones para establecer un animo y ambiente
     //temporizador para soltar_Comentario  y con porcentaje de suerte para que un npc te cuente un chiste
 String Tomar_decisionesHistoria(String decision);
 String Soltar_Comentario(String hablar);
 String Contar_Chistes(String hablar);
 }
    

