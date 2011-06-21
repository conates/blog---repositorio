<?php use_helper('I18N', 'Date') ?>
<?php include_partial('tag/assets') ?>
<div id="sf_admin_container"    >
   <?php include_partial('tag/flashes') ?>
  <h1><?php echo __('Editar Tag %%name%%', array('%%name%%' => $tag->getName()), 'messages') ?></h1>



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
