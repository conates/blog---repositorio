<?php use_helper('I18N', 'Date') ?>
<?php include_partial('category/assets') ?>
<div id="sf_admin_container"    >
   <?php include_partial('category/flashes') ?>
  <h1><?php echo __('Editando Categoría %%name%%', array('%%name%%' => $category->getName()), 'messages') ?></h1>



  <div id="sf_admin_header">
    <?php include_partial('category/form_header', array('category' => $category, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('category/form', array('category' => $category, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('category/form_footer', array('category' => $category, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
