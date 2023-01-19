<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Permanent+Marker&family=Rubik+Glitch&display=swap" rel="stylesheet">
  <!-- FONT AWESOME - ICONOS -->
  <script src="https://kit.fontawesome.com/a1fdf165a9.js" crossorigin="anonymous"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
  <header>
      <div id="cabecera">
        <h1><a href="index.php"><strong>ANIMES JAAR</strong></a></h1>
      </div>
      <nav class="botonera">
        <ul>
          <li><a href="index.php"><strong>Inicio</strong></a></li>
          <li><a href="cargardatos.php"><strong>Subir Video</strong></a></li>
          <li><a href="listanimes.php"><strong>Lista de Videos</strong></a></li>
          <li><a href="modificardatos.php"><strong>Modificar Videos</strong></a></li>
          <li><a href="borrarvideo.php"><strong>Eliminar Video</strong></a></li>
          <li><a href="contacto.php"><strong>Contacto</strong></a></li>
        </ul>
      </nav>
  </header>

	<section class="mostrardatos">
    <div>
    	<h3>Lista de Base de Datos</h3>
      
        <?php  
          include("conectarbd.php");

          $lista = mysqli_query($conectar, "SELECT * FROM animes ORDER BY id");

          while($listar_animes = mysqli_fetch_assoc($lista)) {?>
          <div class="cajamostrar">
            <div>
                <p><strong class="formu">ID: </strong><span> <?php echo $listar_animes['id'] ?></span> </p>
                <p><strong class="formu">Nombre: </strong><span><?php echo $listar_animes['nombre'] ?></span> </p>
                <p><strong class="formu">Género: </strong><span><?php echo $listar_animes['genero'] ?></span> </p>
            </div>
            <div>
              <?php echo $listar_animes['archivo'] ?> </p>
            </div>
          </div>
          <div class="lineanueva"></div>
        <?php } ?>
    </div>
  </section>

  <footer class="pies">
    <div class="pie_izquierdo">
      <h5><i class="fa-regular fa-copyright"></i> Página diseñada por Joan Acevedo - Todos los derechos reservados</h5>
    </div>

    <div class="lineadivi"></div>

    <div class="pie_derecho">
      <h5>Contacto</h5>
      <a href="index.php#pies"><i class="fa-regular fa-envelope"></i></a>
      <a href="index.php#pies"><i class="fa-solid fa-phone"></i></a>
      <a href="index.php#pies"><i class="fa-brands fa-instagram"></i></a>
    </div>
  </footer>

  <!-- JAVASCRIPT BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- JAVASCRIPT ALERTS/ALERTAS -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>