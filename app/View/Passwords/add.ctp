<div class="passwords form">
<?php echo $this->Form->create('Password');?>
	<fieldset>
		<legend><?php echo __('Add Password'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Passwords'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
