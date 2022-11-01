<?php
  
  //conexão
  require_once 'PHP/db_connect.php';


  //
  if(isset($_POST['enviar-formulario-cadastro'])):
    $erros = array();
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($nome) or empty($sobrenome) or empty($email) or empty($senha)):
      $erros[] = 'Preencha os campos corretamente!';
    else:
      $senha_cripto = md5($senha);
      $sql = "INSERT INTO usuarios(id, nome, sobrenome, email, senha) VALUES (NULL, '$nome', '$sobrenome', '$email', '$senha_cripto')";

      if(mysqli_query($connect, $sql)):
        $erros[] = "Cadastrado com sucesso!";
        header('Location: login.php');        
      else:
        $erros[] = 'Erro ao cadastrar!';
      endif;
    endif;
  endif;

?>