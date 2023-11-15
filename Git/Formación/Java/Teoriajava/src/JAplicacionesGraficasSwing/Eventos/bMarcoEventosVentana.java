/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package JAplicacionesGraficasSwing.Eventos;
import java.awt.*;
import javax.swing.*;
import java.awt.event.*;

/**
 *
 * @author l2k49
 */

/*               EVEMTOS DE VENTANA 
primer problema la interfaz te obliga a declarar los 7 aunque 
realmente solo necesites uno 

WindowListener
      |--------->windowActivated(WindowEvent e)---->
      |--------->windowClosed(WindowEvent e)------->
      |--------->windowClosing(WindowEvent e)------>
      |--------->windowDeactivated(WindowEvent e)->usuario desactiva una ventana
      |--------->windowDeiconfied(WindowEvent e)--->usuario
      |--------->windowIconified(WindowEvent e)---->usuaario minimiza este metodo se ejecuta
      |--------->windowOpened(WindowEvent e)------->
*/
public class bMarcoEventosVentana {
    public static void main(String[] args){
        MarcoEvento mimarco=new MarcoEvento();
        mimarco.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                                             //.finaliza el programa
        MarcoEvento mimarco1=new MarcoEvento();
        mimarco1.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
                                              //.cierra la ventana
                                              
        mimarco.setTitle("ventana 1");
        mimarco.setBounds(300,300,500,350);
        
        
        mimarco1.setTitle("ventana 2");
        mimarco1.setBounds(900,300,500,350);
    }
}
class MarcoEvento extends JFrame{
public MarcoEvento(){
    //todo lo referente a tamaños titulos logos etc estan en el constructor
    //para que no sean iguales todas las ventanas algunas caracteristicas estan comentadas
    //setTitle("Ventanas Eventos");
    //setBounds(300,300,500,350);
    setVisible(true);
    
    M_Ventana oyente_ventana=new M_Ventana();
    addWindowListener(oyente_ventana);
    
    }
}

class M_Ventana implements WindowListener{
public void windowActivated(WindowEvent e){
    System.out.println("Ventana Activada");
}
public void windowClosed(WindowEvent e){
    System.out.println("Ventana Cerrada");
}
public void windowClosing(WindowEvent e){
    System.out.println("Cerrando Ventana");
}
public void windowDeactivated(WindowEvent e){
    System.out.println("Ventana Desactivada");
}
public void windowDeiconified(WindowEvent e){
    System.out.println("Ventana Restaurada");
}
public void windowIconified(WindowEvent e){
    System.out.println("Ventana minimizada");}
public void windowOpened(WindowEvent e){
    System.out.println("Ventana abierta");
}
}