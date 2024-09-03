<?php
include "conexao.php";

    $nome = $_GET['nome'];
    $nota = $_GET['nota'];
    
    $insert = "INSERT INTO aluno (id, nome, nota) VALUES (NULL, '$nome', '$nota')";

    $resultado = $conn->query($insert);

    if($resultado == TRUE){
        echo "cadastrado com sucesso!";
    }else{
        echo "erro ao cadastrar!";
    }
?>