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
	
	public function afterSocialLogin() {
		$this->Session->setFlash(sprintf(__d('users', '%s you have successfully logged in'), $this->Auth->user('username')));
		$this->redirect($this->Auth->redirectUrl());
	}
}
