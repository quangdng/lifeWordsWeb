<h2><?php echo "Welcome to Lifewords!"; ?></h2>

<?php echo h($user['User']['User_Email']) ?>
<p>
<?php echo "Change Picture" ?>
</p>
<?php echo $this->Html->link('Edit Profile', array('controller' => 'users', 'action' => 'userEdit')); ?>

<?php echo "View Friends" ?>

<div align="center"></div>
