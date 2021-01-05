<?php
if(!isset($_GET["id"])){
  Header('Location: index.php');
  die();
}
$inicio = "";
$propiedades = "";
$blog = "active";
$contact = "";
include 'html/menu.html';
require 'assets/conexion.php';
$id = $_GET["id"];

$sql = "SELECT * FROM blog where cod_blog=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>
<style>
.sticky-wrapper{
  height:150px !important;
}
body{
  background: rgba(0, 0, 0, 0.04);
}

</style>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?= $row["imagen_blog"]; ?>" alt="imagen blog" width="300">
            </div>
            <div class="col-md-8">
                <h3 class="de"><?= $row["nombre_blog"];?></h3>
                <p><?= nl2br($row["descripcion_blog"]); ?></p>
            </div>
        </div>
  </div>

  <!-- Some spacing 😉 -->
  <div class="spacer"></div>




<?php
}
} else {
  echo "0 results";
}

mysqli_close($conn);

include "html/pie.html";
?>