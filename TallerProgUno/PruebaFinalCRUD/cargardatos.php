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

    <section class="subirdatos">
        <div>
            <form action="guardar.php" method="POST" class="formulario">
                <strong class="formu">ID: </strong><input type="number" name="idanime" placeholder="ID" min="1" required><br><br>
                <strong class="formu">Nombre: </strong><input type="text" name="nomb" placeholder="Nombre" required><br><br>
                <strong class="formu">Género: </strong><input type="text" name="gen" placeholder="Género" required><br><br>
                <strong class="formu">URL: </strong><input type="text" name="arch" placeholder="URL" required><br><br>
                <input type="submit" name="enviar" class="btn" value="Agregar"><br><br>
            </form>
        </div>
        <div>
            <img src="multimedia/comer.gif" alt="">
        </div>

    </section>

    <!-- AQUÍ LE DAMOS USO A ?correcto e ?incorrecto en la URL -->
    <section class="siono">
      <?php            
        if (isset($_GET['correcto'])) {
          echo "<p><strong>CARGA EXITOSA</strong></p>";
          echo '<div id="pulgar">
                  <img src="multimedia/gokupulgar.gif" class="ajustar">
                </div>';
          } if (isset($_GET['incorrecto'])) {
            echo "<p><strong>Error en la carga, puede que el ID ya esté en uso.</strong></p>";
            echo '<div id="pulgar">
                    <img src="multimedia/saitama.gif" class="ajustar">
                  </div>';
                }     
      ?> 
    </section>

    <section class="explicar">
    <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <strong>¿Qué es el ID?</strong> 
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">El ID es el número de registro para la base de datos, es muy importante que este ID no se repita para que puedan agregarse los datos a la base. En la sección de abajo puedes consultar cuáles ID ya están en uso.</a></div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <strong>Nombre y Género</strong> 
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Al archivo que desea guardar le puede colocar cualquier nombre que desee, mismo caso con el género. Aunque sería ideal que le pueda colocar un nombre y un género acorde a la temática de la página.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
       <strong>¿Cómo copio la URL?</strong>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">A continuación le explicaré cómo copiar la URL de YouTube correctamente: 
        <br><br><h5>PRIMER PASO: </h5>
        <img src="multimedia/explicacion1.jpg" alt="">
        <br><br><h5>SEGUNDO PASO: </h5>
        <img src="multimedia/explicacion2.jpg" alt="">
        <br><br><h5>TERCER PASO: </h5>
        <img src="multimedia/explicacion3.jpg" alt="">

      </div>
    </div>
  </div>
</div>

    </section>

    <section class="ocupados">
      
      <h3> ID ocupados: </h3>
        <?php  
            include("conectarbd.php");

            $lista = mysqli_query($conectar, "SELECT * FROM animes ORDER BY id");

            while($listar_animes = mysqli_fetch_assoc($lista)) {?>

            <div class="idocupado">
                <p><strong> ID:</strong> <?php echo $listar_animes['id'] ?> </p>
                <div class="linea"></div>
              
            </div>
            <?php } ?>
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
    <script src="complementos/sweetsubir.js"></script>

</body>
</html>