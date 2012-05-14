<div class="services view">
<h2><?php  echo __('Service');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($service['Service']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($service['Service']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($service['PasswordType']['name'], array('controller' => 'password_types', 'action' => 'view', $service['PasswordType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($service['Site']['name'], array('controller' => 'sites', 'action' => 'view', $service['Site']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($service['Service']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($service['Service']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($service['Service']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service'), array('action' => 'edit', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service'), array('action' => 'delete', $service['Service']['id']), null, __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Password Types'), array('controller' => 'password_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Password Type'), array('controller' => 'password_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Passwords'), array('controller' => 'passwords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Password'), array('controller' => 'passwords', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Passwords');?></h3>
	<?php if (!empty($service['Password'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Service Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Passwordtext'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($service['Password'] as $password): ?>
		<tr>
			<td><?php echo $password['id'];?></td>
			<td><?php echo $password['service_id'];?></td>
			<td><?php echo $password['username'];?></td>
			<td><?php echo $password['passwordtext'];?></td>
			<td><?php echo $password['created'];?></td>
			<td><?php echo $password['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'passwords', 'action' => 'view', $password['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'passwords', 'action' => 'edit', $password['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'passwords', 'action' => 'delete', $password['id']), null, __('Are you sure you want to delete # %s?', $password['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Password'), array('controller' => 'passwords', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
