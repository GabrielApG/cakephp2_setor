<?php
App::uses('AppController', 'Controller');
/**
 * Administradores Controller
 *
 * @property Administrador $Administrador
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AdministradoresController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Administrador->recursive = 0;
		$this->set('administradores', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Administrador->exists($id)) {
			throw new NotFoundException(__('Invalid administrador'));
		}
		$options = array('conditions' => array('Administrador.' . $this->Administrador->primaryKey => $id));
		$this->set('administrador', $this->Administrador->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Administrador->create();
			if ($this->Administrador->save($this->request->data)) {
				$this->Session->setFlash(__('The administrador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The administrador could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Administrador->exists($id)) {
			throw new NotFoundException(__('Invalid administrador'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Administrador->save($this->request->data)) {
				$this->Session->setFlash(__('The administrador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The administrador could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Administrador.' . $this->Administrador->primaryKey => $id));
			$this->request->data = $this->Administrador->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Administrador->id = $id;
		if (!$this->Administrador->exists()) {
			throw new NotFoundException(__('Invalid administrador'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Administrador->delete()) {
			$this->Session->setFlash(__('The administrador has been deleted.'));
		} else {
			$this->Session->setFlash(__('The administrador could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function admin_login(){
		if ($this->request->is('post')) {
			if ($this->Auth->login())
				$this->redirect(array('controller' => 'categorias','action' => 'index'));
			else {
				$this->Session->setFlash('Usuário ou senha inválidos!');
				$this->request->data['Administrador']['senha'] = '';
			}
		}

		$this->layout = 'login';
	}

	public function admin_logout()
	{
		$this->redirect($this->Auth->logout()); 
	}
}
