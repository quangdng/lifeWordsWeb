<div class="cards form">
<?php echo $this->Form->create('Card'); ?>
	<fieldset>
		<legend><?php echo __('Add Card'); ?></legend>
	<?php
		echo $this->Form->input('Card_Text');
		echo $this->Form->input('Card_Photo');
		echo $this->Form->input('Card_Sound');
		echo $this->Form->input('Card_Sound_Time');
		echo $this->Form->input('Card_Voice');
		echo $this->Form->input('Card_Voice_Time');
		echo $this->Form->input('Card_Length');
		echo $this->Form->input('Card_Date');
		echo $this->Form->input('Card_URL');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?></li>
	</ul>
</div>
