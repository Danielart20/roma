

		<?php 
		$inicio = "";
		$propiedades = "";
		$blog = "active";
		$contact = "";
		include 'html/menu.html';?>

		<!-- end:header-top -->

			<div id="fh5co-blog-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center heading-section animate-box">
							<h3>My blogs</h3>
							<p>Here I share some of my experiences and anecdotes that have happened to me throughout my professional career. I hope you like it!</p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row row-bottom-padded-md">
					<?php include '../assets/conexion.php';
							$sql = "SELECT * FROM blog";
							$result = mysqli_query($conn, $sql);

							if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
						?>
						<div class="col-lg-4 col-md-4 col-sm-6" onclick="window.location.href='mostrar_blog.php?id=<?= $row['cod_blog']; ?>'">
							<div class="fh5co-blog animate-box shadow">
								<a href="#"><img class="img-responsive" src="<?= $row['imagen_blog']; ?>" alt=""></a>
								<div class="blog-text">
									<div class="prod-title">
										<h3><a href="#"><?= $row["nombre_blog"] ?></a></h3>
										<span class="posted_by"><?= $row["fecha_blog"] ?> </span>
										<p class="descp"><?= $row["descripcion_blog"] ?> </p>
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
		<!-- fh5co-blog-section -->

		<?php include 'html/pie.html';?>