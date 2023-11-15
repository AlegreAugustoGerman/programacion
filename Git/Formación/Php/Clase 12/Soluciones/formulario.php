<?php 

include 'header.html';

?>
		
		<h1>Formulario</h1>
		
		<a href="funciones2.php">Funciones2</a>
		<?php
		
		include_once 'funciones.php';
		//include_once 'tabla2.html';
		
		/*if((include 'tabla.html'))
		{
		echo include 'tabla2.html';
		}
		else
		{
			echo "no se encuentr tabla2.html";
		}*/
		$valor=4;
		if($valor==4)
		{
			header("Location: funciones2.php");
		}else{
			echo "Mostrar valor: ".$valor;
		}
		
		
		echo mostrarMensaje(1,2,3);
		echo $mensaje;
		include_once 'tabla.html';
		
		/*	if(isset($_POST['nombre']))
			{
				$nombre=$_POST['nombre'];
				agregarContacto($nombre);
			
		}
		else
		{
		 $error="El nombre esta vacio";*/
		
		?>
		
	<!--	<form action="" method="POST">
			<input type="text" name="nombre">
			<?php if(isset($error)){ echo $error;} ?>
			<input type="submit">
		</form>-->
		
		<?php
		//}
		
		include 'footer.html';
	?>
	
