<?php
App::uses('UsersController', 'Users.Controller');

/**
 * Account Controller
 *
 * @property Account $Account
 * @property UserConnection $UserConnection
 */
class AccountsController extends UsersController {
	
	public $name = 'Accounts';
	
	// TODO
	public $components = array(
		'Auth' => array(
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
		'Cookie',
		'Paginator',
		'Security',
		'Search.Prg',
		'Users.RememberMe',
		'Social.Connection',
	);
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('login', 'add');
		$this->Auth->logoutRedirect = array('plugin' => false, 'controller' => 'accounts', 'action' => 'login');
	}
	
	public function add() {
		if ($this->request->is('get')) {
			$connection = $this->Session->read('Connection.data');
			if (!empty($connection)) {
				$this->request->data = array('Account' => array(
					'username' => $connection['display_name']
					));
				$this->Session->setFlash('Your ' . $connection['provider_id'] . ' account is not associated with a Cake Social Showcase account. If you\'re new, please sign up.',
					'default', array('class' => 'alert alert-info'));					
			}
		} else {
	 		$this->getEventManager()->attach(array($this, 'afterRegistration'), 'Users.Controller.Users.afterRegistration');
			parent::add();
		}
	}
	
	public function login() {
		$this->getEventManager()->attach(array($this, 'afterLogin'), 'Users.Controller.Users.afterLogin');
		parent::login();
	}

	public function afterRegistration($data) {
		$userId = $this->{$this->modelClass}->id;
		$this->Connection->handlePostSignUp($userId);
	}
	
	public function afterLogin($data, $isFirstLogin) {
		$this->Connection->handlePostSignIn();
	}
	
	public function loginWithoutForm($user) {
		$this->Auth->login($user);
	}
}
