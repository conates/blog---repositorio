  <div class="list_batch_actions">
    <ul>
            <?php if ($sf_user->hasCredential(array(  0 =>   array(    0 => 'Administrador',    1 => 'Autor',    2 => 'Colaborador',  ),))): ?>
<?php echo $helper->linkToNew(array(  'credentials' =>   array(    0 =>     array(      0 => 'Administrador',      1 => 'Autor',      2 => 'Colaborador',    ),  ),  'params' =>   array(  ),  'class_suffix' => 'new',  'label' => 'New',)) ?>
<?php endif; ?>

                </ul>
      </div>

