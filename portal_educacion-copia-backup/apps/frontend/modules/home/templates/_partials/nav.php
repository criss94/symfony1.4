<div class="jumbotron jumbotron-small jumbotron-misc jumbotron-main jumbotron-home">
    <div class="jumbotron-overlay">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
          <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Cambiar navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" title="Gobierno Electrónico">Portal de Educación</a>
          </div>
          <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="base.html">Inicio</a></li>
                <li class="active"><a href="base_landing.html">Mis Aplicaciones</a></li>
                <li><a href="base_panel.html">Servicios</a></li>
                <li><a href="base_curso.html">Trámites</a></li>
                <li><a href="base_formularios.html">Integrar</a></li>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $sf_user->getAttribute('full_name'); ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="backend_dev.php/button">Admin Botones</a></li>
                            <li><a href="backend_dev.php/category">Admin Categorias</a></li>
                            <li><a href="backend_dev.php/sf_guard_user">Admin Usuarios</a></li>
                            <li><a href="backend_dev.php/sf_guard_group">Admin Grupos</a></li>
                            <li><a href="backend_dev.php/sf_guard_permission">Admin Permisos</a></li>
                            <li class="divider" role="separator"></li>
                            <li><a href="logout">Cerrar sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ol class="breadcrumb white">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>
            </div>
            <div class="col-xs-12">
                <div class="margintop20 marginbottom60">
                    <h1>Portal Educación</h1>
                    <p class="lead">Todas tus aplicaciones y servicios en un solo lugar</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>