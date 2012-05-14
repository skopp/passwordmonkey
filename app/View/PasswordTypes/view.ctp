<div class="passwordTypes view">
<h2><?php  echo __('Password Type');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($passwordType['PasswordType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($passwordType['PasswordType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Password Type'), array('action' => 'edit', $passwordType['PasswordType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Password Type'), array('action' => 'delete', $passwordType['PasswordType']['id']), null, __('Are you sure you want to delete # %s?', $passwordType['PasswordType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Password Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Password Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Services');?></h3>
	<?php if (!empty($passwordType['Service'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Password Type Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($passwordType['Service'] as $service): ?>
		<tr>
			<td><?php echo $service['id'];?></td>
			<td><?php echo $service['address'];?></td>
			<td><?php echo $service['password_type_id'];?></td>
			<td><?php echo $service['site_id'];?></td>
			<td><?php echo $service['notes'];?></td>
			<td><?php echo $service['created'];?></td>
			<td><?php echo $service['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'services', 'action' => 'view', $service['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'services', 'action' => 'edit', $service['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'services', 'action' => 'delete', $service['id']), null, __('Are you sure you want to delete # %s?', $service['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
