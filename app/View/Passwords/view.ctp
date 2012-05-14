<div class="passwords view">
<h2><?php  echo __('Password');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($password['Password']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo $this->Html->link($password['Service']['id'], array('controller' => 'services', 'action' => 'view', $password['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($password['Password']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passwordtext'); ?></dt>
		<dd>
			<?php echo h($password['Password']['passwordtext']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($password['Password']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($password['Password']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Password'), array('action' => 'edit', $password['Password']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Password'), array('action' => 'delete', $password['Password']['id']), null, __('Are you sure you want to delete # %s?', $password['Password']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Passwords'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Password'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
