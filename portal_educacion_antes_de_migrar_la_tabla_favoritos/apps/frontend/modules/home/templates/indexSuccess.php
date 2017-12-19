<div class="page-contents">
	<div class="container">
		
		<div class="row">
			<div class="col-md-8 col-lg-9">
				<?php
					//recorro todas la categorias, estas a su ves ya estan relacionadas con sus botones pertenecientes a su categoria asiganda
					//es por eso que puedo ingresar a la 'tabla' botones y recorrerlos tambien
				?>
				<?php foreach ($categorias as $cat): ?>
					<div class="row">
						<div class="col-xs-12">
							<?php
								//declaro una variable para verificar si hay botones y dependiendo de eso se va a mostrar su categoria(titulo)
								$tituloCategorias = false;
								foreach ($cat->getBotones() as $boton):
									if($cat->getId() == $boton->getBtnCatId() && $cat->getId() != '' && $boton->getBtnCatId() != ''):
										if($boton->getBtnActivo()):
											$tituloCategorias = true;
										else:
											$tituloCategorias = false;
										endif;
									endif;
								endforeach;
							?>
							<?php if($tituloCategorias): ?>
						  		<h2><?php echo $cat->getCatNombre() ?></h2>
						  	<?php endif; ?>
						</div>
					</div>
					<div class="clearfix">
						<div class="margintop20">
							<?php foreach ($cat->getBotones() as $boton): ?>
								<?php if($boton->getBtnActivo()): ?>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
										<div class="panel panel-default" style="position: relative">

											<form action="@agregar_favoritos" method="post" id="form_agregar_favoritos">
												<input type="checkbox" class="boton_favorito"  value="<?php echo $boton->getId() ?>" id="boton_favorito_<?php echo $boton->getId() ?>" name="boton_favorito">
												<label for="boton_favorito_<?php echo $boton->getId() ?>" title="Agregar a Favoritos"  class="estrella_favoritos">★</label>

												<input type="hidden" class="user_id" value="<?php echo $sf_user->getGuardUser()->getId(); ?>" name="user_id">
											</form>

											<a class="shortcut" href="<?php echo $boton->getBtnLink() ?>" title="<?php echo $boton->getBtnNombre() ?>">
												<div class="panel-body">
													<span style="background-color: <?php echo $boton->getBtnBg() ?>">
													<span class="<?php echo $boton->getBtnImagen() ?>"></span>
													</span>
													<h3><?php echo $boton->getBtnNombre() ?></h3>
												</div>
											</a>
										</div>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="col-md-4 col-lg-3 margintop80">
				<div class="">
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h3 class="panel-title">Personal</h3>
					</div>
					<div class="panel-body">
					  <a href="#" class="text-capitalize"><?php echo $sf_user->getGuardUser()->getFirstName().' '.$sf_user->getGuardUser()->getLastName() ?></a>
					  <p class="clearmargin truncate"><?php echo $sf_user->getGuardUser()->getEmailAddress() ?></p>
					</div>
					<div class="box-list">
					  <a href="">
						<i class="fa fa-user gray marginright10"></i>
						<b>Mi BA</b>
						<i class="fa fa-chevron-right pull-right gray"></i>
					  </a>
					</div>
					<div class="box-list">
					  <a href="">
						<i class="fa fa-info-circle gray marginright10"></i>
						<b>Mis Datos</b>
						<i class="fa fa-chevron-right pull-right gray"></i>
					  </a>
					</div>
				  </div>

				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h3 class="panel-title">Servicios</h3>
					</div>
					<?php foreach($servicios as $servicio): ?>
					  <div class="box-list">
						<a href="<?php echo $servicio->getSerLink() ?>">
						  <i class="<?php echo $servicio->getSerIcono(); ?> gray marginright10"></i>
						  <b><?php echo $servicio->getSerNombre(); ?></b>
						  <i class="fa fa-chevron-right pull-right gray"></i>
						</a>
					  </div>
					<?php endforeach; ?>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-body text-center">
					  <a href="#" class="btn btn-lg btn-primary btn-block">Soporte</a>
					  <p class="font11 gray clearmargin margintop10">Teléfono 0800-333-3382 (Opción 1-2-5)</p>
					  <p class="font11 gray clearmargin">Mail para directivos:</p>
					  <p class="font11 gray clearmargin">soporte.cuentasbue@bue.edu.ar</p>
					</div>
				  </div>
				</div>
			</div>
		</div>
		
		<!-- section de noticias -->
		<?php 
			$fechaActual = date('Y-m-d H:i:s');
			//creo una variable booleana para verificar si existe una noticia activa y esta se encuentra programada
			$tituloNoticia = false;
			foreach ($noticias as $noticia): 
				if($noticia->getNotActivo()):
					if($noticia->getNotInicioPub() <= $fechaActual && $fechaActual <= $noticia->getNotFinPub()):
						$tituloNoticia = true;
					else:
						$tituloNoticia = false;
					endif;
				endif;
			endforeach;

			//uso la varible si este es true se muestra el titulo por unica vez
			//si no hago esto el titulo se muestra cuanta cantidad de noticias haya, osea mas de dos veces 
			if($tituloNoticia):
		?>
			<hr>
			<div class="row margintop-10 marginbottom20">
			  <div class="col-xs-12">
				<h2>Novedades de Educación BA</h2>
			  </div>
			</div>
		<?php endif; ?>

		<!-- Slide de noticias -->
		<div class="slideNoticias">
			<?php
				//obtengo la fecha actual para compararlos con la fecha de la DB, y envase a esta fecha se publicara la noticia programada
				$fechaActual = date('Y-m-d H:i:s');				
				foreach ($noticias as $noticia):
					//se verifica si la noticia esta activa para publicarlo, como es un booleano este debe ser true para continuar con la condicion
					//de lo contrario no se mostrara esa noticia aunque este programado
					if($noticia->getNotActivo()):
						//si la fecha de inicio es menor a la fecha actual quiere decir que ya existe y deberia estar la noticia publicada
						//y si la fecha actual es menor a la fecha de vencimiento la publicacion es correcta
						//si la fecha de la noticia es mayor a la fecha actual, esta no se muestra porque su programacion es para futuro(más adelante)
						if($noticia->getNotInicioPub() <= $fechaActual && $fechaActual <= $noticia->getNotFinPub()):
			?>
							<div class="col-xs-12 col-sm-6 col-md-4">
							  <a href="<?php echo $noticia->getNotLink() ?>" title="<?php echo $noticia->getNotNombre() ?>">
								<figure class="fig-img">
								  	<!--<img class="img-responsive" src="/uploads/news/<?php //echo $noticia->getNotImagen() ?>" width="740" height="480" alt="<?php //echo $noticia->getNotNombre() ?>">-->
								  	<?php echo image_tag('/uploads/news/'.$noticia->getNotImagen(), array('alt' => $noticia->getNotNombre(), 'class' => 'img-responsive', 'size' => '740x480')) ?>
									<figcaption>
										<h4><?php echo $noticia->getNotNombre() ?></h4>
									</figcaption>
								</figure>
							  </a>
							</div>
						<?php endif; ?>
					<?php endif; ?>
		  	<?php endforeach; ?> 			
		</div>

	</div>
</div>