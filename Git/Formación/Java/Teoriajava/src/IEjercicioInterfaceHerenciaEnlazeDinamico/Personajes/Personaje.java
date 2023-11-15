/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IEjercicioInterfaceHerenciaEnlazeDinamico.Personajes;

/**
 *
 * @author l2k49
 */
abstract class Personaje extends IEjercicioInterfaceHerenciaEnlazeDinamico.ATerrenal 
         implements ComportamientosHablar,ComportamientosCombate{
    private String raza;
    //ATRIBUTOS PRINCIPALES
    private double puntosFuerza;private double puntosInteligencia;private double puntosSalud;private double puntosDestreza;private double puntosResistencia;
    //
    private double puntosConstitucion;private boolean puntosEstado; 
    //
    private double puntosResistenciaMagica;private double puntosResistenciaFisica;private double puntosResistenciaElemental;
    //ESTADO DE ATRIBUTO
    private double puntosFatiga;private double puntosPercepcion,puntosReflejos,PuntosSuerte;
    // 
    private double puntosDañoFisico;private double puntosDañoMagico;private double puntosDañoElemental;private double puntosDañoTotal;
    
    //REPARTIR  ATRIBUTOS EN EL CUERPO POR ENDE DAÑO QUE CAUSA Y RECIBE//
    private int cabeza,cuello,cuerpo,piernas,brazos,manos;
    
    public Personaje(String nombre, double peso, double valor, String descripcion,
    String color, double alto, double ancho, double largo,String raza,double puntosFuerza,
    double puntosInteligencia,double puntosSalud,double puntosDestreza,double puntosResistencia,double puntosConstitucion,
    boolean puntosEstado,double puntosResistenciaMagica,double puntosResistenciaFisica,double puntosResistenciaElemental,
    double puntosFatiga,double puntosPercepcion,double puntosDañoFisico,double puntosDañoMagico,double puntosDañoElemental,
    double puntosDañoTotal,double puntosReflejos,double puntosSuerte,int cabeza,int cuello,int cuerpo,int piernas, int brazos, int manos){
    
    super(nombre,peso,valor,descripcion,color,alto,ancho,largo);this.raza=raza;this.puntosFuerza=puntosFuerza;this.puntosInteligencia=puntosInteligencia;
    this.puntosSalud=puntosSalud;this.puntosDestreza=puntosDestreza;this.puntosResistencia=puntosResistencia;this.puntosConstitucion=puntosConstitucion;this.puntosEstado=puntosEstado;
    this.puntosResistenciaMagica=puntosResistenciaMagica;this.puntosResistenciaFisica=puntosResistenciaFisica;this.puntosResistenciaElemental=puntosResistenciaElemental;
    this.puntosFatiga=puntosFatiga;this.puntosPercepcion=puntosPercepcion;this.puntosDañoFisico=puntosDañoFisico;
    this.puntosDañoMagico=puntosDañoMagico;this.puntosDañoElemental=puntosDañoElemental;this.puntosDañoTotal=puntosDañoTotal;
    this.puntosReflejos=puntosReflejos;this.PuntosSuerte=PuntosSuerte; this.cabeza=cabeza; this.cuello=cuello; this.cuerpo=cuerpo;
    this.piernas=piernas; this.brazos=brazos; this.manos=manos;}
    
    public String Descripcion(){return"El nombre: "+nombre+"El peso: "+peso+"El valor: "+valor+ "El color: "+color+"El alto: "+alto+"El ancho: "
            +ancho+
            "El largo: "+largo+"raza: "+raza+"su fuerza es: "+puntosFuerza+"sus puntos Inteligencia : "+puntosInteligencia+"su puntos Salud: "
            +puntosSalud+"puntos Destreza: "+puntosDestreza+"puntosResistencia : "+puntosResistencia+"puntos Constitucion : "+puntosConstitucion+
            "puntosEstado : "+puntosEstado+"puntos ResistenciaMagica: "+puntosResistenciaMagica+"puntos Resistencia Fisica: "+puntosResistenciaFisica+
            "puntos Resistencia Elemental: "+puntosResistenciaElemental+"puntos Fatiga: "+puntosFatiga+"puntos Percepcion: "+puntosPercepcion+
            "puntos Daño Fisico: "+puntosDañoFisico+"puntos Daño Magico: "+puntosDañoMagico+" puntos Daño Elemental: "+puntosDañoElemental+
            " puntos Daño Total:"+puntosDañoTotal+" puntosReflejos: "+puntosReflejos+" PuntosSuerte: "+PuntosSuerte+" cabeza:"+cabeza+" cuello: "+cuello+
            " cuerpo: "+cuerpo+" piernas: "+piernas+" brazos: "+brazos+" manos: "+manos;}
    
   //
  public abstract String  RecibirComposiciónCuerpo();
  
 
  
  public void AsignarAtributosPartesDelCuerpo(int cab,int cue,int cuer,int bra,int pier,int ma){
  this.cabeza=cabeza+cab;
  this.cuello=cuello+cue;
  this.cuerpo=cuerpo+cuer;
  this.brazos=brazos+bra;
  this.piernas=piernas+pier;
  this.manos=manos+ma;}
   //
  public void CalcularAtributos(){}
  
  //re uso para calculos combate y aumentos de estatus
  public abstract String RecibeAumentarFuerza(); 
  public abstract String RecibeAumentarInteligencia();
  public abstract String RecibeAumentarDestreza();
  public abstract String RecibeAumentarResistencia();
  public abstract String RecibeAumentarAumentarSalud();
  //
  public abstract String RecibeAumentarResistenciaFisica();
  public abstract String RecibeAumentarResistenciaMagica();
  public abstract String RecibeAumentarResistenciaElemental();
  
  //bueno esto desarrollo según requiera mas adelante
  public abstract String RecibeCambiosApariencia();
  
  ////re uso para calculos combate y bajas de estatus
  public abstract String RecibeBajarFuerza(); 
  public abstract String RecibeBajarInteligencia();
  public abstract String RecibeBajarDestreza();
  public abstract String RecibeBajarResistencia();
  public abstract String RecibeBajarAumentarSalud();
  
  public abstract String RecibeBajarResistenciaFisica();
  public abstract String RecibeBajarResistenciaMagica();
  public abstract String RecibeBajarResistenciaElemental();
 
  public void CalcularDaños(){}
  
  //UN INVENTARIO ES UN GETTER Y SETTER DE OBJETOS 
  //COMO EL EJEMPLO DE EMPLEADOS CADA OBJETO ES UNA CLASE
  //EN UN ARRAY O LISTA CON ENLAZE DINAMICO 
  //Y ESE ARRAY SERA EL INVENTARIO QUE DEBE ESTAR COMO OBLIGATORIO
  //PARA CADA CLASE 
     
}