/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Persistencia;

import Logica.Clientes;
import Logica.Empleados;
import Logica.Paquetes;
import Logica.Reservas;
import Logica.Servicios;
import Logica.Ventas;
import Persistencia.exceptions.NonexistentEntityException;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author l2k49
 */
public class ControladorPersistencia {
    ClientesJpaController Cliente=new ClientesJpaController();
    EmpleadosJpaController Empleado=new EmpleadosJpaController();
    ServiciosJpaController Servicio=new ServiciosJpaController();
    PaquetesJpaController Paquete=new PaquetesJpaController();
    ReservasJpaController Reserva=new ReservasJpaController();
    VentasJpaController Venta=new VentasJpaController();
    
    
    
    public void crearCliente(Clientes C){
        try {
            Cliente.create(C);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public Clientes buscarCliente(int dni){//al recibir encontrar
        Clientes C = Cliente.findClientes(dni);
        return C;
    }
    
    public List<Clientes> mostrarClientes(){//al recibir ver
        List<Clientes> listaClientes = Cliente.findClientesEntities();
        return listaClientes;
    }
    
    
    public void modificarCliente(Clientes C){//al realizar cambiar
        try {
            Cliente.edit(C);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public void eliminarCliente(int dni){
        try {
            Cliente.destroy(dni);
        } catch (NonexistentEntityException ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    
    
    //fin de clientes
    
    
        public void crearEmpleado(Empleados E){
        try {
            Empleado.create(E);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public Empleados buscarEmpleado(int dni){
        Empleados E = Empleado.findEmpleados(dni);
        return E;
    }
    
    public List<Empleados> mostrarEmpleados(){
        List<Empleados> listaEmpleados =Empleado.findEmpleadosEntities();
        return listaEmpleados;
    }
    
    public void modificarEmpleado(Empleados E){
        try {
            Empleado.edit(E);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public void eliminarEmpleado(int dni){
        try {
            Empleado.destroy(dni);
        } catch (NonexistentEntityException ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    
    //fin empleados
    
    public void crearPaquete(Paquetes P){
        try {
            Paquete.create(P);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public Paquetes buscarPaquete(int numpaquete){
        Paquetes P = Paquete.findPaquetes(numpaquete);
        return P;
    }
    
    public List<Paquetes> mostrarPaquetes(){
        List<Paquetes> listaPaquete = Paquete.findPaquetesEntities();
        return listaPaquete;
    }
    
    public void modificarPaquete(Paquetes P){
        try {
            Paquete.edit(P);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public void eliminarPaquete(int numpaquete){
        try {
            Paquete.destroy(numpaquete);
        } catch (NonexistentEntityException ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    //fin paquete
    
    public void crearServicio(Servicios S){
        try {
            Servicio.create(S);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public Servicios buscarServicio(int numservicio){
        Servicios S = Servicio.findServicios(numservicio);
        return S;
    }
    
    public List<Servicios> mostrarServicios(){
        List<Servicios> listaServicios = Servicio.findServiciosEntities();
        return listaServicios;
    }
    
    public void modificarServicio(Servicios S){
        try {
            Servicio.edit(S);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public void eliminarServicio(int numservicio){
        try {
            Servicio.destroy(numservicio);
        } catch (NonexistentEntityException ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    
    //reservas
        public void crearReserva(Reservas R){
        try {
            Reserva.create(R);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public Reservas buscarReserva(int numreserva){//al recibir encontrar
        Reservas R = Reserva.findReservas(numreserva);
        return R;
    }
    
    public List<Reservas> mostrarReservas(){//al recibir ver
        List<Reservas> listaReservas = Reserva.findReservasEntities();
        return listaReservas;
    }
    
    public void modificarReserva(Reservas R){//al realizar cambiar
        try {
            Reserva.edit(R);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public void eliminarReserva(int numreserva){
        try {
            Reserva.destroy(numreserva);
        } catch (NonexistentEntityException ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    //ventas
    
        public void crearVenta(Ventas V){
        try {
            Venta.create(V);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public Ventas buscarVenta(int numventa){//al recibir encontrar
        Ventas V = Venta.findVentas(numventa);
        return V;
    }
    
    public List<Ventas> mostrarVentas(){//al recibir ver
        List<Ventas> listaVentas = Venta.findVentasEntities();
        return listaVentas;
    }
    
    public void modificarVenta(Ventas V){//al realizar cambiar
        try {
            Venta.edit(V);
        } catch (Exception ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public void eliminarVenta(int numventa){
        try {
            Venta.destroy(numventa);
        } catch (NonexistentEntityException ex) {
            Logger.getLogger(ControladorPersistencia.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
}
