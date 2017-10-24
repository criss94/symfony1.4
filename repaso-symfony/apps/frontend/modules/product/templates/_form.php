<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('product/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <a href="<?php echo url_for('product/index') ?>">volver</a>
          <?php if (!$form->getObject()->isNew()): ?>
            <?php echo link_to('Delete', 'product/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
      <?php //echo $form['prd_name']->renderRow() ?>
      <?php //echo $form['prd_description']->renderRow() ?>
      <?php //echo $form['prd_price']->renderRow() ?>
      <?php //echo image_tag(url_for('/uploads/assets/'.$form['prd_photo']->renderRow())) ?>
    </tbody>
  </table>
</form>
