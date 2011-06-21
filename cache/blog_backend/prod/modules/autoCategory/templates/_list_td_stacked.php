<td colspan="3">
  <?php echo __('%%id%% - %%name%% - %%description%%', array('%%id%%' => link_to($category->getId(), 'category_edit', $category), '%%name%%' => $category->getName(), '%%description%%' => $category->getDescription()), 'messages') ?>
</td>
