<table>
  <tbody>
    <tr>
      <th>Name:</th>
      <td><?php echo $products->getPrdName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $products->getPrdDescription() ?></td>
    </tr>
    <tr>
      <th>Price:</th>
      <td><?php echo $products->getPrdPrice() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $products->getCategories()->getCatName() ?></td>
    </tr>
    <tr>
      <th>Photo:</th>
      <td><?php echo image_tag(url_for('/uploads/assets/'.$products->getPrdPhoto()), 'size=100x80') ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('product/edit?id='.$products->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('product/index') ?>">List</a>
