/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IEjercicioInterfaceHerenciaEnlazeDinamico;

/**
 *
 * @author l2k49
 */
public abstract class ATerrenal {
    protected String nombre;
    protected double peso;
    protected double valor;
    protected String descripcion;
    protected String color;
    protected double alto;
    protected double ancho;
    protected double largo;
    

    public ATerrenal(String nombre, double peso, double valor, String descripcion,
    String color, double alto, double ancho, double largo) {
        this.nombre = nombre;
        this.peso = peso;
        this.valor = valor;
        this.descripcion = descripcion;
        this.color = color;
        this.alto=alto;
        this.ancho=ancho;
        this.largo=largo;
    }

public abstract String Descripcion();
public String DameDescripcion(){return"El nombre: "+nombre+"El peso: "+peso+"El valor: "+valor+
        "El color: "+color+"El alto: "+alto+"El ancho: "+ancho+"El largo: "+largo+"conforman la decripcion inicial : "+
        "la descripcion actual es :  "+descripcion;}
    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public double getPeso() {
        return peso;
    }

    public void setPeso(double peso) {
        this.peso = peso;
    }

    public double getValor() {
        return valor;
    }

    public void setValor(double valor) {
        this.valor = valor;
    }

    public String getColor() {
        return color;
    }

    public void setColor(String color) {
        this.color = color;
    }

    public double getAlto() {
        return alto;
    }

    public void setAlto(double alto) {
        this.alto = alto;
    }

    public double getAncho() {
        return ancho;
    }

    public void setAncho(double ancho) {
        this.ancho = ancho;
    }

    public double getLargo() {
        return largo;
    }

    public void setLargo(double largo) {
        this.largo = largo;
    }
   
}
