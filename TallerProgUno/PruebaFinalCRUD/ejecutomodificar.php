<?php
    include ("conectarbd.php");

    $id_mod = $_POST["idmod"];
    $nomb_mod = $_POST["nombmod"];
    $gen_mod = $_POST["genmod"];
    $multi_mod = $_POST["archmod"];


    $conectar=new mysqli('localhost', 'root', '', 'animesbd') or exit ('No se puede conectar con la Base de Datos');

    $comprobarbd=mysqli_query($conectar, "SELECT * FROM animes WHERE id = '$id_mod'");

    $verificar = mysqli_fetch_assoc($comprobarbd);

 
    if ($verificar ['id'] == $id_mod) {
        mysqli_query($conectar, "UPDATE animes SET nombre='$nomb_mod', genero='$gen_mod', archivo='$multi_mod' WHERE id=$id_mod");
        header ('location: modificardatos.php?correcto');
    } else {
        header ('location: modificardatos.php?incorrecto');
    }

?>