<div class="services index">
	<h2><?php echo __('Services');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('password_type_id');?></th>
			<th><?php echo $this->Paginator->sort('site_id');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($services as $service): ?>
	<tr>
		<td><?php echo h($service['Service']['id']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['address']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($service['PasswordType']['name'], array('controller' => 'password_types', 'action' => 'view', $service['PasswordType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($service['Site']['name'], array('controller' => 'sites', 'action' => 'view', $service['Site']['id'])); ?>
		</td>
		<td><?php echo h($service['Service']['notes']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['created']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $service['Service']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $service['Service']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $service['Service']['id']), null, __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Service'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Password Types'), array('controller' => 'password_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Password Type'), array('controller' => 'password_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Passwords'), array('controller' => 'passwords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Password'), array('controller' => 'passwords', 'action' => 'add')); ?> </li>
	</ul>
</div>
