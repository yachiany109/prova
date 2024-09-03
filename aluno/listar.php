<?php
     include "conexao.php";
     $select = "SELECT * FROM aluno ";
     $resultado = $conn->query($select);
     
?>
    <table border="1">
          <thead>
               <th>ID</th><th>nome</th><th>nota</th><th>id</th>

          </thead>
          <tbody>
               <?php 
                    if($resultado->num_rows > 0){
                          while($nome=$resultado->fetch_object()){
                         echo "<tr>";
                              echo "<td>".$nome->id."</td>";
                              echo "<td>".$nome->nome."</td>";
                              echo "<td>".$nome->nota."</td>";
                              
                              
                         echo "<td>";
                              echo "<a href= 'delete.php?id=$nome->id'>deletar</a>";
                              echo "<a href= 'editar.php?id=$nome->id'>editar</a>";

                         echo "</td>";
                    }
                         echo "</td>";
               }else{
                    echo"<tr><td>nenhum dado encontrado</td><tr>";
                }
               ?>

          </tbody>

<a href="inserir.php">< voltar</a>



    </table>