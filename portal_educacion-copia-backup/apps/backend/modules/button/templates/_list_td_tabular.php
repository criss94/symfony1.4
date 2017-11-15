<td class="text-center">
  <?php echo $botones->getBtnNombre() ?>
</td>
<td class="text-center">
  <?php echo $botones->getBtnLink() ?>
</td>
<td class="text-center">
  <figure>
     <?php echo image_tag(url_for('/uploads/images/'.$botones->getBtnImagen(), 'class=img-responsive'), 'size=110x80') ?>
  </figure>
</td>
<td class="text-center">
    <?php if($botones->getBtnActivo()): ?>
        <?php //echo $botones->getBtnActivo() ?>
        <i class="icon_new link_actions fa fa-check-circle" aria-hidden="true"></i>
    <?php else: ?>
        <i class="icon_delete link_actions fa fa-times-circle" aria-hidden="true"></i>
    <?php endif; ?>
</td>
<td class="text-center">
  <?php echo $botones->getCategorias() ?>
</td>
