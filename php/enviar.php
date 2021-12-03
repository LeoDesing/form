<?php
    $destino "leowebdesing12@gmail.com";
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $contenido = "Nombre: " . $nombre . "\nTelefono: " . $telefono . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;

    mail($destino,"Contacto", $contenido);

    header("Location:gracias.html");

?>