<td class="actions_table">
  <ul class="sf_admin_td_actions">
    <?php if ($sf_user->hasCredential(array(  0 =>   array(    0 => 'Administrador',    1 => 'Editor',    2 => 'Autor',    3 => 'Colaborador',  ),))): ?>
<?php echo $helper->linkToEdit($comment, array(  'credentials' =>   array(    0 =>     array(      0 => 'Administrador',      1 => 'Editor',      2 => 'Autor',      3 => 'Colaborador',    ),  ),  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
<?php endif; ?>
    
          
    <?php if ($sf_user->hasCredential(array(  0 =>   array(    0 => 'Administrador',  ),))): ?>
<?php echo $helper->linkToDeleteList($comment, array(  'credentials' =>   array(    0 =>     array(      0 => 'Administrador',    ),  ),  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
<?php endif; ?>

        
  </ul>
</td>
