<td class="text-center">
  	<a class="link_actions marginright10" title="Editar" href="/backend_dev.php<?php echo url_for('/service/'.$servicios->getId().'/edit') ?>"><i class="icon_edit fa fa-pencil-square" aria-hidden="true"></i></a>
    <?php //echo $helper->linkToEdit($servicios, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <?php echo $helper->linkToDelete($servicios, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
</td>
