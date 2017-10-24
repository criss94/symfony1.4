<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($Products->getId(), 'products_product_edit', $Products) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_prd_slug">
  <?php echo $Products->getPrdSlug() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_prd_name">
  <?php echo $Products->getPrdName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_prd_description">
  <?php echo $Products->getPrdDescription() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_prd_price">
  <?php echo $Products->getPrdPrice() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_cat_id">
  <?php echo $Products->getCatId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_prd_created">
  <?php echo $Products->getPrdCreated() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_prd_photo">
  <?php echo $Products->getPrdPhoto() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_slug">
  <?php echo $Products->getSlug() ?>
</td>
