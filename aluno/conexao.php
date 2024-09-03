<?php 
$servidor = "localhost:3307";
$user = "root";
$pass = "";
$db = "aluno";

$conn = new mysqli($servidor,$user,$pass,$db);

if($conn){
    echo ("conectado com sucesso!");
}



?>