<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_title">
  <?php if ('title' == $sort[0]): ?>
    <?php echo link_to(__('Título', array(), 'messages'), '@post', array('query_string' => 'sort=title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Título', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Título', array(), 'messages'), '@post', array('query_string' => 'sort=title&sort_type=asc', 
	'original-title' => 'Trier par '. __('Título', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_user_id">
  <?php if ('user_id' == $sort[0]): ?>
    <?php echo link_to(__('Autor', array(), 'messages'), '@post', array('query_string' => 'sort=user_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Autor', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Autor', array(), 'messages'), '@post', array('query_string' => 'sort=user_id&sort_type=asc', 
	'original-title' => 'Trier par '. __('Autor', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_enum sf_admin_list_th_state">
  <?php if ('state' == $sort[0]): ?>
    <?php echo link_to(__('Estado', array(), 'messages'), '@post', array('query_string' => 'sort=state&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Estado', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Estado', array(), 'messages'), '@post', array('query_string' => 'sort=state&sort_type=asc', 
	'original-title' => 'Trier par '. __('Estado', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_categories_list">
  <?php echo __('Lista de Categorías', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_tags_list">
  <?php echo __('Lista de Etiquetas', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_date">
  <?php if ('date' == $sort[0]): ?>
    <?php echo link_to(__('Fecha', array(), 'messages'), '@post', array('query_string' => 'sort=date&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
	'original-title' => 'Trier par '. __('Fecha', array(), 'messages'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Fecha', array(), 'messages'), '@post', array('query_string' => 'sort=date&sort_type=asc', 
	'original-title' => 'Trier par '. __('Fecha', array(), 'messages'))) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_Comentarios">
  <?php echo __('Comentarios', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>