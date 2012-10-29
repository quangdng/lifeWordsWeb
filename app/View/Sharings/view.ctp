<div class="sharings view">
<h2><?php  echo __('Sharing'); ?></h2>
	<dl>
		<dt><?php echo __('User ID'); ?></dt>
		<dd>
			<?php echo h($sharing['Sharing']['User_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card ID'); ?></dt>
		<dd>
			<?php echo h($sharing['Sharing']['Card_ID']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sharing'), array('action' => 'edit', $sharing['Sharing']['Card_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sharing'), array('action' => 'delete', $sharing['Sharing']['Card_ID']), null, __('Are you sure you want to delete # %s?', $sharing['Sharing']['Card_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sharings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sharing'), array('action' => 'add')); ?> </li>
	</ul>
</div>
