<div class="buddies form">
<?php echo $this->Form->create('Buddy'); ?>
	<fieldset>
		<legend><?php echo __('Add Buddy'); ?></legend>
	<?php
		echo $this->Form->input('Buddy_1');
		echo $this->Form->input('Buddy_2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Buddies'), array('action' => 'index')); ?></li>
	</ul>
</div>
