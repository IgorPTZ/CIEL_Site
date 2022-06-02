<?php
    include 'conexao.php';

    if(isset($_GET['id_aluno'])) {
        $id = $_GET['id_aluno'];

        $sql = "DELETE FROM `aluno` WHERE id=$id";

        $result = mysqli_query($con, $sql);

        if($result) {
            header('location:listar_aluno.php');
        }
        else {
            die(mysqli_error($con));
        }
    }
?>