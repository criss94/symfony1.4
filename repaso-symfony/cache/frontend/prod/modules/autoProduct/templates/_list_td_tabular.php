<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($products->getId(), 'products_product_edit', $products) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_prd_slug">
  <?php echo $products->getPrdSlug() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_prd_name">
  <?php echo $products->getPrdName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_prd_description">
  <?php echo $products->getPrdDescription() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_prd_price">
  <?php echo $products->getPrdPrice() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_cat_id">
  <?php echo $products->getCatId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_prd_created">
  <?php echo $products->getPrdCreated() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_prd_photo">
  <?php echo $products->getPrdPhoto() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_slug">
  <?php echo $products->getSlug() ?>
</td>
