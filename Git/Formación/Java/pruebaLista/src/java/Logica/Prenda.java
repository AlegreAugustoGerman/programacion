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
public class Prenda {
    private int codigo;
    private String Nombre;
    private String Marca;
    private String Talla;
    private String FechaIngreso;
    private int Stock;
    private boolean Temporada;

    public Prenda() {
    }

    public Prenda(int codigo, String Nombre, String Marca, String Talla, String FechaIngreso, int Stock, boolean Temporada) {
        this.codigo = codigo;
        this.Nombre = Nombre;
        this.Marca = Marca;
        this.Talla = Talla;
        this.FechaIngreso = FechaIngreso;
        this.Stock = Stock;
        this.Temporada = Temporada;
    }

    public int getCodigo() {
        return codigo;
    }

    public void setCodigo(int codigo) {
        this.codigo = codigo;
    }

    public String getNombre() {
        return Nombre;
    }

    public void setNombre(String Nombre) {
        this.Nombre = Nombre;
    }

    public String getMarca() {
        return Marca;
    }

    public void setMarca(String Marca) {
        this.Marca = Marca;
    }

    public String getTalla() {
        return Talla;
    }

    public void setTalla(String Talla) {
        this.Talla = Talla;
    }

    public String getFechaIngreso() {
        return FechaIngreso;
    }

    public void setFechaIngreso(String FechaIngreso) {
        this.FechaIngreso = FechaIngreso;
    }

    public int getStock() {
        return Stock;
    }

    public void setStock(int Stock) {
        this.Stock = Stock;
    }

    public boolean isTemporada() {
        return Temporada;
    }

    public void setTemporada(boolean Temporada) {
        this.Temporada = Temporada;
    }
    
    

}
