<div class="services form">
<?php echo $this->Form->create('Service');?>
	<fieldset>
		<legend><?php echo __('Edit Service'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('address');
		echo $this->Form->input('password_type_id');
		echo $this->Form->input('site_id');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Service.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Service.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Password Types'), array('controller' => 'password_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Password Type'), array('controller' => 'password_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Passwords'), array('controller' => 'passwords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Password'), array('controller' => 'passwords', 'action' => 'add')); ?> </li>
	</ul>
</div>
