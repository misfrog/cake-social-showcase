<h3>Your Facebook Friends</h3>

<ul class="media-list">
	<?php foreach ($friends['data'] as $friend): ?>
	<li class="media">
		<img class="pull-left" src="http://graph.facebook.com/<?php echo $friend['id'] ?>/picture" />
		<div class="media-body">
			<span class="media-heading"><?php echo $friend['name'] ?></span>
		</div>
	</li>
	<?php endforeach ?>
</ul>
