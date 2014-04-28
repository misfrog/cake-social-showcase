<h3>Your Connections</h3>

<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<?php echo $this->Html->image('twitter/t_logo-a.png', array('width' => 36, 'height' => 36)) ?> Twitter
		</h4>
	</div>
	<div class="panel-body">
		<?php if (!empty($this->Session->read('Auth.Twitter'))): ?>
		You are connected to Twitter as <?php echo $this->Session->read('Auth.Twitter.display_name') ?>.<br />
		<?php else: ?>
		You are not yet connected to Twitter.<br />
		<?php endif; ?>
		Click <?php echo $this->Html->link('here', array('action' => 'twitter')) ?> to manage your Twitter connection.
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<?php echo $this->Html->image('facebook/f_logo.jpg', array('width' => 36, 'height' => 36)) ?> Twitter
		</h4>
	</div>
	<div class="panel-body">
		<?php if (!empty($this->Session->read('Auth.Facebook'))): ?>
		You are connected to Facebook as <?php echo $this->Session->read('Auth.Facebook.display_name') ?>.<br />
		<?php else: ?>
		You are not yet connected to Facebook.<br />
		<?php endif; ?>
		Click <?php echo $this->Html->link('here', array('action' => 'facebook')) ?> to manage your Facebook connection.
	</div>
</div>
