<?php
App::uses('AppController', 'Controller');

/**
 * Facebook Controller
 */
class FacebookController extends AppController {
	
	public $components = array(
		'SocialFacebook.Facebook'
	);
	
	public function index() {
		$this->set('profile', $this->Facebook->api('/me'));
	}
	
	public function friends() {
		$this->set('friends', $this->Facebook->api('/me/friends'));
	}
}
