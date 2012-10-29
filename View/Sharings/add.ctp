<div class="sharings form">
<?php echo $this->Form->create('Sharing'); ?>
	<fieldset>
		<legend><?php echo __('Add Sharing'); ?></legend>
	<?php
		echo $this->Form->input('User_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sharings'), array('action' => 'index')); ?></li>
	</ul>
</div>
