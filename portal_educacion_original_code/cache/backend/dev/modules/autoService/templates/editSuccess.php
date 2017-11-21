<?php use_helper('I18N', 'Date') ?>
<?php include_partial('service/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edicion de %%ser_nombre%%', array('%%ser_nombre%%' => $servicios->getSerNombre()), 'messages') ?></h1>

  <?php include_partial('service/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('service/form_header', array('servicios' => $servicios, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('service/form', array('servicios' => $servicios, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('service/form_footer', array('servicios' => $servicios, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
