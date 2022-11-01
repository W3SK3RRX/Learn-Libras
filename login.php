<?php 
  //conexão
  require_once "PHP/db_connect.php";
  require_once 'includes/menssage.php';
  //sessão
  //login
  if(isset($_POST['enviar-formulario-login'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
      $erros[] = "O campo login/senha precisa ser preenchido!";
    else:
      $sql = "SELECT email FROM usuarios WHERE email = '$login'";
      $resultado = mysqli_query($connect, $sql);

      if(mysqli_num_rows($resultado) > 0):
        $senha = md5($senha);
        $sql = "SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) == 1):
          $dados = mysqli_fetch_array($resultado);
          mysqli_close();
          $_SESSION['logado'] = true;
          $_SESSION['id_usuario'] = $dados['id'];
          header('Location: home.php');
        else:
          $erros[] = 'Usuário ou Senha incorretos!';
        endif;
      else:
        $erros[] = 'Usuário inexistente!';
      endif;
    endif;
  endif;
?>


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
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
    <img src="assets/img/Learn Libras logo.png" class="mb-4" width="auto" height="auto">
    <h1 class="h3 mb-3 fw-normal"></h1>

    <div class="form-floating">
      <input name="login" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button name="enviar-formulario-login" class="w-100 btn btn-lg btn btn-warning " type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy;Learn Libras - 2022</p>
  </form>
</main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        M.AutoInit();
    </script>
      
  </body>
</html>
