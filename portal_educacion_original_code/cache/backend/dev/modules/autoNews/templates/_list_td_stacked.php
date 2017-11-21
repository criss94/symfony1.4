<td colspan="5">
  <?php echo __('%%id%% - %%not_nombre%% - %%not_link%% - %%not_imagen%% - %%not_activo%%', array('%%id%%' => link_to($noticias->getId(), 'noticias_edit', $noticias), '%%not_nombre%%' => $noticias->getNotNombre(), '%%not_link%%' => $noticias->getNotLink(), '%%not_imagen%%' => $noticias->getNotImagen(), '%%not_activo%%' => $noticias->getNotActivo()), 'messages') ?>
</td>
