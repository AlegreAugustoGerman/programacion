/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package JAplicacionesGraficasSwing.Eventos.ControlandoEventos;
import java.awt.*;
import javax.swing.*;
import java.awt.event.*;
import java.awt.event.KeyListener;
/**
 *
 * @author l2k49
 */

/*
        EVENTOS DE TECLADO
KeyListener    //interfase     clase adaptadora  KeyAdapter
     |
keyPressed(KeyEvent)--> se activa al presionar la tecla
     |
keyReleased(KeyEvent)-> se activa al soltar la tecla 
     |
keyTyped(KeyEvent)---->se activa cuando seceden los 2 anteriores


*/
public class bControladoEventosDeTeclado {
    public static void main(String[] args){
        MarcoEventoTeclado mimarco=new MarcoEventoTeclado();
        mimarco.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}
class MarcoEventoTeclado extends JFrame{
public MarcoEventoTeclado(){
    setVisible(true);
    setBounds(700,300,600,450);
    
    
    EventoDeTeclado tecla=new EventoDeTeclado();
    addKeyListener(tecla);
    }
}

class EventoDeTeclado implements KeyListener{

    @Override
    public void keyTyped(KeyEvent e) {
    int codigo=e.getKeyCode();
        System.out.println(codigo);
    }

    @Override
    public void keyPressed(KeyEvent e) {

    }

    @Override
    public void keyReleased(KeyEvent e) {
        char letra=e.getKeyChar();
        System.out.println(letra);
    }

}