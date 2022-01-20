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
    EVENTOS:FUNETES Y OYENTES
          |---->¿QUÉ DESENCADENA LA ACCIÓN?----->ObjetoEvento------>Click
3 FACTORES|---->¿QUIÉN DESENCADENA LA ACCIÓN?--->ObjetoFuente------>Botón
          |---->¿QUIÉN RECIBE LA ACCIÓN?-------->ObjetoListener---->Objeto LaminaBotones
*/
public class aMarcoFondoCambiarColorBoton {
  public static void main(String[] args){
  MarcoBotones mimarco=new MarcoBotones();
  mimarco.setVisible(true);
  mimarco.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
      
  } 
}

class MarcoBotones extends JFrame{
public MarcoBotones(){
    setTitle("Botones y Eventos");
    setBounds (700,300,500,300);
    LaminaBotones milamina=new LaminaBotones();
    add(milamina);
    }
}

class LaminaBotones extends JPanel implements ActionListener{
JButton botonAzul=new JButton("Azul");
JButton botonAmarillo=new JButton("Amarillo");
JButton botonRojo=new JButton("Rojo");
/*
tipoBoton nombre=instancia tipoBoton ("nombre");
que hacemos un boton con un nombre asignamos un nombre
como referencia al nombre de la instancia
*/


public LaminaBotones(){
    add(botonAzul);
    add(botonAmarillo);
    add(botonRojo);
    botonAzul.addActionListener(this);//clase lamina
    botonAmarillo.addActionListener(this);//al suceder este evento click
    botonRojo.addActionListener(this);}//entonces se crea un objeto tipo ActionEvent
/*
    nombreBoton.tipoAccionEspera (ObjetoQueEsperaEsaAcción)
                este caso click   este caso el fondo que es Lamina
*/
public void actionPerformed(ActionEvent e){//LA E ALMACENA EL EVENTO
    Object botonPulsado=e.getSource();//con getSource se sabe cual objeto fue el desencadenante botonPulsado=e.getSource();
    if(botonPulsado==botonAzul){
    setBackground(Color.blue);
    }else if(botonPulsado==botonAmarillo)
    {setBackground(Color.yellow);
    }else{setBackground(Color.red);}
    }
}
/*
   en un metodo dentro de la clase Lamina definimos el comportamiento
   para cada caso  ActionPerformed es un metodo abstracto de la interface
   ActionListener  el parametro entre parentesis llamado e con tipo de dato
   ActionEvent esta para poder operar las acciones de tipo objeto por eso
   abajo dice Object botonPulsado


//Creas un numero aleatorio no mayor a 255
public int generarAle(){
  Random ran = new Random();
  int x=ran.nextInt(255);
  return x;
 }

//En el boton agregamos lo siguiente
if(botonPulsado == btnColor){
   setBackground(new Color(generarAle(), generarAle(), generarAle()));




*/


