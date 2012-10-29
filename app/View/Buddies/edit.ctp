<div class="buddies form">
<?php echo $this->Form->create('Buddy'); ?>
	<fieldset>
		<legend><?php echo __('Edit Buddy'); ?></legend>
	<?php
		echo $this->Form->input('Buddy_1');
		echo $this->Form->input('Buddy_2');
		echo $this->Form->input('Friend');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Buddy.Friend')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Buddy.Friend'))); ?></li>
		<li><?php echo $this->Html->link(__('List Buddies'), array('action' => 'index')); ?></li>
	</ul>
</div>
