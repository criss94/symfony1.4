<td colspan="7">
  <?php echo __('%%id%% - %%btn_nombre%% - %%btn_link%% - %%btn_imagen%% - %%btn_bg%% - %%btn_activo%% - %%btn_cat_id%%', array('%%id%%' => link_to($botones->getId(), 'botones_edit', $botones), '%%btn_nombre%%' => $botones->getBtnNombre(), '%%btn_link%%' => $botones->getBtnLink(), '%%btn_imagen%%' => $botones->getBtnImagen(), '%%btn_bg%%' => $botones->getBtnBg(), '%%btn_activo%%' => $botones->getBtnActivo(), '%%btn_cat_id%%' => $botones->getBtnCatId()), 'messages') ?>
</td>
