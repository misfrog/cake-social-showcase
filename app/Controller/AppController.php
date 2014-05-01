<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $components = array(
		'Auth' => array(
			'logoutRedirect' => array('plugin' => false, 'controller' => 'accounts', 'action' => 'login'),
			'flash' => array(
				'element' => 'alert',
				'key' => 'auth',
				'params' => array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
				)
			)
		),
		'Session',
		'Security',
		'Users.RememberMe',
		'Social.Connection' => array(
			'signUpUrl' => array('plugin' => false, 'controller' => 'accounts', 'action' => 'add'),
			'loginRedirect' => array('plugin' => false, 'controller' => 'accounts', 'action' => 'afterSocialLogin')
		)
	);
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->loginAction = array('plugin' => false, 'controller' => 'accounts', 'action' => 'login');
		$this->set('model', $this->modelClass);
	}
}
