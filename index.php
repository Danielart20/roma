		<?php include 'html/menu.html';?>
		<!-- end:header-top -->
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url(images/gran-canaria-min.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-12 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   								   		<div class="difuminado"></div>
			   						<h2 class="heading-title ">LOOK & FIND <br>Siete Palmas</h2>
			   						<p class="fh5co-lead">Modelo de Consultoría Inmobiliaria    que ofrece <br> servicio de asesoramiento personalizado  y  especializado.</p>
			   				</div>
			   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<button class="covid" data-toggle="modal" data-target="#co"><i class="fa fa-user-md fa-lg" aria-hidden="true"></i></button>
		<!-- Modal -->
		<div class="modal fade" id="co" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-light" id="exampleModalLongTitle">Precauciones Covid-19</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Se recomienda usar mascarillas en todas las visitas a los diferentes inmuebles y respetar la distancia de seguridad.
				</div>
				</div>
			</div>
			</div>

		<div class="fh5co-section-gray">
		<div class="container">
			<div class="row sobremi">
				<div class="col-md-6 d-flex justify-content-center pb-5">
					<img src="images/foto2.png" alt="foto" height="500">
				</div>
				<div class="col-md-6 d-flex justify-content-center flex-column">
					<h2>Sobre mi</h2>
					<p>Mi nombre es <strong>Roma Nool</strong>, ASESORA INMOBILIARIA especializada en la zona de <strong>Las Canteras</strong>. Como Agente Asociada pertenezco a una red líder del sector inmobiliario en servicio de <strong>calidad</strong>.</p>
					<p>Soy muy consciente de que la venta de su propiedad le pueda causar dudas, temores, indecisiones, preocupación y al mismo tiempo, ansiedad. Es una decisión <strong>muy importante</strong>.</p>
					<p>Mi consejo es que su propiedad sea comercializada con un asesor/a profesional y darle salida al mercado con un precio de venta adecuado según el previo estudio de mercado y el Informe de Valoración del Inmueble (Look & Find Siete Palmas).</p>
					<p>La <strong>satisfacción de las personas</strong> a las que, con mi equipo, hemos <strong>ayudado a vender</strong> su casa es mi mejor carta de presentación y esto se refleja en el negocio que recibo a través de clientes que repiten y en los que me recomiendan.   Un Saludo.</p>
					<p class="text-center"><img src="images/firma.png" alt="firma roma"></p>
				</div>
			</div>
		</div>
		</div>

		<div id="services" class="fh5co-section-gray">
			<div class="container">
				<h3 class="text-center">Servicios</h3>
				<div class="row">
					<div class="col-md-6 d-flex justify-content-center">
						<div class="service-container d-flex flex-column align-items-center justify-content-center">
							<i class="fas fa-user-shield fa-5x" style="color:#043785;"></i>
							<h4><strong>Exclusividad</strong></h4>
							<p class="text-center">Cartera limitada de inmuebles; conocimiento sobre las propiedades que trabajo, lo que me permite darle a usted un tratamiento diferenciado y exclusivo. </p>
						</div>
					</div>
					<div class="col-md-6 d-flex justify-content-center">
						<div class="service-container d-flex flex-column align-items-center justify-content-center">
							<i class="fas fa-lock fa-5x" style="color:#043785;"></i>
							<h4><strong>Seguridad</strong></h4>
							<p class="text-center">Como profesional estoy en permanente proceso de formación y reciclaje, adaptando las más eficaces y modernas técnicas de venta a mi mercado. </p>
						</div>
					</div>
					</div>
					<div class="row mt-5">
					<div class="col-md-6 d-flex justify-content-center">
						<div class="service-container d-flex flex-column align-items-center justify-content-center">
							<i class="fas fa-users fa-5x" style="color:#043785;"></i>
							<h4 class="text-center"><strong>Exclusiva abierta y colaboración</strong></h4>
							<p class="text-center">El sistema de exclusivas abiertas y colaboración con otras agencias ofrece  mejores resultados de venta. </p>
						</div>
					</div>					
					<div class="col-md-6 d-flex justify-content-center">
						<div class="service-container d-flex flex-column align-items-center justify-content-center">
							<i class="fas fa-people-carry fa-5x" style="color:#043785;"></i>
							<h4><strong>Confianza</strong></h4>
							<p class="text-center">Desde el primer momento Usted va a conocer todo sobre mi y mi empresa, sobre mis gestiones y sobre los posibles compradores de su vivienda.</p>
						</div>
					</div>
				</div>

		</div>

		

		<div id="fh5co-properties">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section animate-box">
						<h3>Nuevas propiedades</h3>
						<p>Estas son algunas de las propiedades más recientes.</p>
					</div>
				</div>
				<div class="row">
					<?php include 'assets/conexion.php';
						$sql = "SELECT * FROM propiedades ORDER BY cod_propiedad LIMIT 0,3";
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
					<div class="col-md-4 animate-box" onclick="window.location.href='propiedades.php?id='+<?= $row['cod_propiedad']; ?>">
						<div class="property">
							<a href="#" class="fh5co-property" style="background-image: url(<?= $row['imagenp_propiedad'] ?>);">
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

		<div id="fh5co-blog-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section animate-box">
						<h3>Blog recientes</h3>
						<p>Aquí hay 3 blogs de los más recientes</p>	
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<?php include 'assets/conexion.php';
						$sql = "SELECT * FROM blog ORDER BY cod_blog LIMIT 0,3";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
						  // output data of each row
						  while($blog = mysqli_fetch_assoc($result)) {

					?>
					<div class="col-lg-4 col-md-4 col-sm-6 anima" onclick="window.location.href='blogs.php?id='+<?= $blog['cod_blog']; ?>">
						<div class="fh5co-blog animate-box" >
							<a href="#"><img class="img-responsive" src="<?= $blog['imagen_blog']; ?>" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#"><?= $blog["nombre_blog"] ?></a></h3>
									<span class="posted_by"><?= $blog["fecha_blog"] ?></span>
									<p class="descp"><?= $blog["descripcion_blog"] ?>.</p>
									<p><a href="#">Leer más...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<?php			  
						}
						} else {
						  echo "0 results";
						}
						?>
					<div class="clearfix visible-md-block"></div>
				</div>
			</div>
		</div>
		<!-- fh5co-blog-section -->
		<div id="fh5co-contact" class="fh5co-contact container">
			<div class="row pt-5">
			<div class="col-md-6 col-xs-12">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center heading-section animate-box">
							<h3>Ask an agent, We're here to help 24/7</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 img-form"><img src="images/foto1.png" alt="foto personal" class="img-fluid"></div>
		</div>
		</div>
		<?php include 'html/pie.html';?>
