<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($noticias->getId(), 'noticias_edit', $noticias) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_not_nombre">
  <?php echo $noticias->getNotNombre() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_not_link">
  <?php echo $noticias->getNotLink() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_not_imagen">
  <?php echo $noticias->getNotImagen() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_not_activo">
  <?php echo $noticias->getNotActivo() ?>
</td>
