<?php
/*
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <?php echo $sf_content ?>
  </body>
</html>
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
        <style>
            .error_list{
                background: #f8a593;
                color: #651605;
                padding: 3px 15px;
                list-style: none;
                font-size: 13px;
                border-radius: 4px;
                margin-bottom: 2px;
            }
        </style>
  </head>
  <body>
    
    <?php include_partial('product/partials/nav') ?>    
    <div class="container mt-5">
        <?php echo $sf_content ?>
    </div>
       
  </body>
</html>