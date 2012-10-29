<div class="sharings form">
<?php echo $this->Form->create('Sharing'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sharing'); ?></legend>
	<?php
		echo $this->Form->input('User_ID');
		echo $this->Form->input('Card_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sharing.Card_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Sharing.Card_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sharings'), array('action' => 'index')); ?></li>
	</ul>
</div>
