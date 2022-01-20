/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Logica;

import Persistencia.ControladorPersistencia;
import java.io.Serializable;
import java.util.Date;
import java.util.LinkedList;
import java.util.List;
import javax.persistence.Basic;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.OneToOne;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

/**
 *
 * @author l2k49
 */
@Entity
public class Paquetes implements Serializable {
@Id
private int numpaquete;
@Basic
private String nombrepaquete;
private double totalpaquete;
private String destino;

@Temporal(TemporalType.DATE)
private Date fechaida;
@Temporal(TemporalType.DATE)
private Date fechavuelta;
@OneToOne
Empleados unEmpleado; //cual de los empleados dio el alta  paquete
@OneToMany
List <Servicios> Servicio=new LinkedList <Servicios>();

    public Paquetes() {
    }

    public Paquetes(int numpaquete, String nombrepaquete, double totalpaquete, String destino, Date fechaida, Date fechavuelta, Empleados unEmpleado) {
        this.numpaquete = numpaquete;
        this.nombrepaquete = nombrepaquete;
        this.totalpaquete = totalpaquete;
        this.destino = destino;
        this.fechaida = fechaida;
        this.fechavuelta = fechavuelta;
        this.unEmpleado = unEmpleado;
    }

    public int getNumpaquete() {
        return numpaquete;
    }

    public void setNumpaquete(int numpaquete) {
        this.numpaquete = numpaquete;
    }

    public String getNombrepaquete() {
        return nombrepaquete;
    }

    public void setNombrepaquete(String nombrepaquete) {
        this.nombrepaquete = nombrepaquete;
    }

    public double getTotalpaquete() {
        return totalpaquete;
    }

    public void setTotalpaquete(double totalpaquete) {
        this.totalpaquete = totalpaquete;
    }

    public String getDestino() {
        return destino;
    }

    public void setDestino(String destino) {
        this.destino = destino;
    }

    public Date getFechaida() {
        return fechaida;
    }

    public void setFechaida(Date fechaida) {
        this.fechaida = fechaida;
    }

    public Date getFechavuelta() {
        return fechavuelta;
    }

    public void setFechavuelta(Date fechavuelta) {
        this.fechavuelta = fechavuelta;
    }

    public Empleados getUnEmpleado() {
        return unEmpleado;
    }

    public void setUnEmpleado(Empleados unEmpleado) {
        this.unEmpleado = unEmpleado;
    }

    public List<Servicios> getServicio() {
        return Servicio;
    }

    public void setServicio(List<Servicios> Servicio) {
        this.Servicio = Servicio;
    }

    public void CrearPaquete(Paquetes P){
    ControladorPersistencia control=new ControladorPersistencia();
    P=this;
    control.crearPaquete(P);
    }
 
    
    public Paquetes buscarPaquete (int numpaquete){
        ControladorPersistencia control=new ControladorPersistencia();
        Paquetes P= control.buscarPaquete(numpaquete);
        return P;
    }
    
    
    
    public List <Paquetes> mostrarPaquetes(Paquetes P){
    ControladorPersistencia control=new ControladorPersistencia();
    List<Paquetes> listaPaquetes=control.mostrarPaquetes();
    return listaPaquetes;
    }
    
    public void modificarPaquete(Paquetes P){
    ControladorPersistencia control=new ControladorPersistencia();
    P=this;
    control.modificarPaquete(P);
    }
    
    public void eliminarPaquete(int P){
    ControladorPersistencia control=new ControladorPersistencia();
    control.eliminarPaquete(P);
    }
    
    

}

