<h3>Connect to Facebook</h3>

<p>
	You aren't connected to Facebook yet. Click the button to connect Cake Social Showcase with your Facebook account.
</p>

<?php
echo $this->Form->create($model);
echo $this->Form->submit('facebook/connect_light_medium_short.gif');
echo $this->Form->input('postToWall', array(
	'type' => 'checkbox',
	'label' => 'Tell your friends about Cake Social Showcase on your Facebook wall'
	));
echo $this->Form->end();
?>
