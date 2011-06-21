<?php use_helper('I18N', 'Date') ?>
<?php include_partial('comment/assets') ?>
<?php include_partial('comment/flashes') ?>

<div id="sf_admin_container">

    <div class="title">
        <h1><?php echo __('Lista de Comentarios', array(), 'messages') ?></h1>
       <?php include_partial('comment/list_action_new', array('helper' => $helper)) ?>
    </div>
  <div id="sf_admin_bar">
    <?php include_partial('comment/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>
  
        <div class="content-box">
            <div class="content-box-header">


           <?php  include_partial('comment/search');?>

            </div>
            <div id="sf_admin_header">
                <?php include_partial('comment/list_header', array('pager' => $pager)) ?>
            </div>



            <div id="sf_admin_content">
                                <div class="sf_admin_table_content">
                     <form action="<?php echo url_for('comment_collection', array('action' => 'batch')) ?>" method="post">
                                        <div id="list_bloc_content">
                        <?php include_partial('comment/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
                    </div>
                   
                                        </form>
                </div>
                                </div>
                </div>
                <div id="sf_admin_footer">
                    <?php include_partial('comment/list_footer', array('pager' => $pager)) ?>
                </div>
</div>
