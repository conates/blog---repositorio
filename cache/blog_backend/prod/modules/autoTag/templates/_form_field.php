<?php if ($field->isPartial()): ?>
  <?php include_partial('tag/'.$name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php elseif ($field->isComponent()): ?>
  <?php include_component('tag', $name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php else: ?>
  <div class="<?php echo $class ?><?php $form[$name]->hasError() and print ' errors' ?>">    
	<?php if ($form[$name]->hasError()): ?>
      <div class="error">        
	  <?php $errors = $form[$name]->getError(); 
	  $errors = is_array( $errors )? $errors: array($errors);?>
		<?php foreach ($errors as $error): ?>
      <?php echo $error ?>
    <?php endforeach; ?>
      </div>
    <?php endif; ?>
	
    <div>
      <?php echo $form[$name]->renderLabel($label) ?>
      <div class="content"><?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?></div>

      <?php if ($help): ?>
        <div class="help"><?php echo __($help, array(), 'messages') ?></div>
      <?php elseif ($help = $form[$name]->renderHelp()): ?>
        <div class="help"><?php echo $help ?></div>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
