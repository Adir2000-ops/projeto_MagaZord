<?php
  
  
    if(!empty($_POST['descricao'])){
     $descricao = $_POST['descricao'];
     $codigo = $_POST['codigo'];

     $stmt = $conn->prepare("INSERT INTO megazord.pessoa (idPessoa,nome,cpf) VALUES (:id,:n,:c)");
     $stmt->bindValue(':id', $codigo);
     $stmt->bindValue(':n', $nome);
     $stmt->bindValue(':c', $cpf);
     $stmt->execute();
 ?>
 <script>
  window.location.href = "listar.php";
 </script>
<?php
}

?>
<html>
 <head>
 <link  rel="stylesheet" href="../bootstrap-4.5.3-dist_/css/bootstrap.min.css">
</head>
<body>
<form method="post">
     <div class="form-group">
         <label for="codigo">Código</label>
         <input type="number" class="form-control" name="codigo" id="codigo" placeholder="Código">
     </div>
     <div class="form-group">
         <label for="descricao">Nome</label>
         <input type="text" class="form-control" name="nome" id="nome" placeholder="nome">
     </div>
     <div class="form-group">
         <label for="descricao">Cpf</label>
         <input type="text" class="form-control" name="cpf" id="cpf" placeholder="cpf">
     </div>
    
     <button type="submit" class="btn btn-info">Adicionar</button>
     <a  href ="listar.php" > voltar </a>
</form>
</body>
</html>