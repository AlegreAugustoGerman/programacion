/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package JAplicacionesGraficasSwing;
import javax.swing.*;
import java.awt.*;
import java.io.File;
import java.io.IOException;
import javax.imageio.*;
/**
 *
 * @author l2k49
 */
public class dAgregandoImagenes {
    public static void main4(String[] args){
        
    MarcoConImagen mimarco=new MarcoConImagen();
    mimarco.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        
    }
    
}
class MarcoConImagen extends JFrame{
public MarcoConImagen(){
    setVisible(true);
    setSize(600,450);
    setLocation(500,600);
    setTitle("Marco Con Imagenes");
    
    Lamina1 milamina=new Lamina1();
    add(milamina);
    }
}

class Lamina1 extends JPanel {
public void paintComponent(Graphics g){
    super.paintComponent(g);
    File miimagen=new File("C:\\Users\\l2k49.l2k49-PC\\Documents\\NetBeansProjects\\Teoriajava\\src\\JAplicacionesGraficasSwing\\k.png");
            try{
            imagen=ImageIO.read(miimagen);}catch(IOException e){
                    System.out.println("No Se Encuentra la Imagen");}    
            }
            private Image imagen;
    }
    
