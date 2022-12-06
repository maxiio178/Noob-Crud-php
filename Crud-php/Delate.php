<?php

include("conexion.php");

  $id=$_GET['id'];

  $query="DELETE FROM autos WHERE id='$id'";
  $resultados = $conexion-> query($query);

    if($resultados){
        Header("Location: Lista.php");
    }
?>   