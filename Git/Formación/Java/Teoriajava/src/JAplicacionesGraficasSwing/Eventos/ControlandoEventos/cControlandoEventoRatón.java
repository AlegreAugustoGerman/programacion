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
        Eventos de Ratón
                            interfaz
                            MouseListener------------->MouseAdapter
metodos      tipoobjeto  nombre                |
mouseClicked(MouseEvent e)<--------->mouseExited(MouseEvent e)
            |                   |
            |                   |
mouseEntered(MouseEvent e)<--------->mousePressed(MouseEvent e)
                                |
                                |---->mouseReleased(MouseEvent e)


Eventos de ratón

                    MouseEvent
BUTTON1_DOWN_MASK<--------------->getX() permite conocer posicion exacta del raton en un momento determonado
                        |
                        |-------->getY() permite conocer posicion exacta del raton en un momento determinado
                        |
BUTTON_DOWN_MASK<-------|
                        |
                     |  |-------->getModifiersEx() permite conocer si usamos click izquierdo detecho o rueda del raton 
BUTTON3_DOWN_MASK<--------------->getClickCount() permite contar cuantos click a echo el usuario

*/
public class cControlandoEventoRatón {
    public static void main (String[] args){
MarcoRaton mimarco=new MarcoRaton();
mimarco.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

MarcoRaton1 mimarco1=new MarcoRaton1();
mimarco1.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        
    }
}

class MarcoRaton extends JFrame {
public MarcoRaton(){
    setVisible(true);
    setBounds(700,300,600,450);
    
    EventosDelRatón  EventoRaton=new EventosDelRatón();
    addMouseListener(EventoRaton);

    
    
    }
}
class MarcoRaton1 extends JFrame {
public MarcoRaton1 (){
    setVisible(true);
    setBounds(200,300,600,450);
    
     EventosDelRatónMotionListener EventoRaton1=new EventosDelRatónMotionListener();
    addMouseMotionListener((MouseMotionListener) EventoRaton1);
    }
}
class EventosDelRatón implements MouseListener{

    public void mouseClicked(MouseEvent e) {
        System.out.println("has hecho un click");
    }

    public void mousePressed(MouseEvent e) {
        System.out.println("Acabas de presionar una tecla");
        System.out.println("Coordenada x: "+e.getX()+" Coordenada y: "+e.getY()+" ");
        System.out.println("Clicks hechos : "+e.getClickCount());
        
        if(e.getModifiersEx()==MouseEvent.BUTTON1_DOWN_MASK){
            System.out.println("has pulsado el boton izquierdo");}
        else if(e.getModifiersEx()==MouseEvent.BUTTON2_DOWN_MASK){
            System.out.println("has pulsado la rueda del raton");}
        else if(e.getModifiersEx()==MouseEvent.BUTTON3_DOWN_MASK){
            System.out.println("has pulsado el boton derecho");}
    }

    public void mouseReleased(MouseEvent e) {
        System.out.println("Aacabas de levantar el dedo de la tecla");
    }

    public void mouseEntered(MouseEvent e) {
        System.out.println("Acabas de entrar");
    }

    public void mouseExited(MouseEvent e) {
        System.out.println("Acabas de salir");
    }
    
}

class EventosDelRatónMotionListener implements MouseMotionListener{

    
    public void mouseDragged(MouseEvent e) {
        System.out.println("Estas Aarrastrando el Mouse: "+e.getX()+"del eje X");
    }

    
    public void mouseMoved(MouseEvent e) {
        System.out.println("Estas Moviendo el Mouse");
    }
}