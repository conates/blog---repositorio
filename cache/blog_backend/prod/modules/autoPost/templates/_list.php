<div class="sf_admin_list">
  <?php if (!$pager->getNbResults()): ?>
  <p><?php echo __('No result', array(), 'sf_admin') ?></p>
  <?php else: ?>
  <?php if ($pager->haveToPaginate()): ?>
  <div class="paginate_top">
       <div class="sf_admin_actions f_left">
                        <?php include_partial('post/list_batch_actions', array('helper' => $helper)) ?>
                       
                    </div>
    
    <?php include_partial('post/pagination', array('pager' => $pager)) ?>
  </div>
 <?php endif; ?>
  <table cellspacing="0">
    <thead>
      <tr>
                  <th id="sf_admin_list_batch_actions">
            <input type="checkbox" id="sf_admin_list_batch_checkbox"  onclick="checkAll();" />
            <label class="" for="sf_admin_list_batch_checkbox"></label>
          </th>
                  <?php include_partial('post/list_th_tabular', array('sort' => $sort)) ?>
                    <th id="sf_admin_list_th_actions"><?php echo __('Actions', array(), 'sf_admin') ?></th>
                  </tr>
        </thead>
        <tfoot>
          <tr>
            <th colspan="9">
              <?php if ($pager->haveToPaginate()): ?>
              <?php include_partial('post/pagination', array('pager' => $pager)) ?>
              <?php endif; ?>
              <div class="f_left list_results">
              <?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?>
            
              <?php include_partial('post/pagination_list_select', array( 'pager' => $pager)) ?>
                <?php if ($pager->haveToPaginate()): ?>
              <?php echo __(' (%%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?>
              <?php endif; ?>
              </div>
                <div class="clearfix"></div>
               <?php include_partial('post/list_actions', array('helper' => $helper)) ?>
            </th>
          </tr>
        </tfoot>
        
	
	<tbody class='{toggle_url: "<?php echo url_for($helper->getRouteArrayForAction('toggleBoolean', 'post')) ?>"}'>
          <?php foreach ($pager->getResults() as $i => $post): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?>
          <tr class="sf_admin_row <?php echo $odd ?> {pk: <?php echo $post->getPrimaryKey() ?>}">
                  <?php include_partial('post/list_td_batch_actions', array('post' => $post, 'helper' => $helper, 'key' => $i )) ?>
                  <?php include_partial('post/list_td_tabular', array('post' => $post)) ?>
                  <?php include_partial('post/list_td_actions', array('post' => $post, 'helper' => $helper)) ?>
              </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php endif; ?>
</div>

<script type="text/javascript">
  /* <![CDATA[ */
  function checkAll()
  {
    var allInputs = $('.sf_admin_batch_checkbox');

    allInputs.each(function(intIndex)
    {
      $(this).attr('checked', $('#sf_admin_list_batch_checkbox').is(':checked'));
      $(this).trigger("updateState");
    });
    //var boxes = document.getElementsByTagName('input'); for(var index = 0; index < boxes.length; index++) { box = boxes[index]; if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox') box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked } return true;
  }
  /* ]]> */
</script>
