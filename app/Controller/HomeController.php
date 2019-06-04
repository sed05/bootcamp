<?php
App::uses('AppController', 'Controller');

class HomeController extends AppController {

	public function index() {
		if($this->Session->read('User.logged_in')){
		    return $this->redirect('/dashboard');
		}

		if($this->request->is(['POST','PUT'])){
			$this->loadModel('User');

			$login = $this->doLogin($this->request->data);

			if($login){
				$this->redirect('/dashboard');
			} else {
				$this->Session->setFlash(
				    'Invalid username or password.',
				    'alert-box',
				    array('class' => 'alert-danger')
				);
			}
		}
	}

	public function dashboard() {
		if(!$this->Session->read('User.logged_in')){
		    return $this->redirect('/');
		}
	}

	public function logout() {
		if(!$this->Session->read('User.logged_in')){
		    return $this->redirect('/');
		}

		$this->Session->delete('User');
		return $this->redirect('/');
	}

	private function doLogin($data){
		$User = $this->User->findByUsername($data['User']['username']);
		if(!$User){
			return false;
		}

		$Password = $User['User']['password'];
		$passwordhash = Security::hash($this->request->data['User']['password'], 'blowfish', $Password);

		if($passwordhash === $Password){
			$this->Session->write('User', [
				'logged_in' => 1,
				'username' => $User['User']['username'],
				'firstname' => $User['User']['firstname'],
				'lastname' => $User['User']['lastname']
			]);

			return true;
		} else {
			return false;
		}
	}
}