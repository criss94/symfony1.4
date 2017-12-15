<?php use_helper('I18N', 'Date') ?>
<?php include_partial('category/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Alta de una nueva Categoria', array(), 'messages') ?></h1>

  <?php include_partial('category/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('category/form_header', array('categorias' => $categorias, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('category/form', array('categorias' => $categorias, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('category/form_footer', array('categorias' => $categorias, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
