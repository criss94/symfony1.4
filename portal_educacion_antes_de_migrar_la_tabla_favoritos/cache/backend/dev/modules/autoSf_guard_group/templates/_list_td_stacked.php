<td colspan="5">
  <?php echo __('%%id%% - %%name%% - %%description%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($sf_guard_group->getId(), 'sf_guard_group_edit', $sf_guard_group), '%%name%%' => $sf_guard_group->getName(), '%%description%%' => $sf_guard_group->getDescription(), '%%created_at%%' => false !== strtotime($sf_guard_group->getCreatedAt()) ? format_date($sf_guard_group->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($sf_guard_group->getUpdatedAt()) ? format_date($sf_guard_group->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
