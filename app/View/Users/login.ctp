<?php echo $this->Form->create('User'); ?>
<div id="fields" align="center">
	<?php
		echo $this->Form->input('User_Email', array('label' => 'Email'));
		echo $this->Form->input('User_Password', array('type' => 'password', 'label' => 'Password'));
	?>
</div>
<div align="center">
	<?php echo $this->Form->end(__('Login!')); ?>
	<div style="padding-bottom:5px;"> 
    	<?php echo "Don't have a Lifewords account? "; echo $this->Html->link('Sign Up Now!', array('controller' => 'users', 'action' => 'signup'));?>
    </div>
</div>