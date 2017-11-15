<h1 class="text-center text-muted">Editar permisos a los Usuarios</h1>
<div class="container"> 
    <div class="row"> 
        <div class="col-md-6 center-block" style="float: none"> 
            <form action="<?php echo url_for('@update_role_category') ?>" method="POST">
                <div class="form-group col-md-3">
                    <label for="email">El usuario:</label>
                    <select class="form-control" name="rol_user_id">
                        <?php foreach ($users as $u): ?>
                        <!--<option value="<?php //echo $rol->getRolUserId() ?>"><?php //echo $rol->getsfGuardUser()->getFirstName() ?></option>-->
                        <option <?php if($rol->getRolUserId() == $u->getId()){ echo 'selected'; } ?> value="<?php echo $u->getId() ?>"><?php echo $u->getFirstName() ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label for="pwd">Tendra acceso a:</label>
                    <select class="form-control" name="rol_cat_id">
                        <?php foreach ($categories as $c): ?>
                        <!--<option value="<?php// echo $rol->getRolCatId() ?>"><?php //echo $rol->getCategorias()->getCatNombre() ?></option>-->
                        <option <?php if($rol->getRolCatId() == $c->getId()){ echo 'selected'; } ?> value="<?php echo $c->getId() ?>"><?php echo $c->getCatNombre() ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="pwd">Y es de tipo:</label>
                    <select class="form-control" name="rol_group_id">
                        <?php foreach ($groups as $g): ?>
                        <!--<option value="<?php //echo $rol->getRolGroupId() ?>"><?php //echo $rol->getsfGuardGroup()->getName() ?></option>-->
                        <option <?php if($rol->getRolGroupId() == $g->getId()){ echo 'selected'; } ?> value="<?php echo $g->getId() ?>"><?php echo $g->getName() ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-11">
                    <input type="hidden" name="rol_id" value="<?php echo $sf_params->get('id'); ?>">
                    <button type="submit" class="btn btn-primary col-md-12">editar permisos</button>
                </div>
                <div class="col-md-11 padding15">
                    <a href="<?php echo url_for('@new_role') ?>" class="btn btn-default col-md-12">volver</a>
                </div>
            </form> 
        </div>
    </div>
</div>