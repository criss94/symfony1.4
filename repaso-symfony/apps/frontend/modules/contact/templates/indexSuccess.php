<?php if ($sf_user->hasFlash('notice')): ?>
  <div class="alert alert-success text-center col-lg-6 m-auto">
      <?php echo $sf_user->getFlash('notice') ?>
  </div>
<?php endif; ?>
<h1 class="text-center">Contactanos</h1>

<form class="col-lg-6 m-auto" action="<?php echo url_for('@contact_send') ?>" method="POST">
    <?php echo $formContact ?>
    <!--<div class="form-group">
        <?php //echo $formContact['fullName']->renderRow() ?>
    </div>
    <div class="form-group">
        <?php //echo $formContact['email']->renderRow() ?>
    </div>
    <div class="form-group">
        <?php// echo $formContact['message']->renderRow() ?>
    </div>-->
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary">enviar consulta</button>
    </div>
</form>
<!--<form class="col-lg-6 m-auto" action="<?php// echo url_for('@contact_send') ?>" method="POST">
    <div class="form-group">
        <input type="text" name="fullName" class="form-control" placeholder="Ingresa tu nombre completo">
    </div>
    <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="Ingresa tu email">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" placeholder="dejanos tu consulta"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary">enviar consulta</button>
    </div>
</form>-->