<div class="page-contents">
    <div class="container">
        
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <?php foreach ($categorias as $cat): ?>
                    <div class="row marginbottom20">
                        <div class="col-xs-12">
                          <h2><?php echo $cat->getCatNombre() ?></h2>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="">
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
                      <a href="#">Nicolás Armaniac</a>
                      <p class="clearmargin truncate">n.armaniac@buenosaires.gob.ar</p>
                      <p>DNI <span class="dni">32589654</span></p>
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
                    <div class="box-list">
                      <a href="">
                        <i class="fa fa-bicycle gray marginright10"></i>
                        <b>Ecobici</b>
                        <i class="fa fa-chevron-right pull-right gray"></i>
                      </a>
                    </div>
                    <div class="box-list">
                      <a href="">
                        <i class="fa fa-comments gray marginright10"></i>
                        <b>Mensajes</b>
                        <i class="fa fa-chevron-right pull-right gray"></i>
                      </a>
                    </div>
                    <div class="box-list">
                      <a href="">
                        <i class="fa fa-cog gray marginright10"></i>
                        <b>Ajustes</b>
                        <i class="fa fa-chevron-right pull-right gray"></i>
                      </a>
                    </div>
                    <div class="box-list">
                      <a href="">
                        <i class="fa fa-question-circle gray marginright10"></i>
                        <b>Ayuda</b>
                        <i class="fa fa-chevron-right pull-right gray"></i>
                      </a>
                    </div>
                    <div class="box-list">
                      <a href="">
                        <i class="fa fa-book gray marginright10"></i>
                        <b>biblioteca Digital</b>
                        <i class="fa fa-chevron-right pull-right gray"></i>
                      </a>
                    </div>
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
        
            
        <hr>
        <div class="row">
        <?php foreach ($categorias as $cat): ?>
            <?php if($cat->getCatPosicion() == 3): ?>
              <div class="col-xs-12">
                <h2><?php echo $cat->getCatNombre() ?></h2>
              </div>
            <?php endif; ?>
        <?php endforeach; ?> 
        </div>
        <div class="row margintop30">
          <?php foreach ($botones as $boton): ?>
              <?php if($boton->getBtnCatId() == 3): ?>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <a href="/noticias/la-ciudad-presenta-los-picnics-bajo-las-estrellas">
                    <figure class="fig-img">
                      <img class="img-responsive" src="images/<?php echo $boton->getBtnImagen() ?>" width="740" height="480" alt="">         
                      <figcaption>
                        <h4><?php echo $boton->getBtnNombre() ?></h4>
                      </figcaption>
                    </figure>
                  </a>
                </div>
              <?php endif; ?>
          <?php endforeach; ?> 
        </div>

    </div>
</div>
