<?php use_helper('I18N', 'Date') ?>
<?php include_partial('post/assets') ?>
<div id="sf_admin_container"    >
   <?php include_partial('post/flashes') ?>
  <h1><?php echo __('Editar Post %%slug%%', array('%%slug%%' => $post->getSlug()), 'messages') ?></h1>



  <div id="sf_admin_header">
    <?php include_partial('post/form_header', array('post' => $post, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('post/form', array('post' => $post, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('post/form_footer', array('post' => $post, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
