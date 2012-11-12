<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	public $name = 'Users';

	public function beforeFilter() {
        parent::beforeFilter();
		$this->Auth->fields = array('username' => 'User_Email', 'password' => 'User_Password');
        $this->Auth->allow('index','logout','signup');
    }

/**
 * isAuthorized method
 *
 * @param User $user
 * @return boolean true
 */

	public function isAuthorized($user) {

		if($this->action === 'profile'){
			return true;
		}
		
		return parent::isAuthorized($user);
	}	


/**
 * admin method
 *
 * @return void
 */
	public function admin() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * index method
 *
 * @return void
 */
	public function index(){
		$this->layout = 'frontpage';
		if ($this->Auth->user())
    	{
        	$this->redirect('profile');
    	}
		
		if ($this->request->is('post')) {
        	if ($this->Auth->login()) {
           		$this->redirect($this->Auth->redirect());
        	} else {
           		$this->Session->setFlash(__('Invalid username or password, try again'));
       		}
    	}	
	}
	
	
/**
 * profile method
 *
 * @return void
 */
 	public function profile(){
		$this->layout = "dashboard";
		$this->User->id = $this->Auth->user('User_ID');
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
		$this->set('user', $this->User->read(null, $this->Auth->user('User_ID')));
	}
 
 

/**
 * login method
 *
 * @return void
 */
 	public function login(){
		$this->layout = 'frontpage';
		if ($this->Auth->user())
    	{
        	$this->redirect('profile');
    	}
		if ($this->request->is('post')) {
        	if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
        	} else {
            	$this->Session->setFlash(__('Invalid username or password, try again'));
        	}
    	}
	}
	
	public function logout(){
		$this->redirect($this->Auth->logout());	
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved.'));
			}
		}
	}

/**
 * signup method
 *
 * @return void
 */	
	public function signup() {
		$this->layout = 'frontpage';
		if ($this->Auth->user())
    	{
        	$this->redirect('profile');
    	}
		$this->set('title_for_layout','Sign up!');
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Your account is created'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Whoops!'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

