<h3>Your Twitter Profile</h3>

<p>Hello, <?php echo $profile->name ?>!</p>
<img src="<?php echo $profile->profile_image_url ?>" />
<dl>
	<dt>Twitter ID:</dt>
	<dd><?php echo $profile->id ?></dd>
	
	<dt>Screen name:</dt>
	<dd><a href="http://twitter.com/<?php echo $profile->screen_name ?>"><?php echo $profile->screen_name ?></a></dd>
	
	<dt>Description:</dt>
	<dd><?php echo $profile->description ?></dd>
	
	<dt>Location:</dt>
	<dd><?php echo $profile->location ?></dd>
	
	<dt>URL:</dt>
	<dd><a href="<?php echo $profile->url ?>">profile url</a></dd>
</dl>
