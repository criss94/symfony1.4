<h1 class="text-center">Contactanos</h1>
<form class="col-lg-6 m-auto" action="<?php echo url_for('@contact_send') ?>" method="POST">
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Ingresa tu nombre completo">
    </div>
    <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="Ingresa tu email">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" placeholder="dejanos ut consulta"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary">enviar consulta</button>
    </div>
</form>