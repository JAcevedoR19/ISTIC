<?php
    include ("conectarbd.php");

    $id = $_POST["idanime"];
    $nom_ani = $_POST["nomb"];
    $gen_ani = $_POST["gen"];
    $multi = $_POST["arch"];

    $conectar=new mysqli('localhost', 'root', '', 'animesbd') or exit ('No se puede conectar con la Base de Datos');

    // HACER UNA CONSULTA SI EL ID (LO HAGO CON EL ID PORQUE ES MI CLAVE PRIMARIA EN LA BASE) YA ESTÁ EN LA BASE DE DATOS
    $prueba=mysqli_query($conectar, "SELECT * FROM animes WHERE id = '$id'");

    // UNA VEZ REALIZADA LA CONSULTA, LA METEMOS EN UNA VARIABLE PARA PODER COMPARARLA LUEGO
    $comparar = mysqli_fetch_assoc($prueba);
    
    // COLOCAMOS UN CONDICIONAL DICIENDO QUE SI EL ID YA ESTÁ EN USO, COLOQUE EN LA URL DEL ARCHIVO ?incorrecto Y FINALICE AHÍ LA ACCIÓN, EN CASO CONTRARIO DE QUE NO ESTÉ EL ID EN LA BASE DE DATOS, REALICE EL INSERT (QUE AGREGUE LOS DATOS) Y COLOQUE UN ?correcto AL URL DE NUESTRO ARCHIVO
    if ($comparar ['id'] == $id) {
      header ('location: cargardatos.php?incorrecto');
    } else {
      mysqli_query($conectar, "INSERT INTO animes VALUES ('$id', '$nom_ani', '$gen_ani','$multi')");
      header ('location: cargardatos.php?correcto');
    }

    // EL ?incorrecto Y ?correcto LO COLOQUÉ MÁS QUE TODO PARA PODER DARLE USO A ESO EN EL ARCHIVO cargardatos.php


?>

