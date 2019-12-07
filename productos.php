<?php include("header.php"); ?>


<?php
	$categoria = isset($_GET['cat']) ? $_GET['cat'] : "productos";

	$data_file = $categoria.".json";
?>



<div class="container-fluid animated fadeIn bg-light pb-5">
	
		<div class="row" style="background: url('assets/img/banners/cajas.png'); position: bottom; background-size: cover;">
			<div class="col-12 p-md-3">
				<h2 class="text-light p-3 p-md-5 text-center">

						<?php
							switch($categoria) {
								case "productos": echo "Cajas Fuertes"; break;
								case "alta": echo "Cajas de alta seguridad"; break;
								case "esclusas": echo "Equipo Bancario"; break;
								default: echo "No se encontró nada aquí"; break;
							}
						?>

				</h2>
			</div>
		</div>

	<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 pt-5 ">
					
					<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus id, nostrum aperiam debitis iste molestias voluptatum animi, veniam amet tempora rerum modi facilis error qui doloremque? Laborum praesentium deserunt ab eligendi provident odio sapiente similique omnis ullam in. Culpa, qui?</p> -->
				</div>
			</div>




			<div class="row">

                <?php 
                    $url = "./assets/data/".$data_file;
                    $json = file_get_contents($url);
                    $data = json_decode($json, TRUE);

                    foreach($data as $item) {
                ?>


				<div class="col-6 col-md-4 col-xl-3 p-1 p-md-3 mb-1 mb-md-3 text-center">

					<div class="card text-white bg-primary" style="overflow: hidden;">
						<div class="card-header">
                            <?php echo $item['nombre']; ?>
						</div>

						<img src="assets/img/<?php echo $categoria; ?>/th/<?php echo $item['imagen']; ?>" class="card-img-top" data-toggle="modal" data-target="#producto<?php echo $item['id']; ?>">
					</div>
                </div>
                
                <?php } ?>
			</div>

			
	</div>

</div>





<!-- Modales -->
<?php 
	
	foreach($data as $item) {
?>



	<div class="modal fade" id="producto<?php echo $item['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document" aria-hidden="true">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">
						<?php echo $item['nombre']; ?>
					</h5>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="assets/img/<?php echo $categoria; ?>/<?php echo $item['imagen']; ?>" class="w-100 p-3 shadow mb-3">

					<p>
						<?php echo $item['resumen']; ?>
					</p>
				</div>
			</div>
		</div>
	</div>



<?php } ?>









<?php include("footer.php"); ?>