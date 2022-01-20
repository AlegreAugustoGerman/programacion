
</html>
<?php
include 'index.php'
?>
<body>

    <table border=1px>
    <form action="AltaUsuario.php" METHOD="POST" class="registroU">
    <th><h1>Crear Cuenta</h1></th><tr>
    <td><input type="number" name="dni" class="input" placeholder="Dni"></td><tr>
    <td><input type="text" name="nombre" class="input"placeholder="Nombre"></td><tr>
    <td><input type="text" name="apellido" class="input" placeholder="Apellido"></td><tr>
    <td><select name="cargo" class="input-100">
        <option value="empleado">Empleado</option>
        <option value="cliente">Cliente</option>
    </select></td><tr>
    <td><input type="text" name="telefono" class="input" placeholder="Telefono"></td><tr>
    <td><input type="submit" value="Enviar" name="enviar" class="input-48"></td><tr>
    </form></table>
</body>
</html> 