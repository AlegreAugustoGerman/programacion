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
/*
         CLASES ADAPTADORAS (ADAPTER CLASSES)
 KeyAdapter                      WindowsAdapter                    MouseAdapter
                                        |
                                        |
                 WindowFocusListener<---|---> WindowStateListener
                      WindowListener<---|---> EventListener
*/
public class cMarcoEventosClasesAdaptadorasDeInterfaces {
public static void main(String[] args){
    
        MarcoEventoAdapter mimarco=new MarcoEventoAdapter();
        mimarco.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                                             //.finaliza el programa
        MarcoEventoAdapter mimarco1=new MarcoEventoAdapter();
        mimarco1.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
                                              //.cierra la ventana
                                              
        mimarco.setTitle("ventana 1");
        mimarco.setBounds(300,300,500,350);
        
        
        mimarco1.setTitle("ventana 2");
        mimarco1.setBounds(900,300,500,350);
    }
}
class MarcoEventoAdapter extends JFrame{
public MarcoEventoAdapter(){
    //todo lo referente a tamaños titulos logos etc estan en el constructor
    //para que no sean iguales todas las ventanas algunas caracteristicas estan comentadas
    //setTitle("Ventanas Eventos");
    //setBounds(300,300,500,350);
    setVisible(true);
    
    //M_Ventana oyente_ventana=new M_Ventana();
    //addWindowListener(oyente_ventana);
    
    addWindowListener(new M_VentanaAdapter());//simplifico 2 lineas anteriores
    
    }
}
//en lugar de implement windowListener  para no tener que declarar 
//obligadamente todo metodo abstracto WindowAdapter declaro y desarrollo
//solo los que necesite
class M_VentanaAdapter extends WindowAdapter{
public void windowClosed(WindowEvent e){
    System.out.println("Ventana Cerrada");
}
public void windowIconified(WindowEvent e){
    System.out.println("Ventana minimizada");}
public void windowOpened(WindowEvent e){
    System.out.println("Ventana abierta");
}
}
