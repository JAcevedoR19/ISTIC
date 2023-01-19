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

  <div>
    <!-- MENU LATERAL IZQUIERDO -->
      <nav class="menu">
        <table>
          
          <td><a href="#Shonen"><strong>SHOUNEN</strong></a></td>
          <td><a href="#Gore"><strong>GORE</strong></a></td>
          <td><a href="#Deportes"><strong>DEPORTES</strong></td>
          <tr>
          <td><a href="#Mecha"><strong>MECHA</strong></td>
        </table>
      </nav>
  </div>

  <section id="Shonen">

      <h2><strong>SHOUNEN</strong></h2>

      <div id="caja_shonen_a">
        <!-- BOOTSTRAP - CAROUSEL -->      
        <nav>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="multimedia/samuraix1.jpg" class="d-block w-100" alt="Shonen">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Rurouni Kenshin</h5>
                      <p>El mejor samurari está aquí</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="multimedia/hunterxhunter2.jpg" class="d-block w-100" alt="Shonen">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Hunter x Hunter</h5>
                      <p>Vive junto a Gon sus aventuras sin igual.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="multimedia/onepiece3.jpg" class="d-block w-100" alt="Shonen">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>One Piece</h5>
                      <p>¿El One Piece existe? Acompaña a Luffy para descubrirlo.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

        </nav>
      </div>

      <div id="caja_shonen_b">
        <!-- BOOTSTRAP - ACCORDION -->
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Rurouni Kenshin
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Rurouni Kenshin:</strong> Ambientado en los primeros años de la era Meiji del Imperio del Japón, y también en los acontecimientos sucedidos en el tiempo Bakumatsu de la Dinastía Tokugawa. Himura Kenshin es el personaje principal que da nombre al anime. Está basado en el personaje histórico de Kawakami Gensai y en otros personajes históricos como el rōnin Musashi Miyamoto.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Hunter x Hunter
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Hunter x Hunter:</strong> La historia tiene como protagonista a Gon Freecss, un niño de doce años que desea encontrar a su padre a toda costa, por lo que decide convertirse en «cazador», justo como él, y de alguna forma hallar su paradero. A medida que avanza la historia, Gon se hace amigo de otros tres aspirantes a cazador: Leorio, Kurapika y Killua, quienes lo acompañarán en sus aventuras a lo largo del anime.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                One Piece
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>One Piece: </strong> One Piece es el manga más vendido de la revista Shonen Jump ( la más importante, reconocida y vendida del medio), de la editorial Shueisha, y de toda la historia de Japón, con más de 516 millones. Este maravilloso anime tiene a Luffy como personaje principal, quien con su tripulación conocidos como "los mugiwaras" van en busca de sus sueños, y poder encontrar el famoso tesoro One Piece.
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="videos">
        <h3>Noragami</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/3oFTHxkOzjE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <div class="videos">
        <h3>Enen No Shouboutai</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/JBqxVX_LXvk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <div class="videos">
        <h3>Black Clover</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/_6KZI74zKfE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
      </div>

  </section>

  <section id="Gore">

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