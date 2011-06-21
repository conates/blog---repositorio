<td colspan="3">
  <?php echo __('%%id%% - %%name%% - %%description%%', array('%%id%%' => link_to($tag->getId(), 'tag_edit', $tag), '%%name%%' => $tag->getName(), '%%description%%' => $tag->getDescription()), 'messages') ?>
</td>
