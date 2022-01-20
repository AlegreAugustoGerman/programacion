/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Persistencia;

import Logica.casa;
import Logica.persona;
import java.util.logging.Level;
import java.util.logging.Logger;
/**
 *
 * @author l2k49
 */
public class ControladorPersistencia {
personaJpaController persJPA=new personaJpaController();
casaJpaController  casaJPA=new casaJpaController();


    public void crearPersona(persona p){
        try {
            persJPA.create(p);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public persona buscarCliente(int dni){
        persona p = persJPA.findpersona(dni);
        return p;
    }
    
     public void crearCasa(casa c){
        try {
            casaJPA.create(c);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
     }  
     
         public casa buscarCasa(int numerocasa){
        casa c = casaJPA.findcasa(numerocasa);
        return c;
    }
}
