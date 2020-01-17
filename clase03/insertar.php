<?php 
    // Solicitamos la conexion a la BD a través del método require();
    require('conexion.php');

    // Vamos a crear una variable que traiga los datos que el usuario envía
    // desde un formulario
    $videojuego = $_GET['videojuego'];

    // Crearemos una variable que se va a encargar de contener la sentencia sql
    // para guardar los datos en la tabla videojuegos de la BD bictia
    $sql = "INSERT INTO videojuegos (nombre) VALUES ('$videojuego')";

    // El método mysqli_query() se encarga de enviar los datos
    // Necesita la conexion y la sentencia sql
    mysqli_query($conexion, $sql);

    // Direccionamiento de rutas
    header('Location: mostrar.php');

?>