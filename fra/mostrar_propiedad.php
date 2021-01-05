<?php
if(!isset($_GET["id"])){
  Header('Location: index.php');
  die();
}
$inicio = "";
$propiedades = "active";
$blog = "";
$contact = "";
include 'html/menu.html';
require 'assets/conexion.php';
$id = $_GET["id"];

$sql = "SELECT * FROM propiedades where cod_propiedad=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $extras = explode(",",$row["extra_propiedad"]);
    $dir = explode(",",$row["calle_propiedad"]);
    $calle= $dir[0];
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
  <h2 class=" font-propiedad"><?= $row["nombre_propiedad"]; ?></h2>
  <span class="font-propiedad">Ref: <?= $row["ref_propiedad"]; ?></span>

  <ul class="detalles mb-4">
    <li><i class="fas fa-bed"></i> <?= $row["habita_propiedad"]; ?> habitaciones</li>
    <li><i class="fas fa-bath"></i> <?= $row["ban_propiedad"]; ?> baños</li>
    <li><i class="fas fa-chart-area"></i> <?= $row["area_propiedad"]; ?> m2</li>
  </ul>
<!-- Photoswipe galery START-->

    <div id="gallery" class="gallery" itemscope itemtype="http://schema.org/ImageGallery">
          <div class="row">
            <?php
              $sql2 = "SELECT imagen_propiedad FROM imagenes_propiedad where cod_propiedad=$id";
              $result2 = mysqli_query($conn, $sql2);
              if (mysqli_num_rows($result2) > 0) {
                // output data of each row
                while($row2 = mysqli_fetch_assoc($result2)) {
            ?>

              <!-- Use figure for a more semantic html -->
              <figure class="col-md-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a href="<?= $row2["imagen_propiedad"]?>" data-width="1200" data-height="900" itemprop="contentUrl">
                  <!-- Thumbnail -->
                  <img src="<?= $row2["imagen_propiedad"]?>" itemprop="thumbnail" alt="Image description" width="400" height="300">
              </a>
              </figure>
              <?php
  }
                } else {
                  echo "0 results";
                }

                ?>
          </div>
      </div>

      </div>
  </div>

  <!-- Some spacing 😉 -->
  <div class="spacer"></div>


  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
  <!-- Background of PhotoSwipe. 
          It's a separate element as animating opacity is faster than rgba(). -->
  <div class="pswp__bg"></div>
  <!-- Slides wrapper with overflow:hidden. -->
  <div class="pswp__scroll-wrap">
      <!-- Container that holds slides. 
              PhotoSwipe keeps only 3 of them in the DOM to save memory.
              Don't modify these 3 pswp__item elements, data is added later on. -->
      <div class="pswp__container">
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      </div>
      <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
      <div class="pswp__ui pswp__ui--hidden">
      <div class="pswp__top-bar">
          <!--  Controls are self-explanatory. Order can be changed. -->
          <div class="pswp__counter"></div>
          <button class="pswp__button pswp__button--close" title="Cerrar (Esc)"></button>
          <button class="pswp__button pswp__button--fs" title="Pantalla Completa"></button>
          <button class="pswp__button pswp__button--zoom" title="Zoom"></button>
          <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
          <!-- element will get class pswp__preloader--active when preloader is running -->
          <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
              </div>
          </div>
          </div>
      </div>
      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
      </div>
      <button class="pswp__button pswp__button--arrow--left" title="Anterior (arrow left)">
      </button>
      <button class="pswp__button pswp__button--arrow--right" title="Siguiente (arrow right)">
      </button>
      <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
      </div>
      </div>
  </div>
  </div>


<!-- Photoswipe galery END-->

<div class="container">
<div class="row mt-5 d-flex justify-content-center">
  <div class="col-md-3 de">Precio</div>
  <div class="col-md-9 font-propiedad de align-self-center"><?=$row["precio_propiedad"]; ?> €</div>
</div>
<div class="row mt-5">
  <div class="col-md-3 de">Descripion</div>
  <div class="col-md-9 font-propiedad align-self-center"><?= nl2br($row["descripcion_propiedad"]); ?></div>
</div>
<div class="row mt-5">
  <div class="col-md-3 de">Extras</div>
  <div class="col-md-9 font-propiedad align-self-center"><?php for ($i=0; $i < count($extras) ; $i++) { 
                          echo $extras[$i] . " ";
                          } ?>
  </div>
  <div class="row mt-5">
    <div class="col-md-3 de font-propiedad ml-2">Ubicacion aproximada del inmueble</div>
    <div class="col-md-8"><iframe width='100%' height='600' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=<?= $calle; ?>,%20"<?= $row["codpostal_propiedad"];?>"+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed'></iframe></div>
</div>
</div>
  
</div>




<?php
}
} else {
  echo "0 results";
}

mysqli_close($conn);

include "html/pie.html";
?>
<script>
(function($) {

// Init empty gallery array
var container = [];

// Loop over gallery items and push it to the array
$('#gallery').find('figure').each(function() {
  var $link = $(this).find('a'),
    item = {
      src: $link.attr('href'),
      w: $link.data('width'),
      h: $link.data('height'),
      title: $link.data('caption')
    };
  container.push(item);
});

// Define click event on gallery item
$('#gallery a').click(function(event) {

  // Prevent location change
  event.preventDefault();

  // Define object and gallery options
  var $pswp = $('.pswp')[0],
    options = {
      index: $(this).parent('figure').index(),
      bgOpacity: 0.85,
      showHideOpacity: true
    };

  // Initialize PhotoSwipe
  var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
  gallery.init();
});

}(jQuery));</script>