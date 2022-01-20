/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package JAplicacionesGraficasSwing;
import javax.swing.*;
import java.awt.*;
/**
 *
 * @author l2k49
 */
public class cEscribiendoEnMarco {
    public static void main3(String[] args){
    MarcoConTexto mimarco=new MarcoConTexto();
    mimarco.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}

class MarcoConTexto extends JFrame{
public MarcoConTexto(){
    setVisible(true);
    setSize(600,450);
    setLocation(400,200);
    setTitle ("orimer texto");
    
    Lamina milamina=new Lamina();
    add(milamina);
    }
}

class Lamina extends JPanel {
public void paintComponent(Graphics g){
    super.paintComponent(g);
    g.drawString("Estamos aprendiendo Swing", 100, 100);
    }
}