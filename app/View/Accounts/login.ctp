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
		<?php echo $this->Session->flash('auth');?>
		<h2><?php echo __d('users', 'Sign In'); ?></h2>
		<fieldset>
			<?php
			echo $this->Form->create($model, array(
				'action' => 'login',
				'id' => 'LoginForm',
				'inputDefaults' => array('div' => 'form-group', 'wrapInput' => false, 'class' => 'form-control'), 'class' => 'well'
				));
			echo $this->Form->input('email', array(
				'label' => __d('users', 'Email')));
			echo $this->Form->input('password',  array(
				'label' => __d('users', 'Password')));
			?>
			<label class="checkbox-inline">
				<?php
				echo $this->Form->input('remember_me', array(
					'type' => 'checkbox',
					'label' =>  __d('users', 'Remember Me'),
					'class' => 'checkbox-inline'	
					));
				?>
			</label>
			<?php
			echo '<p>' . $this->Html->link(__d('users', 'I forgot my password'), array('action' => 'reset_password')) . '</p>';

			echo $this->Form->hidden('User.return_to', array(
				'value' => $return_to));
			echo $this->Form->submit(__d('users', 'Sign In'), array('div' => null, 'class' => 'btn btn-primary'));
			echo $this->Form->end();
			?>

		</fieldset>
		
		<p>Or you can <a href="<?php echo $this->Html->url(array('controller' => 'accounts', 'action' => 'add')) ?>">signup</a> with a new account.</p>

		<p>
			<a href="<?php echo $this->Html->url('/connect/twitter', true) ?>">
				<?php echo $this->Html->image('twitter/sign-in-with-twitter-d.png') ?>		
			</a>
		</p>
		<p>
			<a href="<?php echo $this->Html->url('/connect/facebook', true) ?>">
				<?php echo $this->Html->image('facebook/sign-in-with-facebook.png') ?>		
			</a>
		</p>
	</div>	
</div>
