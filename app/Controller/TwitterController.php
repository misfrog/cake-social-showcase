<?php
App::uses('AppController', 'Controller');

/**
 * Twitter Controller
 */
class TwitterController extends AppController {
	
	public $components = array(
		'Session',
		'SocialTwitter.Twitter'
		);
	
	public function index() {
		$userId = $this->Session->read('Auth.Twitter.provider_user_id');
		$this->set('profile', $this->Twitter->api('GET', '1.1/users/show', array(
			'user_id' => $userId
			)));
	}
	
	public function timeline() {
		$this->set('timeline', $this->Twitter->api('GET', '1.1/statuses/home_timeline', array(
			'count' => 8
			)));
	}
}
