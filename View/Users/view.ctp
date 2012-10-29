<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('User ID'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_Email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_Password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Profile Photo'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_Profile_Photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Nickname'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_Nickname']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['User_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['User_ID']), null, __('Are you sure you want to delete # %s?', $user['User']['User_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
