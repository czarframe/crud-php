<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="card m-4 bg-dark text-light"> 
      <div class="card-body">
        <form action="insert.php" method="post">
          <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" class="form-control" id="descricao" required name="descricao">
          </div>
          <div class="mb-3">
            <label for="marca" class="form-label">Marca:</label>
            <input type="marca" class="form-control" id="marca" required name="marca">
          </div>
          <div class="mb-3">
            <label for="estoque" class="form-label">Estoque:</label>
            <input type="text" class="form-control" id="estoque" required name="estoque">
          </div>
          <div class="mb-3">
            <label for="preco" class="form-label">Preço:</label>
            <input type="text" class="form-control" id="preco" required name="preco">
          </div>
          <div class="mb-3 ">
            <input type="submit" class="form-control w-25 bg-light">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

