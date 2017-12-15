<td colspan="3">
  <?php echo __('%%id%% - %%cat_nombre%% - %%cat_posicion%%', array('%%id%%' => link_to($categorias->getId(), 'categorias_edit', $categorias), '%%cat_nombre%%' => $categorias->getCatNombre(), '%%cat_posicion%%' => $categorias->getCatPosicion()), 'messages') ?>
</td>
