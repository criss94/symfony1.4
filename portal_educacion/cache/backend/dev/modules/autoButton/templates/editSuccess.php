<?php use_helper('I18N', 'Date') ?>
<?php include_partial('button/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edicion de %%btn_nombre%%', array('%%btn_nombre%%' => $botones->getBtnNombre()), 'messages') ?></h1>

  <?php include_partial('button/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('button/form_header', array('botones' => $botones, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('button/form', array('botones' => $botones, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('button/form_footer', array('botones' => $botones, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
