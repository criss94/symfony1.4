<?php use_helper('I18N', 'Date') ?>
<?php include_partial('sf_guard_permission/assets') ?>

<div id="sf_admin_container">
    <div id="sf_admin_header">
        <?php include_partial('sf_guard_permission/list_header', array('pager' => $pager)) ?>
    </div>
    
    <h1  class="text-center padding20"><?php echo __('Permisos', array(), 'messages') ?></h1>

    <?php include_partial('sf_guard_permission/flashes') ?>

    <div id="sf_admin_bar">
      <?php include_partial('sf_guard_permission/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
    </div>

    <div id="sf_admin_content">
      <form action="<?php echo url_for('sf_guard_permission_collection', array('action' => 'batch')) ?>" method="post">
        <?php include_partial('sf_guard_permission/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
      </form>
    </div>

    <div id="sf_admin_footer">
        <?php include_partial('sf_guard_permission/list_footer', array('pager' => $pager)) ?>
    </div>
</div>
