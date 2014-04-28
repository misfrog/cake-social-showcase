<h3>Connect to Twitter</h3>

<p>
	You haven't created any connections with Twitter yet. Click the button to connect Cake Social Showcase with your Twitter account.
	(You'll be redirected to Twitter where you'll be asked to authorize the connection.)
</p>

<?php
echo $this->Form->create($model);
echo $this->Form->submit('twitter/connect-with-twitter.png');
echo $this->Form->input('postTweet', array(
	'type' => 'checkbox',
	'label' => 'Post a tweet about connecting with Cake Social Showcase'
	));
echo $this->Form->end();
?>
