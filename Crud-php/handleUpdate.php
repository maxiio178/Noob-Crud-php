<?php
include("conexion.php");

    $id= $_POST['id'];
    $anho= $_POST['anho'];
    $modelo= $_POST['modelo'];
    $marca= $_POST['marca'];

    $query="UPDATE autos SET id='$id',anho='$anho', modelo='$modelo', marca='$marca' WHERE id='$id' ";
    $response= $conexion -> query($query);

    if($response){
        header("Location: Lista.php");
    }
    else{
        echo "Intenta De nuevo...";
    }
?>
