<?php
if(!isset($_GET["id"])){
  Header('Location: index.php');
  die();
}
include 'html/menu.html';
require 'assets/conexion.php';
$id = $_GET["id"];

$sql = "SELECT * FROM propiedades where cod_propiedad=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>
<div class="container">
  <h2 class="mt-3"><?= $row["nombre_propiedad"]; ?></h2>
  <span>Ref: <?= $row["ref_propiedad"]; ?></span>

  <ul class="detalles">
    <li><?= $row["habita_propiedad"]; ?> habitaciones</li>
    <li><?= $row["ban_propiedad"]; ?> baños</li>
    <li><?= $row["area_propiedad"]; ?> m2</li>
  </ul>

















  

  
</div>




<?php
}
} else {
  echo "0 results";
}

mysqli_close($conn);


?>