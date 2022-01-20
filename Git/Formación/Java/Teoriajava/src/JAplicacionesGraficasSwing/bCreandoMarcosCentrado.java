/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package JAplicacionesGraficasSwing;
import java.awt.Toolkit;
import javax.swing.*;
import java.awt.*;
/**
 *
 * @author l2k49
 */
/*CLASE Toolkit
almacén de multitud de métodos que se 
comunican cpn el sistema huésped de ventanas*/

//centrar pantalla en cualquier SO en cual ejecute
public class bCreandoMarcosCentrado {
    public static void main(String[] args){
        MarcoCentrado mimarco=new MarcoCentrado();
        mimarco.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        mimarco.setVisible(true);
    
    }
}
class MarcoCentrado extends JFrame{
public MarcoCentrado(){
    //constructor de la clase
    
    //traigo la resolución
    Toolkit miPantalla=Toolkit.getDefaultToolkit();
    //captura la resolución de pantalla
    Dimension tamanoPantalla=miPantalla.getScreenSize();
    //obtengo el alto y ancho
    int alturaPantalla=tamanoPantalla.height;
    int anchoPantalla=tamanoPantalla.width;
    //divido la pantalla
    setSize(anchoPantalla/2, alturaPantalla/2);
    //posiciono la pantalla
    setLocation(anchoPantalla/4, alturaPantalla/4);
    //asignando titulo
    setTitle("Ventana Centrada");
    //selecciono icono
    Image miIcono=miPantalla.getImage("C:\\Users\\l2k49.l2k49-PC\\Documents\\NetBeansProjects\\Teoriajava\\src\\JAplicacionesGraficasSwing\\k.png");
    //asigno icono
    setIconImage(miIcono);
    }
}
