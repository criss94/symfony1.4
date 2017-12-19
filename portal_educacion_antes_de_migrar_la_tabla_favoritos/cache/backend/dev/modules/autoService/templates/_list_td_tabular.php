<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($servicios->getId(), 'servicios_edit', $servicios) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ser_icono">
  <?php echo $servicios->getSerIcono() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ser_link">
  <?php echo $servicios->getSerLink() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ser_nombre">
  <?php echo $servicios->getSerNombre() ?>
</td>
