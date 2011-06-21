<?php use_helper('I18N', 'Date') ?>
<?php include_partial('category/assets') ?>
<div id="sf_admin_container">
  <h1><?php echo __('Aperçu Category', array(), 'messages') ?></h1>

   <div id="sf_admin_content">
      <?php include_partial('category/show', array('form' => $form, 'category' => $category, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>
      
  <div class="clearfix"></div>
  <div class="sf_admin_actions">
      <?php include_partial('category/show_actions', array('form' => $form, 'category' => $category, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>  
</div>
