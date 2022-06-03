<?php
  include 'conexao.php'; 

  $idAluno = $_GET['id_aluno'];

  $sqlSelect = "SELECT * FROM `aluno` WHERE id=$idAluno";

  $result = mysqli_query($con, $sqlSelect);

  $row = mysqli_fetch_assoc($result);

  $nome = $row['nome'];

  $cpf = $row['cpf'];

  $telefone = $row['telefone'];

  $serie = $row['serie'];

  if(isset($_POST['alterar'])) {
    $nomeAlterado = $_POST['nome'];
    
    $cpfAlterado = $_POST['cpf'];
    
    $telefoneAlterado = $_POST['telefone'];
    
    $serieAlterada = $_POST['serie'];

    $sqlUpdate = "UPDATE `aluno` SET nome='$nomeAlterado', cpf='$cpfAlterado', telefone='$telefoneAlterado', serie='$serieAlterada' WHERE id = $idAluno";
  
    $result = mysqli_query($con, $sqlUpdate);

    if($result) {
      header('location:listar_aluno.php');
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

    <title>Cadastro de alunos</title>
  </head>
  <body>
    <div class="container my-5">
      <h3>Cadastro do aluno</h3>
      <form method="post">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome ?>">
        </div>

        <div class="mb-3">
          <label for="cpf" class="form-label">Cpf</label>
          <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $cpf ?>">
        </div>

        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone ?>">
        </div>

        <div class="mb-3">
        <label for="serie" class="form-label">Serie</label>
          <input type="text" class="form-control" id="serie" name="serie" value="<?php echo $serie ?>">
        </div>

        <button type="submit" class="btn btn-primary" name="alterar">Alterar</button>
      </form>
    </div>
  </body>
</html>