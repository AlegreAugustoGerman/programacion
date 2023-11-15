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
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

/**
 *
 * @author l2k49
 */
@Entity
public class Clientes implements Serializable{
@Id
private int dni;
@Basic
private String nombre;
private String apellido;
private int telefono;
private String correoelectronico;
private String cargo;
@Temporal(TemporalType.DATE)
private Date fechanacimiento;

    public Clientes() {
    }

    public Clientes(int dni, String nombre, String apellido, int telefono, String correoelectronico, String cargo, Date fechanacimiento) {
        this.dni = dni;
        this.nombre = nombre;
        this.apellido = apellido;
        this.telefono = telefono;
        this.correoelectronico = correoelectronico;
        this.cargo = cargo;
        this.fechanacimiento = fechanacimiento;
    }

    public int getDni() {
        return dni;
    }

    public void setDni(int dni) {
        this.dni = dni;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getApellido() {
        return apellido;
    }

    public void setApellido(String apellido) {
        this.apellido = apellido;
    }

    public int getTelefono() {
        return telefono;
    }

    public void setTelefono(int telefono) {
        this.telefono = telefono;
    }

    public String getCorreoelectronico() {
        return correoelectronico;
    }

    public void setCorreoelectronico(String correoelectronico) {
        this.correoelectronico = correoelectronico;
    }

    public String getCargo() {
        return cargo;
    }

    public void setCargo(String cargo) {
        this.cargo = cargo;
    }

    public Date getFechanacimiento() {
        return fechanacimiento;
    }

    public void setFechanacimiento(Date fechanacimiento) {
        this.fechanacimiento = fechanacimiento;
    }

    public void CrearCliente(Clientes C){
    ControladorPersistencia control=new ControladorPersistencia();
    C=this;
    control.crearCliente(C);
    }
 
    
    public Clientes buscarCliente (int dni){
        ControladorPersistencia control=new ControladorPersistencia();
        Clientes C= control.buscarCliente(dni);
        return C;
    }
    
    
    
    public List <Clientes> mostrarClientes(Clientes C){
    ControladorPersistencia control=new ControladorPersistencia();
    List<Clientes> listaClientes=control.mostrarClientes();
    return listaClientes;
    }
    
    public void modificarCliente(Clientes C){
    ControladorPersistencia control=new ControladorPersistencia();
    C=this;
    control.modificarCliente(C);
    }
    
    public void eliminarCliente(int dni){
    ControladorPersistencia control=new ControladorPersistencia();
    control.eliminarCliente(dni);
    }
    
    
}
