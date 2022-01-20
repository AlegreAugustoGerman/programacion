/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package JAplicacionesGraficasSwing.Eventos.ControlandoEventos;
import java.awt.*;
import javax.swing.*;
import java.awt.event.*;
/**
 *
 * @author l2k49
 */
public class aControlandoEstadoVentana {
    public static void main(String[] args){
    MarcoEventoControlVentana mimarco=new MarcoEventoControlVentana();
    mimarco.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

    }
}
class MarcoEventoControlVentana extends JFrame{
public MarcoEventoControlVentana(){
    setVisible(true);
    setBounds(300,300,500,350);
    
    CambiaEstado nuevo_estado=new CambiaEstado();
    addWindowStateListener(nuevo_estado);
    }
}
class CambiaEstado implements WindowStateListener{
public void windowStateChanged(WindowEvent e){
    System.out.println("La Ventana ha cambiado de estado");
   // System.out.print(e.getNewState());
   if(e.getNewState()==Frame.MAXIMIZED_BOTH){
       System.out.println("La Ventana está a pantalla completa");
   }else if(e.getNewState()==Frame.MAXIMIZED_HORIZ){
       System.out.println("La Ventana está Horizontal completa");
   }else if(e.getNewState()==Frame.MAXIMIZED_VERT){
       System.out.println("La Ventana está Horizontal completa");
   }else if (e.getNewState()==Frame.NORMAL){
       System.out.println("La pantalla no realizo ninguna modificacion");
   }else if (e.getNewState()==Frame.ICONIFIED){
       System.out.println("La Ventana está minimizada");
   }

}
}