<?php

require 'conexion.php';
$tipo = $_POST['tipo'];
$localidad = $_POST['localidad'];
$data = [];


$sql = "SELECT * FROM propiedades where cod_tipo = $tipo and localizacion_propiedad = '$localidad'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if($row['cod_tipo'] == 1){
        $tipo = 'Alquiler';
      }else{
          $tipo = 'Venta';
        }
    $text = "<div class='col-md-4' onclick='window.location.href=\"mostrar_propiedad.php?id=$row[cod_propiedad]\"'>
                <div class='property'>
                        <a href='#' class='fh5co-property' style='background-image: url($row[imagenp_propiedad])'>
                        <span class='status'>$tipo</span>
                        <ul class='list-details'>
                            <li>$row[area_propiedad] m2<li>
                            <li>Dormitorios: $row[habita_propiedad]</li>
                            <li>Baños: $row[ban_propiedad]</li>
                        </ul>
                        </a>
                        <div class='property-details'>
                            <h3>$row[nombre_propiedad] </h3>
                            <span class='price'>$row[precio_propiedad] €</span>
                            <p class='descp'>$row[descripcion_propiedad].</p>
                            <span class='address'><i class='icon-map'>
                            </i>$row[calle_propiedad]</span>
                        </div>
                </div>
            </div>";    
    array_push($data,$text);
    }

    } else {
    $data = 'Actualmente no tenemos viviendas en esa zona';
    }
echo json_encode($data);
mysqli_close($conn);

?>