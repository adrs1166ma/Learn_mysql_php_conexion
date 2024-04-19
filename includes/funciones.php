<?php
function obtener_servicios() {
    try {
        // Importar las credenciales
        require 'database.php';

        // Consulta SQL
        $sql = "SELECT * FROM servicios;";

        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);

        return $consulta;
        
        // Acceder a los resultados
        //echo "<pre>";
        //var_dump(mysqli_fetch_assoc($consulta)); // Muestra un registro
        //echo "</pre>";

        // Cerrar la conexion (Opcional)
        //$resultado = mysqli_close($db);
        //echo $resultado;

        //echo __DIR__; // Directorio
        //echo __FILE__; // Direccion de archivo

    } catch (\Throwable $th) {
        var_dump($th);
    }
}
obtener_servicios();