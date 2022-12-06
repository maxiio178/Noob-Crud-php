<?php
include("conexion.php");

  $id= $_REQUEST['id'];

  $query="SELECT * FROM autos WHERE id='$id'";
  $resultado= $conexion->query($query);
  $row=$resultado->fetch_assoc()
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <title>Update</title>
</head>
<body class="bg-dark">

  <div class="container mt-5">
    <div class="row">
      <div class="col md-3">
        <h1 class="text-bg-dark">Actualizando datos.</h1>

        <form action="handleUpdate.php" method="POST">
          <input type=text class="form-control mb-3" name="id" value="<?php echo $row['id'];?>">
          <input type=text class="form-control mb-3" name="anho" value="<?php echo $row['anho'];?>">
          <input type=text class="form-control mb-3" name="modelo" value="<?php echo $row['modelo'];?>">
          <input type=text class="form-control mb-3" name="marca" value="<?php echo $row['marca'];?>">

          <input type="submit" class="btn btn-primary" value="Save">
        
        </form>
      </div>
    </div>
</body>
</html>