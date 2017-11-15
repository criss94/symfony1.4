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
    
    <?php echo $sf_content ?>
    
    <?php include_javascripts() ?>
  </body>
</html>