<li class="sf_admin_batch_actions_choice">
  <select id="dropdownStyle" class="f_left" name="batch_action">
    <option value=""><?php echo __('Choose an action', array(), 'sf_admin') ?></option>
    <?php if ($sf_user->hasCredential(array(  0 =>   array(    0 => 'Administrador',  ),))): ?>
<option value="batchDelete"><?php echo __('Delete', array(), 'sf_admin') ?></option>
<?php endif; ?>

  </select>
  <?php $form = new BaseForm(); if ($form->isCSRFProtected()): ?>
    <input type="hidden" name="<?php echo $form->getCSRFFieldName() ?>" value="<?php echo $form->getCSRFToken() ?>" />
  <?php endif; ?>
  <input type="submit" class="graybutton f_left" value="<?php echo __('go', array(), 'sf_admin') ?>" />
</li>
<div class="clearfix"></div>
