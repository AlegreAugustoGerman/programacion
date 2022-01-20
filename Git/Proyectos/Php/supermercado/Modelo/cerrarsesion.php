<?php
 include '../config.php';
 include BASE_DIR. '/Controlador/Funciones.php';

if (isset($_POST['cerrarsesion'])){
    Cerrar();
}

?> 