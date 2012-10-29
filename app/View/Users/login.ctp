<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lifewords Login</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<div id="wrapper">

	<div id="messagebox">
<?php echo $this->Session->flash('Auth');?>
<?php echo $this->Session->flash(); ?>
    </div><!--messagebox-->
    
		<div id="loginview">
    		<div id="loginbox">
				<?php echo $this->Form->create(); ?>
    			<fieldset>
        			<legend><?php echo __('Please enter your username and password'); ?></legend>
    			<?php
	        		echo $this->Form->input('User_Email');
					echo $this->Form->input('User_Password', array('type' => 'password'));
    			?>
				<?php echo $this->Form->end(__('Login')); ?>                     
                </fieldset>     	
        	</div><!--loginbox-->
        </div><!--loginview-->
        
    </div><!--wrapper-->
    

</body>
</html>