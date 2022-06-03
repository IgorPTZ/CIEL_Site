<?php
  include 'conexao.php'; ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    
    <title>Listagem de alunos</title>
  </head>
  <body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a class="text-light" href="cadastrar_aluno.php">Cadastrar aluno</a>
        </button>

        <button class="btn btn-primary my-5">
            <a class="text-light" href="login.php">Sair</a>
        </button>

        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Nome</th>
              <th scope="col">Cpf</th>
              <th scope="col">Telefone</th>
              <th scope="col">Serie</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql="SELECT * FROM `aluno`";

              $result=mysqli_query($con, $sql);

              if($result) {
                while($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];

                  $nome = $row['nome'];
  
                  $cpf = $row['cpf'];
  
                  $telefone = $row['telefone'];
  
                  $serie = $row['serie'];

                  echo '<tr>
                          <th scope="row">'. $id . '</th>
                          <td>' . $nome . '</td>
                          <td>' . $cpf . '</td>
                          <td>' . $telefone . '</td>
                          <td>' . $serie . '</td>
                          <td>
                            <button class="btn btn-primary"><a class="text-light" href="alterar_aluno.php?id_aluno='. $id . '">Alterar</a></button>
                            <button class="btn btn-danger"><a class="text-light" href="excluir_aluno.php?id_aluno=' . $id . '">Excluir</a></button>
                          </td>
                        </tr>';
                }
              }
            ?>
          </tbody>
        </table>
    </div>
  </body>
</html>