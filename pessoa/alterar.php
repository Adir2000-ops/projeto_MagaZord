<?php

  if(!empty($_GET['id'])){
     $id = $_GET['id'];   
    
     $stmt = $conn->prepare("SELECT * FROM pessoa WHERE idPessoa = :id");
     $stmt->bindValue(':id', $id);
     $stmt->execute();
     $regiao = $stmt->fetch();   
   }
   if(!empty($_POST['descricao'])){
     $descricao = $_POST['descricao'];
     $codigo = $_POST['codigo'];

     $stmt = $conn->prepare("UPDATE megazord.pessoa SET idPessoa = :id , nome = :n , cpf = :c WHERE idPessoa = :codigo");
     $stmt->bindValue(':id', $id);
     $stmt->bindValue(':n', $n);
     $stmt->bindValue(':c', $C);
     $stmt->execute();
 ?>
 
 <script>
  window.location.href = "pessoa.php";
 </script>
<?php
}

?>
 <!doctype html>
 <html lang="pt-br">
 <link  rel="stylesheet" href="../bootstrap-4.5.3-dist_/css/bootstrap.min.css">
</head>
<body>
<form method="post">
     <div class="form-group">
         <label for="codigo">id</label>
        <input type="number" class="form-control" name="idPessoa" id="idPessoa" placeholder="codigo" value="<?= $idPessoa['id'] ?>">
     </div>
     <div class="form-group">
         <label for="descricao">nome</label>
         <input type="text" class="form-control" name="nome" id="nome" placeholder="nome" value="<?= $idPessoa['n'] ?>">
     </div>
     <div class="form-group">
         <label for="cpf">cpf</label>
         <input type="text" class="form-control" name="cpf" id="cpf" placeholder="cpf" value="<?= $idPessoa['c'] ?>">
     </div>
    
     <button type="submit" class="btn btn-info">Alterar</button>
</form>
</body>
</html>