<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $post->getTitle() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_user_id">
  <?php echo $post->getUserId() ?>
</td>
<td class="sf_admin_enum sf_admin_list_td_state">
  <?php echo $post->getState() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_categories_list">
  <?php echo $post->getCategoriesList() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tags_list">
  <?php echo $post->getTagsList() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_date">
  <?php echo false !== strtotime($post->getDate()) ? format_date($post->getDate(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_Comentarios">
  <?php echo $post->getComentarios() ?>
</td>
