<h1 class="text-center">Asignar permisos a los Usuarios</h1>
<div style="width: 600px; height: 900px; margin: auto"> 
    <form action="<?php echo url_for('@store_role_category') ?>" method="POST">
      <div class="form-group col-md-3">
        <label for="email">El usuario:</label>
        <select class="form-control" name="rol_user_id">
            <?php foreach ($users as $u): ?>
            <option value="<?php echo $u->getId() ?>"><?php echo $u->getFirstName() ?></option>
            <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group col-md-5">
        <label for="pwd">tendra acceso a:</label>
        <select class="form-control" name="rol_cat_id">
            <?php foreach ($categories as $c): ?>
            <option value="<?php echo $c->getId() ?>"><?php echo $c->getCatNombre() ?></option>
            <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="pwd">Y es de tipo:</label>
        <select class="form-control" name="rol_group_id">
            <?php foreach ($groups as $group): ?>
            <option value="<?php echo $group->getId() ?>"><?php echo $group->getName() ?></option>
            <?php endforeach; ?>
        </select>
      </div>
      <div class="col-md-11">
        <button type="submit" class="btn btn-primary col-md-12">asignar permisos</button>
      </div>
    </form> 
</div>