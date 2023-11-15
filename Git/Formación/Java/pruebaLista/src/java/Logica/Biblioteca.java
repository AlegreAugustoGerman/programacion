/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Logica;

import java.util.Date;
import java.util.LinkedList;
import java.util.List;

/**
 *
 * @author l2k49
 */
public class Biblioteca {
    private int codigo;

    
    List <Prenda> prendas=new  LinkedList <Prenda>();

    public Biblioteca() {
    }

    public Biblioteca(int codigo) {
        this.codigo = codigo;
    }

    public int getCodigo() {
        return codigo;
    }

    public void setCodigo(int codigo) {
        this.codigo = codigo;
    }

    public List<Prenda> getPrendas() {
        return prendas;
    }

    public void setPrendas(List<Prenda> prendas) {
        this.prendas = prendas;
    }
    
    
    
}
