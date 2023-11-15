/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Logica;

import Persistencia.ControladorPersistencia;
import java.io.Serializable;
import java.util.Date;
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
public class Ventas implements Serializable{
@Id
private int numventa;
@Basic
private String mediopago;
private double total;

@Temporal(TemporalType.DATE)
private Date fechaventa;


    @OneToOne
Reservas unReserva;
    @OneToOne
Empleados unEmpleado; //cual de los empleados realizo el alta de venta 

    public Ventas() {
    }

    public Ventas(int numventa, String mediopago, double total, Date fechaventa, Reservas unReserva, Empleados unEmpleado) {
        this.numventa = numventa;
        this.mediopago = mediopago;
        this.total = total;
        this.fechaventa = fechaventa;
        this.unReserva = unReserva;
        this.unEmpleado = unEmpleado;
    }

    public int getNumventa() {
        return numventa;
    }

    public void setNumventa(int numventa) {
        this.numventa = numventa;
    }

    public String getMediopago() {
        return mediopago;
    }

    public void setMediopago(String mediopago) {
        this.mediopago = mediopago;
    }

    public double getTotal() {
        return total;
    }

    public void setTotal(double total) {
        this.total = total;
    }

    public Date getFechaventa() {
        return fechaventa;
    }

    public void setFechaventa(Date fechaventa) {
        this.fechaventa = fechaventa;
    }

    public Reservas getUnReserva() {
        return unReserva;
    }

    public void setUnReserva(Reservas unReserva) {
        this.unReserva = unReserva;
    }

    public Empleados getUnEmpleado() {
        return unEmpleado;
    }

    public void setUnEmpleado(Empleados unEmpleado) {
        this.unEmpleado = unEmpleado;
    }
    
        public void crearVenta(Ventas V){
    ControladorPersistencia control=new ControladorPersistencia();
    V=this;
    control.crearVenta(V);
    }
    public Ventas buscarVentas(int numventa){
        ControladorPersistencia control=new ControladorPersistencia();
        Ventas V= control.buscarVenta(numventa);
        return V;
    }   
    public List <Ventas> mostrarVentas(Ventas V){
    ControladorPersistencia control=new ControladorPersistencia();
    List<Ventas> listaVentas=control.mostrarVentas();
    return listaVentas;
    }
    
    public void modificarVenta(Ventas V){
    ControladorPersistencia control=new ControladorPersistencia();
    V=this;
    control.modificarVenta(V);
    }
    
    public void eliminarVentas(int numventa){
    ControladorPersistencia control=new ControladorPersistencia();
    control.eliminarVenta(numventa);
    }
    
}
