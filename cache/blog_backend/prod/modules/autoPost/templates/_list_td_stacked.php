<td colspan="7">
  <?php echo __('%%title%% - %%user_id%% - %%state%% - %%categories_list%% - %%tags_list%% - %%date%% - %%Comentarios%%', array('%%title%%' => $post->getTitle(), '%%user_id%%' => $post->getUserId(), '%%state%%' => $post->getState(), '%%categories_list%%' => $post->getCategoriesList(), '%%tags_list%%' => $post->getTagsList(), '%%date%%' => false !== strtotime($post->getDate()) ? format_date($post->getDate(), "f") : '&nbsp;', '%%Comentarios%%' => $post->getComentarios()), 'messages') ?>
</td>
