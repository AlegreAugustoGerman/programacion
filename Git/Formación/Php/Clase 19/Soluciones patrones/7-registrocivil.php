<?php

class Oficina {
    public function aprobarCertificadoConvivencia() {
       echo "Aprobando Certificado de Convivencia...<br>";
    }
     public function aprobarCertificadoCasamiento() {
       echo "Aprobando Certificado de Casamiento...<br>";
    }
     public function aprobarCertificadoDivorcio() {
       echo "Aprobando Certificado de Divorcio...<br>";
    }
   
}


interface Certificado {
    public function ejecutar();
}


class CertificadoConvivencia implements Certificado {
    private $oficina;
    public function __construct($oficina) {
        $this->oficina = $oficina;
        echo "Creando certificado de convivencia<br>";
    }
    public function ejecutar( ) {
        $this->oficina->aprobarCertificadoConvivencia( );
    }
}

class CertificadoCasamiento implements Certificado {
    private $oficina;
    public function __construct($oficina) {
        $this->oficina = $oficina;
        echo "Creando certificado de casamiento<br>";
    }
    public function ejecutar( ) {
        $this->oficina->aprobarCertificadoCasamiento( );
    }
}

class CertificadoDivorcio implements Certificado {
    private $oficina;
    public function __construct($oficina) {
        $this->oficina = $oficina;
        echo "Creando certificado de divorcio<br>";
    }
    public function ejecutar( ) {
        $this->oficina->aprobarCertificadoDivorcio( );
    }
}

class Empleado
{
	protected static $certificados=array();
}

class Recepcionista extends Empleado
{
    public function crearCertificado($certificado) {
		 array_push(self::$certificados,$certificado);
    } 
       
   
}

class Juez extends Empleado
{
	 public function aprobarCertificado()
    {
		if(count(self::$certificados)>0)
		{
			$certificado=array_shift(self::$certificados);
			$certificado->ejecutar();
		}else
		{
			echo "No hay certificados pendientes a aprobacion<br>";
		}
	}
	
}



		$oficina = new Oficina();
        $recepcionista = new Recepcionista();
        $juez=new Juez();
        
        $recepcionista->crearCertificado(new CertificadoConvivencia($oficina));
        $recepcionista->crearCertificado(new CertificadoCasamiento($oficina));
        $recepcionista->crearCertificado(new CertificadoDivorcio($oficina));
        $juez->aprobarCertificado();
        $juez->aprobarCertificado();
        $recepcionista->crearCertificado(new CertificadoCasamiento($oficina));
        $recepcionista->crearCertificado(new CertificadoCasamiento($oficina));
        $juez->aprobarCertificado();
        $juez->aprobarCertificado();
        $juez->aprobarCertificado();
        $juez->aprobarCertificado();
        

 
 
	
