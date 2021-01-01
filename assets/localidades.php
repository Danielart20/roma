<?php

require 'conexion.php';
$municipios = [];
$sql = "SELECT localizacion_propiedad FROM propiedades";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    array_push($municipios, $row);
}
echo json_encode($municipios);



?>