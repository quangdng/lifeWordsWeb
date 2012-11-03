<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('User_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('User_Email'); ?></th>
			<th><?php echo $this->Paginator->sort('User_Password'); ?></th>
			<th><?php echo $this->Paginator->sort('User_Profile_Photo'); ?></th>
			<th><?php echo $this->Paginator->sort('User_Nickname'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['User_ID']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['User_Email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['User_Password']); ?>&nbsp;</td>
        
        <?php echo $this->Html->image('lifewords.png',array('border'=>'0', 
'width'=>'350', 'height'=>'120')); ?>

		<td><?php $path = 'http://'.$_SERVER['SERVER_NAME'];
		echo $this->Html->image($path.h($user['User']['User_Profile_Photo']), array('border' => 0, 'width' => '200', 'height' => '200'));
		?>&nbsp;</td>
		<td><?php echo h($user['User']['User_Nickname']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['User_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['User_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['User_ID']), null, __('Are you sure you want to delete # %s?', $user['User']['User_ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
	</ul>
</div>
