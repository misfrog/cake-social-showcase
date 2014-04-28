<h3>Your Facebook Profile</h3>

<p>Hello, <?php echo $profile['first_name'] ?>!</p>
<img src="http://graph.facebook.com/<?php echo $profile['id'] ?>/picture" />
<dl>
	<dt>Facebook ID:</dt>
	<dd><?php echo $profile['id'] ?></dd>
	
	<dt>Name:</dt>
	<dd><?php echo $profile['name'] ?></dd>
	
	<dt>Email:</dt>
	<dd><?php echo isset($profile['email']) ? $profile['email'] : '' ?></dd>
</dl>
