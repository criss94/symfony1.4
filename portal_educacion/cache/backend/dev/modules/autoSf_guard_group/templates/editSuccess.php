<?php use_helper('I18N', 'Date') ?>
<?php include_partial('sf_guard_group/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edicion de %%name%%', array('%%name%%' => $sf_guard_group->getName()), 'messages') ?></h1>

  <?php include_partial('sf_guard_group/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('sf_guard_group/form_header', array('sf_guard_group' => $sf_guard_group, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('sf_guard_group/form', array('sf_guard_group' => $sf_guard_group, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('sf_guard_group/form_footer', array('sf_guard_group' => $sf_guard_group, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
