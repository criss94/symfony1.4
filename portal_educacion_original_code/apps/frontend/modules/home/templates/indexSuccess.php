<div class="page-contents">
    <div class="container">
        
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <!--
                recorro todas la categorias, estas a su ves ya estan relacionadas con sus botones pertenecientes a su categoria asiganda
                es por eso que puedo ingresar a la 'tabla' botones y recorrerlos tambien
                -->
                <?php foreach ($categorias as $cat): ?>
                    <div class="row">
                        <div class="col-xs-12">
                          <h2><?php echo $cat->getCatNombre() ?></h2>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="margintop20">
                            <?php foreach ($cat->getBotones() as $boton): ?>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="panel panel-default">
                                      <a class="shortcut" href="#">
                                        <div class="panel-body">
                                          <span class="bg-danger-lt">
                                            <span class="glyphicon glyphicon-cloud"></span>
                                          </span>
                                          <h3><?php echo $boton->getBtnNombre() ?></h3>
                                        </div>
                                      </a>
                                    </div>                
                                </div>
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
                      <a href="#" class="text-capitalize"><?php echo $sf_user->getAttribute('full_name'); ?></a>
                      <p class="clearmargin truncate"><?php echo $sf_user->getAttribute('user_email'); ?></p>
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
                        <a href="">
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
        <hr>
        <div class="row margintop-10">
          <div class="col-xs-12">
            <h2>Novedades de Educación BA</h2>
          </div>
        </div>
        <div class="row margintop20">
          <?php foreach ($noticias as $noticia): ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <a href="/noticias/la-ciudad-presenta-los-picnics-bajo-las-estrellas">
                <figure class="fig-img">
                  <img class="img-responsive" src="/uploads/news/<?php echo $noticia->getNotImagen() ?>" width="740" height="480" alt="<?php echo $noticia->getNotNombre() ?>">
                  <figcaption>
                    <h4><?php echo $noticia->getNotNombre() ?></h4>
                  </figcaption>
                </figure>
              </a>
            </div>
          <?php endforeach; ?> 
        </div>

    </div>
</div>
