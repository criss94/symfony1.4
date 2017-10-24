<?php use_helper('I18N') ?>

<h1 class="text-center"><?php echo __('Iniciar sesion', null, 'sf_guard') ?></h1>

<?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>