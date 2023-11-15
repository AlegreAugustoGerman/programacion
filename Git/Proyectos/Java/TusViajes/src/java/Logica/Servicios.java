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
public class Servicios implements Serializable{
@Id
private int numservicio;
@Basic
private String nombreservicio;
private double precio;
private String descripcion;

@Temporal(TemporalType.DATE)
private Date fechainicioservicio;
@Temporal(TemporalType.DATE)
private Date fechafinservicio;

@OneToOne
Empleados unEmpleado; //cual de los empleados dio el alta al servicio

    public Servicios() {
    }

    public Servicios(int numservicio, String nombreservicio, double precio, String descripcion, Date fechainicioservicio, Date fechafinservicio, Empleados unEmpleado) {
        this.numservicio = numservicio;
        this.nombreservicio = nombreservicio;
        this.precio = precio;
        this.descripcion = descripcion;
        this.fechainicioservicio = fechainicioservicio;
        this.fechafinservicio = fechafinservicio;
        this.unEmpleado = unEmpleado;
    }

    public int getNumservicio() {
        return numservicio;
    }

    public void setNumservicio(int numservicio) {
        this.numservicio = numservicio;
    }

    public String getNombreservicio() {
        return nombreservicio;
    }

    public void setNombreservicio(String nombreservicio) {
        this.nombreservicio = nombreservicio;
    }

    public double getPrecio() {
        return precio;
    }

    public void setPrecio(double precio) {
        this.precio = precio;
    }

    public String getDescripcion() {
        return descripcion;
    }

    public void setDescripcion(String descripcion) {
        this.descripcion = descripcion;
    }

    public Date getFechainicioservicio() {
        return fechainicioservicio;
    }

    public void setFechainicioservicio(Date fechainicioservicio) {
        this.fechainicioservicio = fechainicioservicio;
    }

    public Date getFechafinservicio() {
        return fechafinservicio;
    }

    public void setFechafinservicio(Date fechafinservicio) {
        this.fechafinservicio = fechafinservicio;
    }

    public Empleados getUnEmpleado() {
        return unEmpleado;
    }

    public void setUnEmpleado(Empleados unEmpleado) {
        this.unEmpleado = unEmpleado;
    }
    
    public void crearServicio(Servicios S){
    ControladorPersistencia control=new ControladorPersistencia();
    S=this;
    control.crearServicio(S);
    }
    
        public Servicios buscarServicio(int numservicio){
        ControladorPersistencia control=new ControladorPersistencia();
        Servicios S= control.buscarServicio(numservicio);
        return S;
    }
    
    
    
    public List <Servicios> mostrarServicios(Servicios S){
    ControladorPersistencia control=new ControladorPersistencia();
    List<Servicios> listaServicios=control.mostrarServicios();
    return listaServicios;
    }
    
    public void modificarServicios(Servicios S){
    ControladorPersistencia control=new ControladorPersistencia();
    S=this;
    control.modificarServicio(S);
    }
    
    public void eliminarServicio(int numservicio){
    ControladorPersistencia control=new ControladorPersistencia();
    control.eliminarServicio(numservicio);
    }
    
    

}
