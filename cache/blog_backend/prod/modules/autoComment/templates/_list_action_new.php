<span class="f_right new-record"><?php if ($sf_user->hasCredential(array(  0 =>   array(    0 => 'Administrador',    1 => 'Editor',    2 => 'Autor',    3 => 'Colaborador',  ),))): ?>
<?php echo $helper->linkToNew(array(  'credentials' =>   array(    0 =>     array(      0 => 'Administrador',      1 => 'Editor',      2 => 'Autor',      3 => 'Colaborador',    ),  ),  'params' =>   array(  ),  'class_suffix' => 'new',  'label' => 'New',)) ?>
<?php endif; ?>

</span>
<div class="clearfix"></div>
