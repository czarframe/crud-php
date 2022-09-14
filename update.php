<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Insert</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
  <?php
require ('conexao.php');

$id = $_POST['id'];
$descricao = $_POST['descricao'];
$marca = $_POST['marca'];
$estoque = $_POST['estoque'];
$preco = $_POST['preco'];
?>


  <?php if (is_null($id) || $id == ''): ?>
  <div class="alert alert-danger" role="alert">
    Id não encontrada!
  </div>
  <?php $erros++ ?>
  <?php
endif; ?>

  <?php if (is_null($descricao) || $descricao == ''): ?>
  <div class="alert alert-danger" role="alert">
    Descrição não pode estar em branco!
  </div>
  <?php $erros++ ?>
  <?php
endif; ?>

  <?php if (is_null($marca) || $marca == ''): ?>
  <div class="alert alert-danger" role="alert">
    Marca não pode estar em branco!
  </div>
  <?php $erros++ ?>
  <?php
endif; ?>

  <?php if (is_null($estoque) || $estoque == '' || $estoque < 0): ?>
  <div class="alert alert-danger" role="alert">
    Informe uma quantidade em estoque válida!
  </div>
  <?php $erros++ ?>
  <?php
endif; ?>

  <?php if (!is_numeric($estoque)): ?>
  <div class="alert alert-danger" role="alert">
    Informe um valor como quantidade em estoque!
  </div>
  <?php $erros++ ?>
  <?php
endif; ?>

  <?php if (is_null($preco) || $preco == '' || $preco < 0): ?>
  <div class="alert alert-danger" role="alert">
    Informe um preço válido!
  </div>
  <?php $erros++ ?>
  <?php
endif; ?>

  <?php if (!is_numeric($preco)): ?>
  <div class="alert alert-danger" role="alert">
    Informe um valor como preço!
  </div>
  <?php $erros++ ?>
  <?php
endif; ?>

  <?php
$update = false;
if ($erros == 0)
{
    $update = "UPDATE produtos SET descricao = '$descricao', marca = '$marca', estoque = '$estoque', preco = '$preco' WHERE id = $id";

    mysqli_query($conexao, $update);
}
?>
  <?php if ($update): ?>
  <div class="alert alert-success" role="alert">
    Produto editado!
  </div>
  <a href="select.php" class="btn btn-success">Lista de Produtos</a>
  <?php
else: ?>
  <div class="alert alert-danger" role="alert">
    Erro ao atualizar!
  </div>
  <a href="select.php" class="btn btn-danger">Lista de Produtos</a>
  <?php
endif; ?>
</body>
</html>
