<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($botones->getId(), 'botones_edit', $botones) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_btn_nombre">
  <?php echo $botones->getBtnNombre() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_btn_link">
  <?php echo $botones->getBtnLink() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_btn_imagen">
  <?php echo $botones->getBtnImagen() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_btn_bg">
  <?php echo $botones->getBtnBg() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_btn_activo">
  <?php echo $botones->getBtnActivo() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_btn_cat_id">
  <?php echo $botones->getBtnCatId() ?>
</td>
