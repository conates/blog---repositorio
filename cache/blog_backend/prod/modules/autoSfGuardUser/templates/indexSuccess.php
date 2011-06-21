<?php use_helper('I18N', 'Date') ?>
<?php include_partial('sfGuardUser/assets') ?>
<?php include_partial('sfGuardUser/flashes') ?>

<div id="sf_admin_container">

    <div class="title">
        <h1><?php echo __('User list', array(), 'messages') ?></h1>
       <?php include_partial('sfGuardUser/list_action_new', array('helper' => $helper)) ?>
    </div>
  <div id="sf_admin_bar">
    <?php include_partial('sfGuardUser/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>
  
        <div class="content-box">
            <div class="content-box-header">


           <?php  include_partial('sfGuardUser/search');?>

            </div>
            <div id="sf_admin_header">
                <?php include_partial('sfGuardUser/list_header', array('pager' => $pager)) ?>
            </div>



            <div id="sf_admin_content">
                                <div class="sf_admin_table_content">
                     <form action="<?php echo url_for('sf_guard_user_collection', array('action' => 'batch')) ?>" method="post">
                                        <div id="list_bloc_content">
                        <?php include_partial('sfGuardUser/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
                    </div>
                   
                                        </form>
                </div>
                                </div>
                </div>
                <div id="sf_admin_footer">
                    <?php include_partial('sfGuardUser/list_footer', array('pager' => $pager)) ?>
                </div>
</div>
