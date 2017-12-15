<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php //include_title() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- si no se definen otros titulos en las vistas este se vera por default -->
    <title>
    <?php if (!include_slot('title')): ?>
        Gobierno de la Ciudad de Buenos Aires
    <?php endif; ?>
    </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sitio externo del Gobierno de la Ciudad de Buenos Aires.">
    <meta name="author" content="Gobierno de la Ciudad de Buenos Aires">
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="favicon-mobile.png">
    <!-- aqui se incluiran todos mis estilos -->
    <?php include_stylesheets() ?>   
    <!-- ESTILOS EXTRA -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>      
    <?php //if (!$sf_user->hasCredential('user')): ?>
    <?php if (!$sf_user->isAuthenticated()): ?>
        <?php echo $sf_content ?>
    <!-- si existe el muestro el contenido -->
    <?php else: ?>
        <!-- incluyo el header -->
        <?php include_partial('global/header') ?>
        <!-- incluyo el nav -->
        <?php include_partial('global/nav') ?>
        <!-- toda la data se manda por esta variable 'body' -->
        <?php echo $sf_content ?>
        <!-- incluyo el footer -->
        <?php include_partial('global/footer') ?>
    <?php endif; ?>
    
   <!-- todos los scripts js se cargan aqui -->
   <?php include_javascripts() ?>

   <!--  script que inicializa los slides para las noticias -->
   <script type="text/javascript">
      $(document).ready(function(){
          if (screen.width <= 767) {
            $('.slideNoticias').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 3000,
            });  
          }else if(screen.width <= 1199){
            $('.slideNoticias').slick({
              slidesToShow: 2,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 3000,
            });
          }else{
            $('.slideNoticias').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 3000,
            });
          }
      });
    </script>

  </body>
</html>