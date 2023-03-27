<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Pilar Orjuela Riveros">


    <title>Psicología para todos - Tu salud mental va primero</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>

    <!-- Estilos Personalizados -->
    <link href="css/paginastyle.css" rel="stylesheet">

     <!-- Librería de íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>

    <div class="container">

      <header class="masthead">
        <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Menú">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nosotros.html">Sobre Nosotros</a>
              </li>

            </ul>
          </div>
        </nav>
        <a href="index.html">
          <img src="imagenes/logo.png">
        </a>

      </header>

        <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sobre Nosotros</li>
      </ol>
    </nav>

      <main role="main" class="container">

        <div class="row row-offcanvas row-offcanvas-right">

          <div class="col-12 col-md-9">

            <div class="row mt-4">
              <div class="col-12 col-sm-4">
                <h2>Nuestro equipo</h2>
                <p>Profesionales Colombianos con deseos de ayudar y apoyar a la población general en cuanto a salud mental, desarrollo humano, y progreso personal. </p>
                <p><a class="btn btn-secondary" href="#"  role="button">Ver &raquo;</a></p>
              </div>
              <div class="col-12 col-sm-4">
                <h2>Misión</h2>
                <p>Aplicar nuestros conocimientos y experiencias para ofrecer apoyo emocional y psicológico a nuestros pacientes. </p>
                <p><a class="btn btn-secondary" href="#"  role="button">Ver &raquo;</a></p>
              </div>
              <div class="col-12 col-sm-4">
                <h2>Visión</h2>
                <p>Ser la referencia nacional de oferta de salud mental para Colombia. Proveer servicios de calidad y a bajo costo para cualquier persona.</p> </p>
                <p><a class="btn btn-secondary" href="#" role="button">Ver &raquo;</a></p>
              </div>

            </div>

            <div class="row">
              <div class="col">
                <h2>¿Cómo funciona la terapia en línea?</h2>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/jQLx6-gSp2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-3">
            <h4>Enlaces de Ayuda</h4>
            <div class="list-group">
              <a href="#" target="_blank" class="list-group-item">Ejemplo 1 </a>
              <a href="#" target="_blank" class="list-group-item">Ejemplo 2</a>
              <a href="#" v class="list-group-item">Otra fuente</a>
              <a href="#" target="_blank" class="list-group-item">Más fuentes</a>
              <a href="#" target="_blank" class="list-group-item">Ideas</a>
              <a href="#" target="_blank" class="list-group-item">Videos</a>
              <a href="#" target="_blank" class="list-group-item">Artículos</a>
              <a href="#" target="_blank" class="list-group-item">Meditación</a>
              <a href="#" target="_blank" class="list-group-item">Redes sociales</a>
              <a href="#" target="_blank" class="list-group-item">Otros</a>
              <a href="#" target="_blank" class="list-group-item">Ejemplos</a>
            </div>
          </div>
        </div>

        <h2>¿Deseas intentar Terapia en línea?</h2>
            <br>
            <h4>Ingresa la información en el formulario:</h4>
            <br>
<br>
            <form action="insertar.php" method="post">

              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <div class="controls">
                    <input name="nombre" id ="Nombre" type="text" class="form-control" value="<?php echo !empty($nombre)?$nombre:'';?>">
                    <label class="form-label" for="Nombre">Nombre</label>
                  </div>
                </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <div class="controls">
                    <input name="apellido" id="Apellido" type="text" class="form-control" value="<?php echo !empty($apellido)?$apellido:'';?>">
                    <label class="form-label" for="form3Example2">Apellido</label>
                  </div>
                </div>
              </div>
      </div>

              <div class="form-outline mb-4">

                <input name ="email" id="email" type="text" class="form-control" value="<?php echo !empty($email)?$email:'';?>">
                <label class="form-label" for="email">Correo electrónico</label>
              </div>





              <div class="form-check d-flex  mb-4">
                <input name="suscrito" id="suscrito" class="form-check-input me-2" type="checkbox" value="Si" checked />
                <label class="form-check-label" for="suscrito">
                  Deseo suscribirme al boletín de noticias
                </label>
              </div>


              <button type="submit" class="btn btn-primary btn-block mb-4">Enviar</button>



            </form>







       
        </div>


        <br>
        <br>
        <br>
        <footer>
          <div class="footer" id="footer">
              <div class="container">
                <h4>María del Pilar Orjuela Riveros </h4>
                <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-3">
                          <p>Madre, enfermera, educadora, y psicóloga en desarrollo.</p><br/>
                          <p>Estudiante de la vida, y de todo lo positivo a mi alrededor.</p>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-5">
                          <h3> Contacto </h3>
                          <ul>
                              <li><a class="email"href="#"> PilarOrjuela@FalsoCorreo.com </a></li>
                              <br/>
                              <li> <p> Calle 900 </p> </li>
                              <li> <p> #1234A-25 </p> </li>
                              <li> <p> Bogotá, Colombia</p> </li>
                          </ul>
                      </div>
                      <div class="col-lg-4 col-sm-4 col-xs-4">
                        <h3> <a href="#" style="margin-top: 5em"> Mis Redes Sociales</a> </h3>
                          <ul>
                              <li> <p><a href="#"> <i class="fa fa-facebook"></i> Psicóloga Pilar Orjuela</a></p></li>
                              <li> <p><a href="#"> <i class="fa fa-twitter"></i> @PiliPsicologica</a></p></li>
                          </ul>
                      </div>


              </div>

          </div>


          <div class="footer-bottom">
              <div class="container">
                  <p class="pull-left copyright"> Derechos reservados - Actividad Práctica 2, Desarrollo de un sitio web </p>
                  <br>
                  <br>
                  <a href="verpacientes.php"> ADMINISTRAR PACIENTES (BACKEND) </a>

              </div>
          </div>


      </footer>



          </body>
        </html>
