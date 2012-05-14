<?php
App::uses('AppController', 'Controller');
/**
 * PasswordTypes Controller
 *
 * @property PasswordType $PasswordType
 */
class PasswordTypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PasswordType->recursive = 0;
		$this->set('passwordTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PasswordType->id = $id;
		if (!$this->PasswordType->exists()) {
			throw new NotFoundException(__('Invalid password type'));
		}
		$this->set('passwordType', $this->PasswordType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PasswordType->create();
			if ($this->PasswordType->save($this->request->data)) {
				$this->Session->setFlash(__('The password type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The password type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PasswordType->id = $id;
		if (!$this->PasswordType->exists()) {
			throw new NotFoundException(__('Invalid password type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PasswordType->save($this->request->data)) {
				$this->Session->setFlash(__('The password type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The password type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PasswordType->read(null, $id);
		}
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
		$this->PasswordType->id = $id;
		if (!$this->PasswordType->exists()) {
			throw new NotFoundException(__('Invalid password type'));
		}
		if ($this->PasswordType->delete()) {
			$this->Session->setFlash(__('Password type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Password type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
