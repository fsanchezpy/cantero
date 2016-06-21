<?php
App::uses('AppController', 'Controller');
/**
 * Entidades Controller
 *
 * @property Entidade $Entidade
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class EntidadesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Entidade->recursive = 0;
		$this->set('entidades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Entidade->exists($id)) {
			throw new NotFoundException(__('Invalid entidade'));
		}
		$options = array('conditions' => array('Entidade.' . $this->Entidade->primaryKey => $id));
		$this->set('entidade', $this->Entidade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Entidade->create();
			if ($this->Entidade->save($this->request->data)) {
				$this->Flash->success(__('The entidade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The entidade could not be saved. Please, try again.'));
			}
		}
		$users = $this->Entidade->User->find('list');
		$entidadesTipos = $this->Entidade->EntidadesTipo->find('list');
		$this->set(compact('users', 'entidadesTipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Entidade->exists($id)) {
			throw new NotFoundException(__('Invalid entidade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Entidade->save($this->request->data)) {
				$this->Flash->success(__('The entidade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The entidade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Entidade.' . $this->Entidade->primaryKey => $id));
			$this->request->data = $this->Entidade->find('first', $options);
		}
		$users = $this->Entidade->User->find('list');
		$entidadesTipos = $this->Entidade->EntidadesTipo->find('list');
		$this->set(compact('users', 'entidadesTipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Entidade->id = $id;
		if (!$this->Entidade->exists()) {
			throw new NotFoundException(__('Invalid entidade'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Entidade->delete()) {
			$this->Flash->success(__('The entidade has been deleted.'));
		} else {
			$this->Flash->error(__('The entidade could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
