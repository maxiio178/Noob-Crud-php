<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AUTOMOVIL-LIST</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./stylesheet/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    <body class="bg-dark">
      <center>
        <div class="container col md-8 mt-4">
          <table class="table">
            <thead class="table-success table-striped">
              <tr>
                <th>ID</th>
                <th>AÑO</th>
                <th>MODELO</th>
                <th>MARCA</th>
                <th></th>
                <th></th>
               </tr>
             </thead>
            <tbody>
              <?php
                include("conexion.php");

                $query="SELECT * FROM autos";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
              ?>
                <tr>
                  <th class="text-bg-dark"><?php echo $row["id"]?></th>
                  <th class="text-bg-dark"><?php echo $row["anho"]?></th>
                  <th class="text-bg-dark"><?php echo $row["modelo"]?></th>
                  <th class="text-bg-dark"><?php echo $row["marca"]?></th>
                  <th><a href="Update.php? id=<?php echo $row['id']; ?>" class="btn btn-info">Editar</a></th>
                  <th><a href="Delate.php? id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a></th>
                </tr>
              <?php    
                }
              ?>
            </tbody>
          </table>
        </div>
        <a href="form.php" class="btn btn-primary mt-3">Add New</a>
      </center>
               
    </body>
</html>
