/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package JAplicacionesGraficasSwing;
import java.awt.Frame;
import javax.swing.*;

/**
 *
 * @author l2k49
 */
public class aCreandoMarcos {
public static void main(String[] args){
miMarco marco1=new miMarco();
marco1.setVisible(true);
marco1.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

miMarco2 marco2=new miMarco2();
marco2.setVisible(true);
marco2.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

miMarco3 marco3=new miMarco3();
marco3.setVisible(true);
marco3.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

    
    }
}

class miMarco extends JFrame{
public miMarco(){setSize(500,300);  
    
    }
}

class miMarco2 extends JFrame{
              // {setLocation(500,300);    
public miMarco2(){setBounds(500,300,250,250); setResizable(false);}}
//500 x  300 y  250 ancho  250 alto         ; false el usuario no podra redimensionar ventanas del programa


class miMarco3 extends JFrame{
public miMarco3(){setExtendedState(Frame.MAXIMIZED_BOTH);
//                                      .toda la pantalla del ordenador 
setTitle("MI VENTANA");}//colocar un titulo al cuadro 
}