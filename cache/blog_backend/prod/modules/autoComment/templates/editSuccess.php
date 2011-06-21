<?php use_helper('I18N', 'Date') ?>
<?php include_partial('comment/assets') ?>
<div id="sf_admin_container"    >
   <?php include_partial('comment/flashes') ?>
  <h1><?php echo __('Editando Comentario %%name%%', array('%%name%%' => $comment->getName()), 'messages') ?></h1>



  <div id="sf_admin_header">
    <?php include_partial('comment/form_header', array('comment' => $comment, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('comment/form', array('comment' => $comment, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('comment/form_footer', array('comment' => $comment, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
