<td colspan="4">
  <?php echo __('%%id%% - %%ser_icono%% - %%ser_link%% - %%ser_nombre%%', array('%%id%%' => link_to($servicios->getId(), 'servicios_edit', $servicios), '%%ser_icono%%' => $servicios->getSerIcono(), '%%ser_link%%' => $servicios->getSerLink(), '%%ser_nombre%%' => $servicios->getSerNombre()), 'messages') ?>
</td>
