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
<h1 class="text-center">Products List </h1>

<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Category</th>
      <th>Photo</th>
      <th>
        <a href="<?php echo url_for('product/new') ?>" class="btn btn-success">New</a>
      </th>
    </tr>
  </thead>
  <tbody>
    <!-- antes era productss el objeto, lo cambie por que lo estamos paginando -->
    <?php foreach ($pager as $products): ?>
    <tr>
      <td><?php echo $products->getPrdName() ?></td>
      <td><?php echo $products->getPrdDescription() ?></td>
      <td><?php echo $products->getPrdPrice() ?></td>
      <td><?php echo $products->getCategories()->getCatName() ?></td>
      <td><?php echo image_tag(url_for('/uploads/assets/'.$products->getPrdPhoto()), 'size=100x80') ?></td>
      <td><a href="<?php echo url_for('product/show?id='.$products->getId()) ?>" class="btn btn-outline-primary btn-sm">Detail</a></td>
    </tr>
    <?php endforeach; ?>
           
    <!-- este nos devuelve true si hay mas de 1 pagina entonces entra al bloque de codigo -->
    <?php if ($pager->haveToPaginate()): ?>
            
        <div class="d-flex justify-content-between">
            <!-- le muestro al usuario cuantos items son en total y en que pagina y cuantas le faltan por recorrer-->
            <div>
                <!-- con esto sabemos el total de items en total, solo hace un conteo de registros-->
                <strong><?php echo $pager->getNbResults() ?></strong> productos disponibles
                 <!-- solo entra aqui 'TRUE' si hay mas de una pagina -->
                <?php if ($pager->haveToPaginate()): ?>
                    <!-- le mostramos la pagina actual en la q se encuentra y la ultima para q sepa cuantas paginas son -->
                  - pagina <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
                <?php endif; ?>
            </div>
            
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="<?php echo url_for('@products') ?>?page=1">
                        <img src="/images/first.png" alt="First page" title="First page" />
                    </a>
                </li>

                <li class="page-item">
                    <!-- este nos devuelve el numero de pagina anterior -->
                    <a class="page-link" href="<?php echo url_for('@products') ?>?page=<?php echo $pager->getPreviousPage() ?>">
                      <img src="/images/previous.png" alt="Previous page" title="Previous page" />
                    </a>
                </li>

                <!-- este nos devuelve una lista de enlaces a todas las páginas del paginador, osea solo el numero de paginas q existen segun objetos haya -->
                <?php foreach ($pager->getLinks() as $page): ?>
                    <!-- si el num. de pagina es igual al num. de pagina actual, lo mostramos como activo -->
                    <?php if ($page == $pager->getPage()): ?>
                        <li class="page-item active">
                            <a class="page-link" href="#"><?php echo $page ?></a>
                        </li>
                    <?php else: ?>
                        <!-- sino lo listamos como enlaces normales -->
                        <li class="page-item">
                            <a class="page-link" href="<?php echo url_for('@products') ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>

                <li class="page-item">
                    <!-- este nos devuelve el número de la página siguiente -->
                    <a class="page-link" href="<?php echo url_for('@products') ?>?page=<?php echo $pager->getNextPage() ?>">
                      <img src="/images/next.png" alt="Next page" title="Next page" />
                    </a>
                </li>

                <li class="page-item">
                    <!-- este nos devuelve el número de la última página -->
                    <a class="page-link" href="<?php echo url_for('@products') ?>?page=<?php echo $pager->getLastPage() ?>">
                      <img src="/images/last.png" alt="Last page" title="Last page" />
                    </a>
                </li>
            </ul>
        </div>
    <?php endif; ?>
    
  </tbody>
</table>