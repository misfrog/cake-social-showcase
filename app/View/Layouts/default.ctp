<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php echo $this->Html->charset(); ?>
	<title>Cake Social Showcase - <?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css');
		echo $this->Html->css('showcase');
        echo $this->Html->script('//code.jquery.com/jquery-1.10.2.min.js');
        echo $this->Html->script('//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="navbar navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $this->Html->url('/', true) ?>">Cake Social Showcase</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav nav-pills pull-right">
					<?php if (!$this->Session->read('Auth.User')): ?>
						<li>
							<?php echo $this->Html->link('Sign In', array('plugin' => false, 'controller' => 'accounts', 'action' => 'login')) ?>
						</li>
						<li>
							<?php echo $this->Html->link('Sign Up', array('plugin' => false, 'controller' => 'accounts', 'action' => 'add')) ?>
						</li>
					<?php else: ?>
						<li>
							<?php echo $this->Html->link($this->Session->read('Auth.User.username'), array('plugin' => false, 'controller' => 'connections', 'action' => 'index')) ?>
						</li>
						<li>
							<?php echo $this->Html->link('Logout', array('plugin' => false, 'controller' => 'accounts', 'action' => 'logout')) ?>
						</li>
					<?php endif ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<hr />
			<div class="row">
				<div class="col-md-3">
					<?php echo $this->element('menu'); ?>			
				</div>
				<div class="col-md-9">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>					
				</div>
			</div>
		</div>		
	</div>
	<footer>
		<div class="container">
			<hr />
			<div class="row">
				<div class="col-md-2">
					<?php echo $this->Html->link(
							$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
							'http://www.cakephp.org/',
							array('target' => '_blank', 'escape' => false)
						);
					?>					
				</div>
				<div class="col-md-2">
					<?php echo $this->Html->link(
							$this->Html->image('github.png', array('alt' => 'github')),
							'https://github.com/misfrog/cake-social',
							array('target' => '_blank', 'escape' => false)
						);
					?>
				</div>				
			</div>
			<?php echo $this->element('sql_dump'); ?>
		</div>
	</footer>
</body>
</html>
