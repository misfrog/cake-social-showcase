<h3>Your Twitter <span>Home</span> Timeline</h3>

<ul class="nav nav-tabs">
  <li class="active">
  	<?php echo $this->Html->link('Home Timeline', array('controller' => 'twitter', 'action' => 'timeline', 'home')) ?>
  </li>
  <li>
  	<?php echo $this->Html->link('User Timeline', array('controller' => 'twitter', 'action' => 'timeline', 'user')) ?>
  </li>
  <li>
  	<?php echo $this->Html->link('Mentions', array('controller' => 'twitter', 'action' => 'timeline', 'mentions')) ?>
  </li>
  <li>
  	<?php echo $this->Html->link('Favorites', array('controller' => 'twitter', 'action' => 'timeline', 'favorites')) ?>
  </li>
</ul>
<br />
<ul class="media-list">
	<?php foreach ($timeline as $line): ?>
	<li class="media">
		<div class="pull-left">
			<?php echo $this->Html->image($line->user->profile_image_url, array('class' => 'media-object')) ?>
		</div>
		<div class="media-body">
			<strong>
				<?php echo $this->Html->link($line->user->screen_name, $line->user->url, array('class' => 'media-heading')) ?>
			</strong>
			<br />
			<span><?php echo $line->text ?></span>
			<br />
			<small class="postTime"><?php echo $line->created_at ?></small>
		</div>
	</li>			
	<?php endforeach ?>
</ul>
