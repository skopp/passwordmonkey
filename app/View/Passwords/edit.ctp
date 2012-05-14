<div class="passwords form">
<?php echo $this->Form->create('Password');?>
	<fieldset>
		<legend><?php echo __('Edit Password'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('service_id');
		echo $this->Form->input('username');
		echo $this->Form->input('passwordtext');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Password.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Password.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Passwords'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
