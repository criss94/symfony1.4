<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($categorias->getId(), 'categorias_edit', $categorias) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cat_nombre">
  <?php echo $categorias->getCatNombre() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cat_posicion">
  <?php echo $categorias->getCatPosicion() ?>
</td>
