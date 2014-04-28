<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	Router::connect('/users', array('plugin' => 'users', 'controller' => 'users'));
	Router::connect('/users/index/*', array('plugin' => 'users', 'controller' => 'users'));
	Router::connect('/users/:action/*', array('plugin' => 'users', 'controller' => 'users'));
	Router::connect('/users/users/:action/*', array('plugin' => 'users', 'controller' => 'users'));
	Router::connect('/signin', array('controller' => 'accounts', 'action' => 'login'));
	Router::connect('/logout', array('controller' => 'accounts', 'action' => 'logout'));
	Router::connect('/signup', array('controller' => 'accounts', 'action' => 'add'));
	
	//Router::connect('/opauth-complete/*', array('controller' => 'appusers', 'action' => 'opauth_complete'));
	
	
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';

	