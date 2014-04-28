<h3>Connected to Facebook</h3>

<p>
	Cake Social Showcase is already connected to your Facebook account.<br />
	Click the button if you wish to disconnect.
</p>

<?php echo $this->Form->postLink('Disconnect', array('action' => 'delete_facebook'), array('class' => 'btn btn-primary'), 'Are you sure you want to disconnect from Facebook?'); ?>
