<h4><?php echo "Welcome to Lifewords!"; ?></h4>
<?php echo h($user['User']['User_Email']) ?>
<?php echo "Change Picture" ?>
<?php echo $this->Html->link('Edit Profile', array('controller' => 'users', 'action' => 'userEdit')); ?>
<?php echo "View Friends" ?>
<?php echo $this->Form->postLink('Logout', array('controller' => 'users', 'action' => 'logout')); ?>