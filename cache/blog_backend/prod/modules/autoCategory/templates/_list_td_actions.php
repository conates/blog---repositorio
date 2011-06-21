<td class="actions_table">
  <ul class="sf_admin_td_actions">
    <?php if ($sf_user->hasCredential(array(  0 =>   array(    0 => 'Administrador',    1 => 'Editor',  ),))): ?>
<?php echo $helper->linkToEdit($category, array(  'credentials' =>   array(    0 =>     array(      0 => 'Administrador',      1 => 'Editor',    ),  ),  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
<?php endif; ?>
    
          
    <?php if ($sf_user->hasCredential(array(  0 =>   array(    0 => 'Administrador',  ),))): ?>
<?php echo $helper->linkToDeleteList($category, array(  'credentials' =>   array(    0 =>     array(      0 => 'Administrador',    ),  ),  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
<?php endif; ?>

        
  </ul>
</td>
