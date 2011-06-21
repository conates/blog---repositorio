<?php use_helper('I18N', 'Date') ?>
<?php include_partial('tag/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nuevo Tag', array(), 'messages') ?></h1>

  <?php include_partial('tag/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('tag/form_header', array('tag' => $tag, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('tag/form', array('tag' => $tag, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('tag/form_footer', array('tag' => $tag, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
