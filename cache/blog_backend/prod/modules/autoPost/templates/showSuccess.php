<?php use_helper('I18N', 'Date') ?>
<?php include_partial('post/assets') ?>
<div id="sf_admin_container">
  <h1><?php echo __('Aperçu Post', array(), 'messages') ?></h1>

   <div id="sf_admin_content">
      <?php include_partial('post/show', array('form' => $form, 'post' => $post, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>
      
  <div class="clearfix"></div>
  <div class="sf_admin_actions">
      <?php include_partial('post/show_actions', array('form' => $form, 'post' => $post, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>  
</div>
