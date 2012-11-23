<div id="header" align="center">        <?php echo $this->Html->image('lifewords.png',array('border'=>'0', 
'width'=>'250', 'height'=>'40')); ?>

</div>
<div id="headerline"></div>
<?php echo $this->Form->create('User'); ?>
<div id="fields" align="right">
	<?php
		echo $this->Form->input('User_Email', array('label' => 'Email: '));
		echo $this->Form->input('User_Password', array('type' => 'password', 'label' => 'Password: '));
	?>
</div>
	<?php echo $this->Form->end(__('Login!')); ?>
<div align="left" style="padding-left:35px; padding-bottom:20px;">
	<?php echo $this->Html->link('Sign Up Now!', array('controller' => 'users', 'action' => 'signup'));?>
</div>
