<?php use_helper('I18N', 'Date') ?>
<?php include_partial('comment/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nuevo Comentario', array(), 'messages') ?></h1>

  <?php include_partial('comment/flashes') ?>

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
