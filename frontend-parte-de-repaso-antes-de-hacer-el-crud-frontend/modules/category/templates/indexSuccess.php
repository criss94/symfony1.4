<div class="col-lg-5 m-auto">
    <table class="table">
      <thead class="thead-inverse">
        <tr>
          <th>Category</th>
          <th>detail</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($categories as $category): ?>
        <tr>
          <td><?php echo $category->getCatName() ?></td>
          <!--<td><?php //echo link_to('details','@product_for_slug?prd_slug='.$product->getPrdSlug(), array('class'=>'btn btn-primary')) ?></td>-->
          <td><?php echo link_to('detail','@show_category?id='.$category->getId(),'class=btn btn-outline-primary btn-sm') ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>