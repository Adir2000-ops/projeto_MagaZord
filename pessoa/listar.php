<?php
 require_once  "../conexao.php" ;

 $stmt = $conn->prepare("SELECT * FROM pessoa");
 $stmt->execute();
 $resultado = $stmt->FetchAll();

     ?>

<!doctype html>
 <html lang="pt-br">
  <head>
   <link   rel = " stylesheet " href = " ../bootstrap-4.5.3-dist_ / css / bootstrap.min.css ">
  </head>
<body>
   <a href = " cadastrar.php " class =" btn btn-info "> Adicionar </a>
   <table border ="2" class = "table table-stripes">
       <tr>
        <td> Id </td>
        <td> Nome </td>
        <td> Cpf </td>
        <td> Ações </td>
       </tr >
       <?php
        if ( count ( $resultado )) {
          foreach ( $resultado  as  $row ) {
        ?>
          <tr>
            <td> <?=$row [ 'idPessoa' ] ?> </td>
            <td> <?=$row [ 'nome' ] ?> </td>
            <td> <?=$row [ 'cpf' ] ?> </td>
            <td>
                <a  href ="alterar.php?&Id=<?=$row['idPessoa']?>" > Alterar </a>
                <a  href ="?Acao=deletar&id=<?=$row['idPessoa']?>" > Excluir </a>
            </td >
          </ tr >  
        <?php
          }
        } else {
            echo "<tr> <td colspan = -\"3\"> Banco de Dados Vazio</td> </tr>" ;
        }
        ?>
    </table>
  </body>
</html>

