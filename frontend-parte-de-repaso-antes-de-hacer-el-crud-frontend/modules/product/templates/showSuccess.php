<div class="col-lg-5 m-auto">
    <table class="table">
        <tbody>
          <?php //var_dump($product) ?>
            <tr>
              <h1 class="text-center"><?php echo $product->getPrdName() ?></h1>
            </tr>
          <tr>
            <th>Name</th>
            <td><?php echo $product->getPrdName() ?></td>
          </tr>
          <tr>
            <th>Description</th>
            <td><?php echo $product->getPrdDescription() ?></td>
          </tr>
          <tr>
            <th>Price</th>
            <td>$<?php echo $product->getPrdPrice() ?></td>
          </tr>
          <tr>
            <th>Category</th>
            <td><?php echo $product->getCategories()->getCatName() ?></td>
          </tr>
          <tr>
            <th>Image</th>
            <td><?php echo image_tag(url_for('/uploads/assets/'.$product->getPrdPhoto())) ?></td>
          </tr>
          <tr>
              <td colspan="5" class="text-center"><?php echo link_to('volver','@products','class=btn btn-outline-info') ?></td>
          </tr>
        </tbody>
    </table>
<div>