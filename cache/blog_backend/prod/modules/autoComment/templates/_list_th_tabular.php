<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_id">
  <?php if ('id' == $sort[0]): ?>
    <?php echo link_to(__('Id', array(), 'messages'), '@comment', array('query_string' => 'sort=id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Id', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Id', array(), 'messages'), '@comment', array('query_string' => 'sort=id&sort_type=asc', 
	'original-title' => 'Trier par '. __('Id', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_name">
  <?php if ('name' == $sort[0]): ?>
    <?php echo link_to(__('Nombre', array(), 'messages'), '@comment', array('query_string' => 'sort=name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Nombre', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Nombre', array(), 'messages'), '@comment', array('query_string' => 'sort=name&sort_type=asc', 
	'original-title' => 'Trier par '. __('Nombre', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_email">
  <?php if ('email' == $sort[0]): ?>
    <?php echo link_to(__('Email', array(), 'messages'), '@comment', array('query_string' => 'sort=email&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Email', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Email', array(), 'messages'), '@comment', array('query_string' => 'sort=email&sort_type=asc', 
	'original-title' => 'Trier par '. __('Email', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_url">
  <?php if ('url' == $sort[0]): ?>
    <?php echo link_to(__('Url', array(), 'messages'), '@comment', array('query_string' => 'sort=url&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Url', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Url', array(), 'messages'), '@comment', array('query_string' => 'sort=url&sort_type=asc', 
	'original-title' => 'Trier par '. __('Url', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_comment">
  <?php if ('comment' == $sort[0]): ?>
    <?php echo link_to(__('Comentario', array(), 'messages'), '@comment', array('query_string' => 'sort=comment&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Comentario', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Comentario', array(), 'messages'), '@comment', array('query_string' => 'sort=comment&sort_type=asc', 
	'original-title' => 'Trier par '. __('Comentario', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_enum sf_admin_list_th_state">
  <?php if ('state' == $sort[0]): ?>
    <?php echo link_to(__('Estado', array(), 'messages'), '@comment', array('query_string' => 'sort=state&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Estado', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Estado', array(), 'messages'), '@comment', array('query_string' => 'sort=state&sort_type=asc', 
	'original-title' => 'Trier par '. __('Estado', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_user_id">
  <?php if ('user_id' == $sort[0]): ?>
    <?php echo link_to(__('Usuario', array(), 'messages'), '@comment', array('query_string' => 'sort=user_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Usuario', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Usuario', array(), 'messages'), '@comment', array('query_string' => 'sort=user_id&sort_type=asc', 
	'original-title' => 'Trier par '. __('Usuario', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_post_id">
  <?php if ('post_id' == $sort[0]): ?>
    <?php echo link_to(__('Post', array(), 'messages'), '@comment', array('query_string' => 'sort=post_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Post', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Post', array(), 'messages'), '@comment', array('query_string' => 'sort=post_id&sort_type=asc', 
	'original-title' => 'Trier par '. __('Post', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_created_at">
  <?php if ('created_at' == $sort[0]): ?>
    <?php echo link_to(__('Fecha de Creación', array(), 'messages'), '@comment', array('query_string' => 'sort=created_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Fecha de Creación', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Fecha de Creación', array(), 'messages'), '@comment', array('query_string' => 'sort=created_at&sort_type=asc', 
	'original-title' => 'Trier par '. __('Fecha de Creación', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_updated_at">
  <?php if ('updated_at' == $sort[0]): ?>
    <?php echo link_to(__('Última actualización', array(), 'messages'), '@comment', array('query_string' => 'sort=updated_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Última actualización', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Última actualización', array(), 'messages'), '@comment', array('query_string' => 'sort=updated_at&sort_type=asc', 
	'original-title' => 'Trier par '. __('Última actualización', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>