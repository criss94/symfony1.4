<td colspan="7">
  <?php echo __('%%id%% - %%not_nombre%% - %%not_link%% - %%not_imagen%% - %%not_activo%% - %%not_inicio_pub%% - %%not_fin_pub%%', array('%%id%%' => link_to($noticias->getId(), 'noticias_edit', $noticias), '%%not_nombre%%' => $noticias->getNotNombre(), '%%not_link%%' => $noticias->getNotLink(), '%%not_imagen%%' => $noticias->getNotImagen(), '%%not_activo%%' => $noticias->getNotActivo(), '%%not_inicio_pub%%' => $noticias->getNotInicioPub(), '%%not_fin_pub%%' => $noticias->getNotFinPub()), 'messages') ?>
</td>
