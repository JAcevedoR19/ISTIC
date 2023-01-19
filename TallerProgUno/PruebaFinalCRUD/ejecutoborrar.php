<?php
    include ("conectarbd.php");

    $id = $_POST["idborrar"];

    $conectar=new mysqli('localhost', 'root', '', 'animesbd') or exit ('No se puede conectar con la Base de Datos');

    $comprobarbd=mysqli_query($conectar, "SELECT * FROM animes WHERE id = '$id'");

    $verificar = mysqli_fetch_assoc($comprobarbd);

 
    if ($verificar ['id'] == $id) {
        mysqli_query($conectar, "DELETE FROM animes WHERE id = $id");
        header ('location: borrarvideo.php?correcto');
    } else {
        header ('location: borrarvideo.php?incorrecto');
    }

?>
