<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Category</th>
      <th>Image</th>
      <th>Options</th>
      <!--<th><?php // echo link_to('create','@create_product', array('class'=>'btn btn-success')) ?></th>-->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $product): ?>
    <tr>
      <td><?php echo $product->getPrdName() ?></td>
      <td><?php echo $product->getPrdDescription() ?></td>
      <td>$<?php echo $product->getPrdPrice() ?></td>
      <td><?php echo $product->getCategories()->getCatName() ?></td>
      <!--<td><img src="/uploads/assets/<?php //echo $product->getPrdPhoto() ?>" width="80" height="80"/></td>-->
      <td><?php echo image_tag(url_for('/uploads/assets/'.$product->getPrdPhoto()), 'size=100x80') ?></td>
      <td><?php echo link_to('details','@show_product?prd_slug='.$product->getPrdSlug(), array('class'=>'btn btn-outline-primary btn-sm')) ?></td>
      <td><?php //echo link_to('edit','@edit_product?id='.$product->getId(), array('class'=>'btn btn-primary')) ?></td>
      <td><?php //echo link_to('delete','@show_product?id='.$product->getId(), array('class'=>'btn btn-danger')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
