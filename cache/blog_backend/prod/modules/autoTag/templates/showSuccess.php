<?php use_helper('I18N', 'Date') ?>
<?php include_partial('tag/assets') ?>
<div id="sf_admin_container">
  <h1><?php echo __('Aperçu Tag', array(), 'messages') ?></h1>

   <div id="sf_admin_content">
      <?php include_partial('tag/show', array('form' => $form, 'tag' => $tag, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>
      
  <div class="clearfix"></div>
  <div class="sf_admin_actions">
      <?php include_partial('tag/show_actions', array('form' => $form, 'tag' => $tag, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>  
</div>
