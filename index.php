<?php

include_once 'includes/menssage.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn-Libras</title>
    <link rel="icon" type="image/x-icon" href="assets/img/Learn Libras logo.png">
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/heroes/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">



<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
    <link href="assets/css/headers.css" rel="stylesheet">
    <link href="assets/css/heroes.css" rel="stylesheet">
  </head>




<body>

  <?php require_once 'includes/svg.php' ?>


  <header class="p-3 text-bg-dark fixed-top">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="assets/img/Learn Libras logo.png" class="bi me-2" width="auto" height="50" role="img">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="#sobre" class="nav-link px-2 text-white">Sobre</a></li>
          <li><a href="#contato" class="nav-link px-2 text-white">Contato</a></li>
        </ul>

        <div class="text-end">
          <a href="login.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
          <a href="cadastro.php"><button type="button" class="btn btn-warning">Cadastrar-se</button></a>
        </div>
      </div>
    </div>
  </header>

<main>

  <div>
    <img src="assets/img/Learn1.png"class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="400">  
  </div>

  <!--===================================================-->


  <div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Sobre a plataforma</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Learn-Libras é uma plataforma web voltada para o aprendizado de Libras, oferecendo um curso básico introdutório com materiais que vão ajudar a aperfeiçoar o contato com essa língua.</p>
    </div>
  </div>


  <!--===================================================-->
  

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <br>
    <hr class="featurette-divider">
    <div class="px-4 pt-5 my-5 text-center border-bottom">
      <h1 class="display-4 fw-bold">Acesso ao curso</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">O acesso aos conteúdos do curso é disponibilizado após a realização do cadastro na plataforma.</p>
          <div class="justify-content-sm-center mb-5">
            <a href="area_curso.php"><button type="button" class="btn btn-warning">Acessar curso</button></a>
          </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
          <div class="container px-5">
            <img src="assets/img/tutorial.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
          </div>
        </div>
    </div>        
 

    <!-- ============================================== -->

    
    <span id = "sobre"></span>
    <div></div>
    <h2 class="featurette-heading fw-bold lh-1 center">Sobre o curso</h2>

    <br>
    <br>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-semibold lh-1">Objetivos</h2>
        <p class="lead">Propiciar a apredizagem da Libras, com o intuito de conhecer seus aspectos linguísticos
e principalmente gerar a inclusão de pessoas com surdez.</p>
      </div>
      <div class="col-md-5">
        <img src="assets/img/1.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-semibold lh-1">Conteúdos abordados</h2>
        <p class="lead">Introdução a Libras<br>Alfabeto<br>Vocabulário</p>
      </div>
      <div class="col-md-5 order-md-1">
         <img src="assets/img/4.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-semibold lh-1">Metologia de ensino</h2>
        <p class="lead">Após a leitura dos materiais de estudo disponíveis na área do curso, o usuário terá acesso a exercícios de verificação de aprendizagem.</p>
      </div>
      <div class="col-md-5">
         <img src="assets/img/6.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee">
      </div>
    </div>

    <hr class="featurette-divider hidden">   

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

  <!-- FOOTER -->
  <div id="contato" class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <span class="mb-3 mb-md-0 text-muted">&copy; Learn libras - 2022</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </footer>
  </div>
</main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
