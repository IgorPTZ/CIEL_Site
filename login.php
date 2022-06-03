<?php
  include 'conexao.php';

  if(isset($_POST['entrar'])) {
    $email = $_POST['email'];
    
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM `colaborador` WHERE email='$email' AND senha='$senha'";
  
    $result = mysqli_query($con, $sql);

    if($result) {
        if(mysqli_num_rows($result) > 0) {
            header('location:listar_aluno.php');
        }
        else {
            header('location:login.php');
        }
    }
    else {
      die(mysqli_error($con));
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">

    <title>Area do colaborador</title>
  </head>
  <body>
    <div class="container my-5">
        <h3>Area do colaborador</h3>

        <button class="btn btn-primary my-5">
            <a class="text-light" href="index.html">Retornar para o site</a>
        </button>
      <form method="post">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha">
        </div>

        <button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
      </form>
    </div>
  </body>
</html>