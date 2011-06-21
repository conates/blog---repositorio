<?php use_helper('I18N', 'Date') ?>
<?php include_partial('sfGuardUser/assets') ?>
<div id="sf_admin_container">
  <h1><?php echo __('Aperçu SfGuardUser', array(), 'messages') ?></h1>

   <div id="sf_admin_content">
      <?php include_partial('sfGuardUser/show', array('form' => $form, 'sf_guard_user' => $sf_guard_user, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>
      
  <div class="clearfix"></div>
  <div class="sf_admin_actions">
      <?php include_partial('sfGuardUser/show_actions', array('form' => $form, 'sf_guard_user' => $sf_guard_user, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>  
</div>
