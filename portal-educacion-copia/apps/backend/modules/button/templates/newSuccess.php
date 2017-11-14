<?php use_helper('I18N', 'Date') ?>

<div id="sf_admin_container">
    <div id="sf_admin_header">
        <?php include_partial('button/form_header', array('botones' => $botones, 'form' => $form, 'configuration' => $configuration)) ?>
    </div>

    <div class="container paddingtop30 paddingbottom30">  
        <h1 class="text-center paddingbottom30"><?php echo __('Alta de un nuevo Boton', array(), 'messages') ?></h1>

        <?php include_partial('button/flashes') ?>

        <div class="row">
            <?php include_partial('button/form', array('botones' => $botones, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
        </div>
    </div>

    <div id="sf_admin_footer">
        <?php include_partial('button/form_footer', array('botones' => $botones, 'form' => $form, 'configuration' => $configuration)) ?>
    </div>
</div>