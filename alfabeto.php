<?php
 
require_once 'PHP/logado.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn-Libras</title>
    <link rel="icon" type="image/x-icon" href="assets/img/Learn Libras logo.png">
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/features/">
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
    <link href="assets/css/features.css" rel="stylesheet">
    <link href="assets/css/headers.css" rel="stylesheet">
    <link href="assets/css/heroes.css" rel="stylesheet">
  </head>




<body>

  <?php require_once 'includes/svg.php' ?>


  <header class="p-3 text-bg-dark fixed-top">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="home.php" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="perguntas_alfabeto.php" class="nav-link px-2 text-white">Exercícios</a></li>
        </ul>

        <div class="text-end">
           <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $dados['nome'];?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="area_curso.php">Curso</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="PHP/logout.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

<main>

  <!--================================================== -->
  <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="assets/img/Learn Libras logo.png" alt="" width="auto" height="auto">
    <h1 class="display-5 fw-bold">Alfabeto manual</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">É um recurso das línguas de sinais que utiliza as mãos para representar o alfabeto das línguas orais, cada letra ou número são representadas por configurações de mão específicas, o Alfabeto Manual também é conhecido como Alfabeto Digital, Datilologia ou Dactilologia.</p>
    </div>
  </div>  

  <!-- ============================================== -->


  <img src="Conteudos/alfabeto-manual.png" class="rounded mx-auto d-block"  class="img-fluid" alt="...">
  
  <hr class="featurette-divider hidden"> 

<!-- ============================================== -->
  <div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Exercícios</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Agora é hora de praticar!<br> Responda corretamente as perguntas sobre o Alfabeto Manual.</p>
      <a href="perguntas_alfabeto.php"><button type="button" class="btn btn-warning">Acessar</button></a>
    </div>
  </div>  

  <hr class="featurette-divider hidden"> 
  <!-- /END THE FEATURETTES -->

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
