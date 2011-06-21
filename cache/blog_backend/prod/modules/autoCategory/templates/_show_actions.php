<ul class="sf_admin_actions_form">

  <?php echo $helper->linkToList(array(  'params' =>   array(  ),  'class_suffix' => 'list',  'label' => 'Back to list',)) ?>

  <?php if ($sf_user->hasCredential(array(  0 =>   array(    0 => 'Administrador',    1 => 'Editor',  ),))): ?>
<?php echo $helper->linkToEditForShow($category, array(  'credentials' =>   array(    0 =>     array(      0 => 'Administrador',      1 => 'Editor',    ),  ),  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
<?php endif; ?>


  <?php if ($sf_user->hasCredential(array(  0 =>   array(    0 => 'Administrador',  ),))): ?>
<?php echo $helper->linkToDelete($form->getObject(), array(  'credentials' =>   array(    0 =>     array(      0 => 'Administrador',    ),  ),  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
<?php endif; ?>

</ul>