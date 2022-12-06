<?php
include("conexion.php");

    $id= $_POST['id'];
    $anho= $_POST['anho'];
    $modelo= $_POST['modelo'];
    $marca= $_POST['marca'];

    $query="INSERT INTO autos(id,anho,modelo,marca) VALUES('$id','$anho','$modelo','$marca')";
    $response= $conexion -> query($query);

    if($response){
        header("Location: Lista.php");
    }
    else{
        echo "Intenta De nuevo...";
    }
?>
