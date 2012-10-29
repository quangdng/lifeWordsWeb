<div class="buddies view">
<h2><?php  echo __('Buddy'); ?></h2>
	<dl>
		<dt><?php echo __('Buddy 1'); ?></dt>
		<dd>
			<?php echo h($buddy['Buddy']['Buddy_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Buddy 2'); ?></dt>
		<dd>
			<?php echo h($buddy['Buddy']['Buddy_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Friend'); ?></dt>
		<dd>
			<?php echo h($buddy['Buddy']['Friend']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Buddy'), array('action' => 'edit', $buddy['Buddy']['Friend'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Buddy'), array('action' => 'delete', $buddy['Buddy']['Friend']), null, __('Are you sure you want to delete # %s?', $buddy['Buddy']['Friend'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Buddies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Buddy'), array('action' => 'add')); ?> </li>
	</ul>
</div>
