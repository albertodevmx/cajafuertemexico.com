<?php include("header.php"); ?>



<div class="container-fluid animated fadeIn bg-light pb-5">
	<div class="row" style="background: url('assets/img/banners/contacto.png'); position: bottom; background-size: cover;">
		<div class="col-12 p-md-3">
			<h2 class="text-light p-3 p-md-5 text-center">Contacto</h2>
		</div>
	</div>


	<div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pt-5 ">
                    <p>Dejenos sus datos y un agente se pondrá en contacto. <br><b>No somos intermediarios.</b></p>
                </div>
			</div>
		

			<div class="row">
	
				<div class="col-12 col-md-6">
						<div class="formulario">
							
							<!-- <h3>Formulario de Contacto</h3> -->
	
							<form name="myForm" id="contact-form" class="form-horizontal">                    
								
								<div class="form-group">
									<label for="nombre">Nombre: </label>
									<input [(ngModel)]="model.nombre" class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre:" ng-model="nombreIngresado" ng-minlength="3" ng-maxlength="45" required>
									<!-- <div style="color: #CCC;" ng-show="myForm.nombre.$error.required"> No has ingresado tu nombre.</div>
									<div style="color: #CCC;" ng-show="myForm.nombre.$error.minlength"> ¿No te parece que el nombre es muy corto?.</div>
									<div style="color: #CCC;" ng-show="myForm.nombre.$error.maxlength"> Creo que el nombre es demasiado largo.</div> -->
								</div>
	
								<div class="form-group">
									<label for="telefono">Teléfono:</label>
									<input [(ngModel)]="model.telefonos" class="form-control" id="telefono" name="telefono" type="text"  placeholder="Teléfonos:" ng-model="telefonoIngresado" ng-minlength="8" ng-maxlength="40" required>
									<!-- <div style="color: #CCC;" ng-show="myForm.telefono.$error.required"> No has ingresado tu teléfono.</div>
									<div style="color: #CCC;" ng-show="myForm.telefono.$error.minlength"> Con tan pocos números no podremos llamarte.</div>
									<div style="color: #CCC;" ng-show="myForm.telefono.$error.maxlength"> Con dos números es suficiente.</div> -->
								</div>
	
								<div class="form-group">
									<label for="email">E-mail:</label>
									<input [(ngModel)]="model.email" class="form-control" type="text" name="email" id="email" placeholder="E-mail:" ng-model="emailIngresado" ng-minlength="5" ng-maxlength="45" required>
									<!-- <div style="color: #CCC;" ng-show="myForm.email.$error.required"> Coloca tu e-mail para poder contactarte.</div>
									<div style="color: #CCC;" ng-show="myForm.email.$error.minlength"> ¡Oye!, jamás había visto un e-mail tan corto.</div>
									<div style="color: #CCC;" ng-show="myForm.email.$error.maxlength"> Con dos números es suficiente.</div> -->
								</div>
	
								<div class="form-group">
									<label for="message">Mensaje:</label>
									<textarea [(ngModel)]="model.mensaje" class="form-control" name="message" id="message" ng-model="mensajeIngresado" ng-minlength="8" required></textarea>
									<!-- <div style="color: #CCC;" ng-show="myForm.message.$error.required"> Falta tu mensaje.</div>
									<div style="color: #CCC;" ng-show="myForm.message.$error.minlength"> Tu mensaje es muy corto.</div> -->
								</div>
								
								<div id="status" style="padding: 7px; padding-bottom: 15px; font-weight: bold;">
										{{mensajeMail}}
								</div>
								<div class="from-group">
									<button class="btn btn-primary" type="button" (click)="procesarFormulario()">ENVIAR</button>
								</div>
							</form>
						</div>


						<br><br><br>
				</div>
				


				<div class="col-12 col-md-6 p-5">
	
						
						<h4 class="oswald">
							<span class="fas fa-flag"></span>
							Servicios a toda la república.<br><br>
							
							<span class="fas fa-code-branch"></span>
							Contamos con personal en la Ciudad de México, Guadalajara, Monterrey y Cancún.
						</h4>
					
				</div>
	
	
			</div><!-- row -->

    </div>
</div>



<?php include("footer.php"); ?>