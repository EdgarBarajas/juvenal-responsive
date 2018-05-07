<?php

$destino= "hola@catrinasoftec.com";

$nombre= $_POST["nombre"];

$email= $_POST["email"];

$telefono= $_POST["telefono"];

$comentario= $_POST["comantario"];

$correo= "Nombre: " . $nombre . "\n\nE-Mail: " . $email . "\n\nTelefono: " . $telefono . "\n\nComentarios: " . $comentarios;



mail($destino, "Uriangato Independiente Page", $correo);
header("Location:correo.html");

?>