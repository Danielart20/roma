		<?php 
		$inicio = "";
		$propiedades = "active";
		$blog = "";
		$contact = "";
		include 'html/menu.html';?>


		<!-- end:header-top -->

		<div id="fh5co-properties" class="fh5co-section-gray">
			<div class="container">
				<form autocomplete="off" action="#" id="search">
					<h3 class="prop mt-5">Encuentra lo que buscas</h3>
					<div class="mt-5">
						<label><input type="radio" value="2"  name="tipo" checked><span class="s">Compra</span></label>
						<label><input type="radio" value="1"  name="tipo"><span class="s">Alquiler</span></label></div>
					<div class="row d-flex mt-2">
						<div class="col-md-9 autocomplete buscador align-self-center">
							<input id="myInput" type="text" name="localidad" placeholder="Localidad...">
						</div>
						<div class="col-md-3 sub">
						<button type="submit" class="btn btn-lg mt-5 mb-5"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button></div>
					</div>
				</form>
				<div class="row" id="propi">
					<?php include 'assets/conexion.php';
						$sql = "SELECT * FROM propiedades";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
						if($row["cod_tipo"] == 1){
							$tipo = "Alquiler";
							}else{
								$tipo = "Venta";
						}
					?>
					<div class="col-md-4" onclick="window.location.href='mostrar_propiedad.php?id='<?= $row['cod_propiedad']; ?>">
						<div class="property">
							<a href="#" class="fh5co-property" style="background-image: url(<?= $row['imagenp_propiedad'];?>)">
								<span class="status"><?= $tipo ?></span>
								<ul class="list-details">
									<li><?= $row["area_propiedad"] ?> m2<li>
									<li>Dormitorios: <?= $row["habita_propiedad"] ?></li>
									<li>Baños: <?= $row["ban_propiedad"] ?></li>
								</ul>
							</a>
							<div class="property-details">
								<h3><?= $row["nombre_propiedad"] ?> </h3>
								<span class="price"><?= $row["precio_propiedad"] ?> €</span>
								<p class="descp"><?= $row["descripcion_propiedad"] ?> .</p>
								<span class="address"><i class="icon-map"></i><?= $row["calle_propiedad"] ?> </span>
							</div>
						</div>
					</div>
					<?php
					}
					} else {
					echo "0 results";
					}
					?>

			
				</div>
			</div>
		</div>

		<?php include 'html/pie.html';?>

