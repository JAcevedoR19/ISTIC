<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Permanent+Marker&family=Rubik+Glitch&display=swap" rel="stylesheet">
  <!-- FONT AWESOME - ICONOS -->
  <script src="https://kit.fontawesome.com/a1fdf165a9.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Animes JAAR</title>
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
        <h3>Contacta con nosotros</h3>
        <div class="subirdatos">
            <div>
            <form action="enviarconsulta.php" method="POST" class="formulario">
                <strong class="formu">Nombre: </strong><input type="text" name="nombconsu" placeholder="Nombre" required><br><br>
                <strong class="formu">Correo: </strong><input type="email" name="correoconsu" placeholder="Correo" required><br><br>
                <strong class="formu">Asunto: </strong><input type="text" name="asunconsu" placeholder="Asunto" required><br><br>
                <strong class="formu">Comentario: </strong><br><textarea name="comment" id="comment" cols="30" rows="10"></textarea> <br><br>
                <input type="submit" name="enviar" class="btn" value="Enviar"><br><br>
            </form>
            </div>
            <div>
                <img src="multimedia/hanamichi.gif" alt="">
            </div>
        </div>
        
    </section>

    <section class="siono">
      <?php            
        if (isset($_GET['enviado'])) {
          echo "<p><strong>El correo se envió con éxito. Si no está en tu bandeja de recibidos, revisa en spam.</strong></p>";
          echo '<div id="pulgar">
                  <img src="multimedia/gokupulgar.gif" class="ajustar">
                </div>';
          } if (isset($_GET['no_enviado'])) {
            echo "<p><strong>No se pudo enviar el correo.</strong></p>";
            echo '<div id="pulgar">
                    <img src="multimedia/saitama.gif" class="ajustar">
                  </div>';
                }     
      ?> 
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
  <!-- JAVASCRIPT ALERTAS -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="complementos/sweetcontact.js"></script>

</body>
</html>