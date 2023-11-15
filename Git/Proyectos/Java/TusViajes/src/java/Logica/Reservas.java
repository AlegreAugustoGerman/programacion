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
import javax.persistence.OneToOne;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

/**
 *
 * @author l2k49
 */
@Entity
public class Reservas implements Serializable{
@Id
private int numreserva;
@Basic
private double adelantoreserva;
private String estadoreserva;
private String tiporeserva;
private double precio;

@Temporal(TemporalType.DATE)
private Date fechareserva;
  
@Temporal(TemporalType.DATE)
private Date fechavencimiento;

@OneToOne
Empleados unEmpleado; //cual de los empleados dio alta o baja en reservas
@OneToOne
Clientes unCliente;
@OneToOne
Paquetes unPaquete;   
@OneToOne
Servicios unServicio;

    public Reservas() {
    }

    public Reservas(int numreserva, double adelantoreserva, String estadoreserva, String tiporeserva, double precio, Date fechareserva, Date fechavencimiento, Empleados unEmpleado, Clientes unCliente, Paquetes unPaquete, Servicios unServicio) {
        this.numreserva = numreserva;
        this.adelantoreserva = adelantoreserva;
        this.estadoreserva = estadoreserva;
        this.tiporeserva = tiporeserva;
        this.precio = precio;
        this.fechareserva = fechareserva;
        this.fechavencimiento = fechavencimiento;
        this.unEmpleado = unEmpleado;
        this.unCliente = unCliente;
        this.unPaquete = unPaquete;
        this.unServicio = unServicio;
    }

    public int getNumreserva() {
        return numreserva;
    }

    public void setNumreserva(int numreserva) {
        this.numreserva = numreserva;
    }

    public double getAdelantoreserva() {
        return adelantoreserva;
    }

    public void setAdelantoreserva(double adelantoreserva) {
        this.adelantoreserva = adelantoreserva;
    }

    public String getEstadoreserva() {
        return estadoreserva;
    }

    public void setEstadoreserva(String estadoreserva) {
        this.estadoreserva = estadoreserva;
    }

    public String getTiporeserva() {
        return tiporeserva;
    }

    public void setTiporeserva(String tiporeserva) {
        this.tiporeserva = tiporeserva;
    }

    public double getPrecio() {
        return precio;
    }

    public void setPrecio(double precio) {
        this.precio = precio;
    }

    public Date getFechareserva() {
        return fechareserva;
    }

    public void setFechareserva(Date fechareserva) {
        this.fechareserva = fechareserva;
    }

    public Date getFechavencimiento() {
        return fechavencimiento;
    }

    public void setFechavencimiento(Date fechavencimiento) {
        this.fechavencimiento = fechavencimiento;
    }

    public Empleados getUnEmpleado() {
        return unEmpleado;
    }

    public void setUnEmpleado(Empleados unEmpleado) {
        this.unEmpleado = unEmpleado;
    }

    public Clientes getUnCliente() {
        return unCliente;
    }

    public void setUnCliente(Clientes unCliente) {
        this.unCliente = unCliente;
    }

    public Paquetes getUnPaquete() {
        return unPaquete;
    }

    public void setUnPaquete(Paquetes unPaquete) {
        this.unPaquete = unPaquete;
    }

    public Servicios getUnServicio() {
        return unServicio;
    }

    public void setUnServicio(Servicios unServicio) {
        this.unServicio = unServicio;
    }

    public void crearReservas(Reservas R){
    ControladorPersistencia control=new ControladorPersistencia();
    R=this;
    control.crearReserva(R);
    }
    public Reservas buscarReserva (int numreserva){
    ControladorPersistencia control=new ControladorPersistencia();
    Reservas R= control.buscarReserva(numreserva);
    return R;
    }   
    public List <Reservas> mostrarReserva(Reservas R){
    ControladorPersistencia control=new ControladorPersistencia();
    List<Reservas> listaReservas=control.mostrarReservas();
    return listaReservas;
    }
    
    public void modificarReserva(Reservas R){
    ControladorPersistencia control=new ControladorPersistencia();
    R=this;
    control.modificarReserva(R);
    }
    
    public void eliminarReserva(int numreserva){
    ControladorPersistencia control=new ControladorPersistencia();
    control.eliminarReserva(numreserva);
    }


}
