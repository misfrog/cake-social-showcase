<h3>Connected to Twitter</h3>

<p>
	Cake Social Showcase is already connected to your Twitter account.<br />
	Click the button if you wish to disconnect.
</p>

<?php echo $this->Form->postLink('Disconnect', array('action' => 'delete_twitter'), array('class' => 'btn btn-primary'), 'Are you sure you want to disconnect from Twitter?'); ?>
