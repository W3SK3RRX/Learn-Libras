<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="assets/img/Learn Libras logo.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    
<?php require_once 'includes/style.php' ?>

  </head>
<body class="text-center">
  <header class="p-3 text-bg-dark fixed-top">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="home.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="assets/img/Learn Libras logo.png" class="bi me-2" width="auto" height="50" role="img">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
        </ul>
      </div>
    </div>
  </header>

  <?php
    if(!empty($erros)):
      foreach($erros as $erro):?>
        <script>
          window.onload = function(){
            alert('<?php echo $erro ?>');
          }
        </script>     
      <?php 
      endforeach;
    endif;
  ?>
   
<main class="form-signin w-100 m-auto">
  <form action="create.php" method="POST" >
    <img src="assets/img/Learn Libras logo.png" class="mb-4" width="auto" height="auto">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input name="nome" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Nome</label>
    </div>
    <div class="form-floating">
      <input name="sobrenome" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Sobrenome</label>
    </div>
    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Senha</label>
    </div>

    <button name="enviar-formulario-cadastro" class="w-100 btn btn-lg btn btn-warning " type="submit">Cadastrar-se</button>
    <p class="mt-5 mb-3 text-muted">&copy;Learn Libras - 2022</p>
  </form>
</main>    
  </body>
</html>
