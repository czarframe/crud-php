<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="card m-4 bg-dark"> 
      <div class="card-body">
        <table class="table table-dark table-striped">
          <tr>
              <td>ID</td>
              <td>Descrição</td>
              <td>Marca</td>
              <td>Estoque</td>
              <td>Preço</td>
              <td>Excluir</td>
              <td>Editar</td>
          </tr>
          <?php
            require('conexao.php');
            $select = mysqli_query($conexao, 'SELECT * FROM produtos ORDER BY id ASC');
          ?>
          <?php while($produto = mysqli_fetch_assoc($select)): ?>
            <tr>
            <td><?=$produto['id']?></td>
            <td><?=$produto['descricao']?></td>
            <td><?=$produto['marca']?></td>
            <td><?=$produto['estoque']?></td>
            <td><?=$produto['preco']?></td>
            
            <td><a href="delete.php?id=<?=$produto['id']?>" class="btn btn-danger">Excluir</a></td>

            <td><a href="editar.php?id=<?=$produto['id']?>" class="btn btn-info">Editar</a></td>
            
          <?php endwhile; ?>
          
        </table>
      </div>
      <div class="card-footer">
        <a href="cadastro.php" class="btn btn-light">Novo Cadastro</a>
      </div>
    </div>
  </body>
</html>