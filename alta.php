<?php include("header.php"); ?>


<div class="container-fluid animated fadeIn bg-light pb-5">
	
    <div class="row" style="background: url('assets/img/banners/galeria.png'); position: bottom; background-size: cover;">
        <div class="col-12 p-md-3">
            <h2 class="text-light p-3 p-md-5 text-center">Cajas de alta seguridad</h2>
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
                    $url = "./assets/data/alta.json";
                    $json = file_get_contents($url);
                    $data = json_decode($json, TRUE);

                    foreach($data as $item) {
                ?>


				<div class="col-6 col-md-4 col-xl-3 p-1 p-md-3 mb-1 mb-md-3 text-center">

					<div class="card text-white bg-primary" style="overflow: hidden;">
						<div class="card-header">
							<a href="/productos-item.php?id=<?php echo $item['id']; ?>" class="text-light">
                                <?php echo $item['id']; ?>
							</a>
						</div>

						<a href="/productos-item.php?id=<?php echo $item['id']; ?>">
							<img src="assets/img/alta/th/<?php echo $item['imagen']; ?>" class="card-img-top">
						</a>
					</div>
                </div>
                
                <?php } ?>
			</div>

			
	</div>

</div>



<?php include("footer.php"); ?>