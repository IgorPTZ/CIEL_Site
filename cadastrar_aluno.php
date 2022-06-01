<?php
  include 'conexao.php';

  if(isset($_POST['inserir'])) {
    $nome = $_POST['nome'];
    
    $cpf = $_POST['cpf'];
    
    $telefone = $_POST['telefone'];
    
    $serie = $_POST['serie'];

    $sql = "INSERT INTO `aluno` (nome, cpf, telefone, serie) VALUES ('$nome', '$cpf', '$telefone', '$serie')";
  
    $result = mysqli_query($con, $sql);

    if($result) {
      echo "Aluno cadastro com sucesso!";
    }
    else {
      die(mysqli_error($con));
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro de alunos</title>
  </head>
  <body>
    <div class="container my-5">
      <h3>Cadastro do aluno</h3>
      <form method="post">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>

        <div class="mb-3">
          <label for="cpf" class="form-label">Cpf</label>
          <input type="text" class="form-control" id="cpf" name="cpf">
        </div>

        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="telefone" name="telefone">
        </div>

        <div class="mb-3">
        <label for="serie" class="form-label">Serie</label>
          <input type="text" class="form-control" id="serie" name="serie">
        </div>

        <button type="submit" class="btn btn-primary" name="inserir">Inserir</button>
      </form>
    </div>
  </body>
</html>