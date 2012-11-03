<?php echo $this->Form->create('User'); ?>
<div id="fields" align="center">
	<?php
		echo $this->Form->input('User_Email');
		echo $this->Form->input('User_Password', array('type' => 'password'));
	?>
</div>
<div align="center">
	<?php echo $this->Form->end(__('Login!')); ?>
	<div style="padding-bottom:5px;">
		<div style="color:#000;">Don't have a Lifewords account?</div>
		<?php echo $this->Html->link('Sign Up Now!', array('controller' => 'users', 'action' => 'signup'));?>
    </div>
</div>