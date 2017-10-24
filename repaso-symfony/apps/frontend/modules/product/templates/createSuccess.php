<h1 class="text-center">New Product</h1>
<form class="col-lg-6 m-auto" action="<?php echo url_for('@store_product') ?>" method="POST">
    <div class="form-group">
        <input type="text" name="prd_name" class="form-control" placeholder="Ingresa el nombre">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="prd_description" placeholder="Ingresa la descripcion"></textarea>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="prd_price" placeholder="Ingresa el precio">
    </div>
    <div class="form-group">
        <select name="cat_id" class="form-control">
            <?php foreach ($cat as $c ): ?>
            <option value="<?php echo $c->getId(); ?>"><?php echo $c->getCatName(); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <input type="file" class="form-control" name="prd_photo">
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary">create</button>
    </div>
</form>