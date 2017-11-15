<td class="text-center">
  <?php echo $sf_guard_user->getFirstName() ?>
</td>
<td class="text-center">
  <?php echo $sf_guard_user->getLastName() ?>
</td>
<td class="text-center">
  <?php echo $sf_guard_user->getEmailAddress() ?>
</td>
<td class="text-center">
  <?php echo $sf_guard_user->getUsername() ?>
</td>
<td class="text-center">
    <?php if($sf_guard_user->getIsActive()): ?>
        <?php //echo $botones->getBtnActivo() ?>
        <i class="icon_new link_actions fa fa-check-circle" aria-hidden="true"></i>
    <?php else: ?>
        <i class="icon_delete link_actions fa fa-times-circle" aria-hidden="true"></i>
    <?php endif; ?>
    <?php //echo get_partial('sf_guard_user/list_field_boolean', array('value' => $sf_guard_user->getIsActive())) ?>
</td>
<td class="text-center">
    <?php if($sf_guard_user->getIsSuperAdmin()): ?>
        <?php //echo $botones->getBtnActivo() ?>
        <i class="icon_new link_actions fa fa-check-circle" aria-hidden="true"></i>
    <?php else: ?>
        <i class="icon_delete link_actions fa fa-times-circle" aria-hidden="true"></i>
    <?php endif; ?>
  <?php //echo get_partial('sf_guard_user/list_field_boolean', array('value' => $sf_guard_user->getIsSuperAdmin())) ?>
</td>
<td class="text-center">
  <?php echo false !== strtotime($sf_guard_user->getCreatedAt()) ? format_date($sf_guard_user->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<!--
<td class="sf_admin_date sf_admin_list_td_last_login">
  <?php //echo false !== strtotime($sf_guard_user->getLastLogin()) ? format_date($sf_guard_user->getLastLogin(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php //echo false !== strtotime($sf_guard_user->getCreatedAt()) ? format_date($sf_guard_user->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php //echo false !== strtotime($sf_guard_user->getUpdatedAt()) ? format_date($sf_guard_user->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
-->
