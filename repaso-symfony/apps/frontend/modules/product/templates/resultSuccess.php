<div class="col-lg-6 ml-auto">
    <form class="form-inline" action="<?php echo url_for('@search') ?>" method="GET">
      <input class="form-control mr-1 col-lg-5" type="text" name="query" placeholder="Search" aria-label="Search">
      <select name="cat" class="form-control mr-1 col-lg-5">
          <option value="0">Todos</option>
          <?php foreach ($categories as $cat): ?>
            <option value="<?php echo $cat->getId() ?>"><?php echo $cat->getCatName() ?></option>
          <?php endforeach; ?>
      </select>
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
</div>
<br>

<?php if(sizeof($products) !== 0): ?>

<h1 class="text-center">Resultados de la busqueda</h1>

<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Category</th>
      <th>Photo</th>
      <th>Details</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $product): ?>
    <tr>
      <td><?php echo $product->getPrdName() ?></td>
      <td><?php echo $product->getPrdDescription() ?></td>
      <td><?php echo $product->getPrdPrice() ?></td>
      <td><?php echo $product->getCategories()->getCatName() ?></td>
      <td><?php echo image_tag(url_for('/uploads/assets/'.$product->getPrdPhoto()), 'size=100x80') ?></td>
      <td><a href="<?php echo url_for('product/show?id='.$product->getId()) ?>" class="btn btn-outline-primary btn-sm">Detail</a></td>
    </tr>
    <?php endforeach; ?>
    
    <?php else: ?>
    <h2 class="alert alert-danger text-center">
        No se encontraron coincidencias con su busqueda de: <?php echo $sf_request->getParameter('query') ?>
    </h2>
    <?php endif; ?>
    
  </tbody>
</table>