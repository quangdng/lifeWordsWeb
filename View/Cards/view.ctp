<div class="cards view">
<h2><?php  echo __('Card'); ?></h2>
	<dl>
		<dt><?php echo __('Card ID'); ?></dt>
		<dd>
			<?php echo h($card['Card']['Card_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Text'); ?></dt>
		<dd>
			<?php echo h($card['Card']['Card_Text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Photo'); ?></dt>
		<dd>
			<?php echo h($card['Card']['Card_Photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Sound'); ?></dt>
		<dd>
			<?php echo h($card['Card']['Card_Sound']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Sound Time'); ?></dt>
		<dd>
			<?php echo h($card['Card']['Card_Sound_Time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Voice'); ?></dt>
		<dd>
			<?php echo h($card['Card']['Card_Voice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Voice Time'); ?></dt>
		<dd>
			<?php echo h($card['Card']['Card_Voice_Time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Length'); ?></dt>
		<dd>
			<?php echo h($card['Card']['Card_Length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Date'); ?></dt>
		<dd>
			<?php echo h($card['Card']['Card_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Owner'); ?></dt>
		<dd>
			<?php echo h($card['Card']['Card_Owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card URL'); ?></dt>
		<dd>
			<?php echo h($card['Card']['Card_URL']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card'), array('action' => 'edit', $card['Card']['Card_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card'), array('action' => 'delete', $card['Card']['Card_ID']), null, __('Are you sure you want to delete # %s?', $card['Card']['Card_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('action' => 'add')); ?> </li>
	</ul>
</div>
