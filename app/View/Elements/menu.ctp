<ul class="nav nav-pills nav-stacked">
	<li><?php echo $this->Html->link('Connections', array('controller' => 'connections', 'action' => 'index')) ?></li>
	<li>
		<?php echo $this->Html->link('Twitter', array('controller' => 'connections', 'action' => 'twitter')) ?>
		<?php if (!empty($this->Session->read('Auth.Twitter'))): ?>
		<ul>
			<li><?php echo $this->Html->link('User Profile', array('controller' => 'twitter', 'action' => 'index')) ?></li>
			<li><?php echo $this->Html->link('Timeline', array('controller' => 'twitter', 'action' => 'timeline')) ?></li>
		</ul>
		<?php endif ?>
	</li>
	<li>
		<?php echo $this->Html->link('Facebook', array('controller' => 'connections', 'action' => 'facebook')) ?>
		<?php if (!empty($this->Session->read('Auth.Facebook'))): ?>
		<ul>
			<li><?php echo $this->Html->link('User Profile', array('controller' => 'facebook', 'action' => 'index')) ?></li>
			<li><?php echo $this->Html->link('Friends', array('controller' => 'facebook', 'action' => 'friends')) ?></li>
		</ul>
		<?php endif ?>
	</li>
</ul>
