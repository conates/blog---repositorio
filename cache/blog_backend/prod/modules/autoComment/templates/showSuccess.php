<?php use_helper('I18N', 'Date') ?>
<?php include_partial('comment/assets') ?>
<div id="sf_admin_container">
  <h1><?php echo __('Aperçu Comment', array(), 'messages') ?></h1>

   <div id="sf_admin_content">
      <?php include_partial('comment/show', array('form' => $form, 'comment' => $comment, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>
      
  <div class="clearfix"></div>
  <div class="sf_admin_actions">
      <?php include_partial('comment/show_actions', array('form' => $form, 'comment' => $comment, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>  
</div>
