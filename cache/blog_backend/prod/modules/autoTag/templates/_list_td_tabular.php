<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($tag->getId(), 'tag_edit', $tag) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $tag->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $tag->getDescription() ?>
</td>
