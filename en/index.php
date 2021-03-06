		<?php 
		$inicio = "active";
		$propiedades = "";
		$blog = "";
		$contact = "";
		include 'html/menu.html';?>
		<!-- end:header-top -->
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url(../images/gran-canaria-min.jpg);">
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 text-center js-fullheight slider-text ">
			   				<div class="slider-text-inner">
			   				<div class="bg-light text-portada">	   			
			   					<h2 class="text-dark">ROMA NOOL MELEGRITO</h2>
			   					<p class="text-dark">Associated agent</p>
			   					<p class="text-dark">	617 051 089</p>
			   					<p class="text-dark">r.nool@lookandfind.es</p>
			   					<p class="spa mt-5">Specialized in the area of Las Canteras</p>
			   						</div>
			   				</div>
			   			</div>
			   			<div class="col-md-4 text-center js-fullheight"><img src="../images/portada.png" alt="portada" class="imagen_portada"></div>
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
					<h5 class="modal-title text-light" id="exampleModalLongTitle">Covid-19 Precautions</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					It is recommended to wear masks on all visits to the different properties and to respect the safety distance.
				</div>
				</div>
			</div>
			</div>

		<div class="fh5co-section-gray">
		<div class="container">
			<div class="row sobremi">
				<div class="col-md-6 d-flex justify-content-center pb-5">
					<img src="../images/foto2.png" alt="foto" height="500">
				</div>
				<div class="col-md-6 d-flex justify-content-center flex-column">
					<h3 class="">Sobre mi</h3>
					<p>My name is Roma Nool, REAL ESTATE CONSULTANT specialized in the area of Las Canteras. I belong as an Associate Agent to a leading network in the real estate sector in terms of quality service.</p>
					<p>I'm very conscious that the sale of your property may cause you doubts, fears, indecision, worry and at the same time anxiety. It's a very important decision</p>
					<p>My suggestion is that your property should be marketed with a professional advisor and put on the market with an appropriate sales price according to the previous market study and the Property Appraisal report (Look & Find Siete Palmas). </p>
					<p>The satisfaction of the people who, with my team, we have helped to sell their houses, is my best presentation card and this reflects in the business I receive through repeat customers and those who recommend me.   Kind Regards..</p>
					<p class="text-center"><img src="../images/firma.png" alt="firma roma"></p>
				</div>
			</div>
		</div>
		</div>
		<div id="services" class="fh5co-section-gray pt-5 pb-5">
			<div class="container">
				<h3 class="text-center">My services are based on</h3>
				<div class="row">
					<div class="col-md-6 d-flex justify-content-center animate-box">
						<div class="service-container d-flex flex-column align-items-center justify-content-center">
							<i class="fas fa-user-shield fa-5x" style="color:#043785;"></i>
							<h4><strong>Exclusivity</strong></h4>
							<p class="text-center">Limited portfolio of properties; knowledge about the properties I work with, which allows me to give you a differentiated and exclusive treatment</p>
						</div>
					</div>
					<div class="col-md-6 d-flex justify-content-center animate-box">
						<div class="service-container d-flex flex-column align-items-center justify-content-center">
							<i class="fas fa-lock fa-5x" style="color:#043785;"></i>
							<h4><strong>Security</strong></h4>
							<p class="text-center">As a professional I'm in a permanent process of training and retraining, adapting the most efficient and modern sales techniques to my market.</p>
						</div>
					</div>
					</div>
					<div class="row mt-5 pb-5">
					<div class="col-md-6 d-flex justify-content-center animate-box">
						<div class="service-container d-flex flex-column align-items-center justify-content-center">
							<i class="fas fa-users fa-5x" style="color:#043785;"></i>
							<h4 class="text-center"><strong>Open exclusive and collaboration</strong></h4>
							<p class="text-center">The system of open exclusives and collaboration with other agencies offers better sales results</p>
						</div>
					</div>					
					<div class="col-md-6 d-flex justify-content-center animate-box">
						<div class="service-container d-flex flex-column align-items-center justify-content-center">
							<i class="fas fa-people-carry fa-5x" style="color:#043785;"></i>
							<h4><strong>Trust</strong></h4>
							<p class="text-center">From the first moment you will know everything about me and my company, about my negotiations and about the possible buyers of your house.</p>
						</div>
					</div>
				</div>

			</div>
		</div>


		

		<div id="fh5co-properties" class="pt-5 pb-5   fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section animate-box">
						<h3>New properties</h3>
						<p>Estas son algunas de las propiedades más recientes.</p>
					</div>
				</div>
				<div class="row">
					<?php include '../assets/conexion.php';
						$sql = "SELECT * FROM propiedades ORDER BY cod_propiedad LIMIT 0,3";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
						  // output data of each row
						  while($row = mysqli_fetch_assoc($result)) {
						  if($row["cod_tipo"] == 1){
						  $tipo = "Rent";
						}else{
							$tipo = "Sell";
					}

					?>
					<div class="col-md-4 animate-box " onclick="window.location.href='mostrar_propiedad.php?id='+<?= $row['cod_propiedad']; ?>">
						<div class="property shadow">
							<a href="#" class="fh5co-property" style="background-image: url(<?= $row['imagenp_propiedad'] ?>);">
								<span class="status"><?= $tipo ?></span>
								<ul class="list-details">
									<li><?= $row["area_propiedad"] ?> m2<li>
									<li>bedrooms: <?= $row["habita_propiedad"] ?></li>
									<li>bathrooms: <?= $row["ban_propiedad"] ?></li>
								</ul>
							</a>
							<div class="property-details p-4">
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



		<div id="fh5co-blog-section" class="pt-5 pb-5 fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section animate-box">
						<h3>Recent blogs</h3>
						<p class="text-light">Here you can see some of my blogs</p>	
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<?php include '../assets/conexion.php';
						$sql = "SELECT * FROM blog ORDER BY cod_blog LIMIT 0,3";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
						  // output data of each row
						  while($blog = mysqli_fetch_assoc($result)) {

					?>
					<div class="col-lg-4 col-md-4 col-sm-6 anima" onclick="window.location.href='mostrar_blog.php?id='+<?= $blog['cod_blog']; ?>">
						<div class="fh5co-blog animate-box shadow" >
							<a href="#"><img class="img-responsive" src="<?= $blog['imagen_blog']; ?>" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#"><?= $blog["nombre_blog"] ?></a></h3>
									<span class="posted_by"><?= $blog["fecha_blog"] ?></span>
									<p class="descp"><?= $blog["descripcion_blog"] ?>.</p>
									<p><a href="#">Read more...</a></p>
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


		<div class="fh5co-section-gray">
		<!-- fh5co-blog-section -->
		<div id="fh5co-contact" class="fh5co-contact container pt-5 pb-5">
			<div class="row pt-5">
			<div class="col-md-6 col-xs-12">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center heading-section animate-box">
						<h3>Contact Information</h3>
						<p>I'll be delighted to HELP the people 
								you recommend to me. 
								Thank you for your trust!</p>
						</div>
					</div>
					<form action="">
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message" required></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send message" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
			<div class="col-md-6 img-form"><img src="../images/foto1.png" alt="foto personal" class="img-fluid"></div>
		</div>
					</div>
		</div>
		<?php include 'html/pie.html';?>
