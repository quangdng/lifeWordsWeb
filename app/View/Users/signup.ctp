<?php echo $this->Form->create('User'); ?>
<div id="fields" align="center">
	<?php
			echo $this->Form->input('User_Email', array('label' => 'Your Email'));
			echo $this->Form->input('User_Password', array('type' => 'password', 'label' => 'Your Password'));
			echo $this->Form->input('User_Password_Confirmation', array('type' => 'password', 'label' => 'Your Password Confirmation'));
			echo $this->Form->input('User_Nickname', array('label' => 'Your Nickname'));
	?>
	</div>
<div align="center">
<?php echo $this->Form->end(__('Start!')); ?></div>
