<?php
App::uses('AppController', 'Controller');
/**
 * Passwords Controller
 *
 * @property Password $Password
 */
class PasswordsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Password->recursive = 0;
		$this->set('passwords', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Password->id = $id;
		if (!$this->Password->exists()) {
			throw new NotFoundException(__('Invalid password'));
		}
		$this->set('password', $this->Password->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Password->create();
			if ($this->Password->save($this->request->data)) {
				$this->Session->setFlash(__('The password has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The password could not be saved. Please, try again.'));
			}
		}
		$services = $this->Password->Service->find('list');
		$this->set(compact('services'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Password->id = $id;
		if (!$this->Password->exists()) {
			throw new NotFoundException(__('Invalid password'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Password->save($this->request->data)) {
				$this->Session->setFlash(__('The password has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The password could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Password->read(null, $id);
		}
		$services = $this->Password->Service->find('list');
		$this->set(compact('services'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Password->id = $id;
		if (!$this->Password->exists()) {
			throw new NotFoundException(__('Invalid password'));
		}
		if ($this->Password->delete()) {
			$this->Session->setFlash(__('Password deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Password was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
