<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./stylesheet/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Formulario</title>
</head>
<body class="bg-dark">
  <center>
    <div class="container row">
        <h1 class="mb-3 mt-4">Ingresa la informacion de tu carro.<h1>
      <form action="Create.php" method="POST">
        <div class="mb-3 mt-3">
          <input type="text" name="id" placeholder="Id Car.."/>
        </div>
        <div class="mb-3">
          <input type="text" name="anho" placeholder="Año Car.."/>
        </div>
        <div class="mb-3 ">
        <input type="text" name="modelo" placeholder="Modelo Car.."/>
        </div>
        <div class="mb-3">
          <input type="text" name="marca" placeholder="Marca Car.."/>
        </div>
        <div>
          <input type="submit" class="btn btn-primary" value="Enviar"/>
        </div>
      </form>
    </div>
  </center>
</body>
</html>