<?php
/**
 * Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="row">
	<div class="col-md-8">
		<h2><?php echo __d('users', 'Sign Up'); ?></h2>
		<fieldset>
			<?php
				echo $this->Form->create($model, array(
					'inputDefaults' => array('div' => 'form-group', 'wrapInput' => false, 'class' => 'form-control'), 'class' => 'well'
					));
				echo $this->Form->input('username', array(
					'label' => __d('users', 'Username')));
				echo $this->Form->input('email', array(
					'label' => __d('users', 'E-mail (used as sign in)'),
					'error' => array('isValid' => __d('users', 'Must be a valid email address'),
					'isUnique' => __d('users', 'An account with that email already exists'))));
				echo $this->Form->input('password', array(
					'label' => __d('users', 'Password'),
					'type' => 'password'));
				echo $this->Form->input('temppassword', array(
					'label' => __d('users', 'Password (confirm)'),
					'type' => 'password'));
			?>
			<label class="checkbox-inline">
				<?php
				$tosLink = $this->Html->link(__d('users', 'Terms of Service'), array('controller' => 'pages', 'action' => 'tos', 'plugin' => null));
				echo $this->Form->input('tos', array(
					'type' => 'checkbox',					
					'label' => __d('users', 'I have read and agreed to ') . $tosLink,
					'class' => 'checkbox-inline'
					));
				?>
			</label>
			<?php
			echo $this->Form->submit(__d('users', 'Submit'), array('div' => null, 'class' => 'btn btn-primary'));
			echo $this->Form->end();
			?>
		</fieldset>
	</div>
</div>
