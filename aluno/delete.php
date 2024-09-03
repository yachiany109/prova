</<?php 
    
    include "conexao.php";
    
    $id = $_GET['id'];
    $delete = "DELETE FROM aluno WHERE id = $id";
    $resultado = $conn->query($delete);

    header('location: listar.php');
    
    exit();


?>