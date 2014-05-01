<?php
App::uses('AppController', 'Controller');

/**
 * Connections Controller
 *
 * @property UserConnection $UserConnection
 */
class ConnectionsController extends AppController {
	
	public $uses = array();
	
// 	public $components = array(
// 		'Social.Connection'
// 		);
	
	/**
	 * Render the status of connections across all providers to the user as HTML in their web browser.
	 */
	public function index() {
	}
	
	public function twitter() {
		if ($this->request->is('post')) {
			$this->Connection->connect('Twitter');
		}
		$this->render($this->Connection->isConnected('Twitter') ? 'twitter_connected' : 'twitter_connect');
	}
	
	public function delete_twitter() {
		if ($this->request->is(array('post', 'delete'))) {
			$this->Connection->delete('Twitter');
		}
		$this->redirect($this->referer());
	}
	
	public function facebook() {
		if ($this->request->is('post')) {
			$this->Connection->connect('Facebook');
		}
		$this->render($this->Connection->isConnected('Facebook') ? 'facebook_connected' : 'facebook_connect');
	}
	
	public function delete_facebook() {
		if ($this->request->is(array('post', 'delete'))) {
			$this->Connection->delete('Facebook');
		}
		$this->redirect($this->referer());
	}
}
