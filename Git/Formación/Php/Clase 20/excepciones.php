<?php

class ExceptionDivisionCero extends Exception
{
	public function getMensaje()
	{
		return $this->getMessage()." en la linea ".$this->getLine();
	}
}

class ExceptionStockCero extends Exception
{
	public function getMensaje()
	{
		return $this->getMessage();
	}
}

function division($n1,$n2)
{
	try
	{
		if($n2==0)
		{
			//throw new ExceptionDivisionCero("No se puede dividir por 0");
			throw new ExceptionStockCero("No hay stock");
		}
		return $n1/$n2;
	}
	catch(ExceptionDivisionCero $e)
	{
		$mensaje=date("H:i d-m-Y")." ".$e->getMessage()."\n";
		error_log($mensaje,3,"/var/www/error.log");
		echo $e->getMensaje();
	}
	catch(ExceptionStockCero $e)
	{
		$mensaje=date("H:i d-m-Y")." ".$e->getMessage()."\n";
		error_log($mensaje,3,"/var/www/error.log");
		echo $e->getMensaje();
		
	}
	catch(Exception $e)
	{
		echo "Ha ocurrido una excepcion de error<br>";
	}
}

echo division(2,0);
