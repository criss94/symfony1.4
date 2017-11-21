<?php use_helper('I18N', 'Date') ?>
<?php include_partial('sf_guard_permission/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Alta de un nuevo Permiso', array(), 'messages') ?></h1>

  <?php include_partial('sf_guard_permission/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('sf_guard_permission/form_header', array('sf_guard_permission' => $sf_guard_permission, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('sf_guard_permission/form', array('sf_guard_permission' => $sf_guard_permission, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('sf_guard_permission/form_footer', array('sf_guard_permission' => $sf_guard_permission, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
