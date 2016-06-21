<?php
App::uses('AppController', 'Controller');
/**
 * EntidadesTipos Controller
 *
 * @property EntidadesTipo $EntidadesTipo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class EntidadesTiposController extends AppController {

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
		$this->EntidadesTipo->recursive = 0;
		$this->set('entidadesTipos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EntidadesTipo->exists($id)) {
			throw new NotFoundException(__('Invalid entidades tipo'));
		}
		$options = array('conditions' => array('EntidadesTipo.' . $this->EntidadesTipo->primaryKey => $id));
		$this->set('entidadesTipo', $this->EntidadesTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EntidadesTipo->create();
			if ($this->EntidadesTipo->save($this->request->data)) {
				$this->Flash->success(__('The entidades tipo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The entidades tipo could not be saved. Please, try again.'));
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
		if (!$this->EntidadesTipo->exists($id)) {
			throw new NotFoundException(__('Invalid entidades tipo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EntidadesTipo->save($this->request->data)) {
				$this->Flash->success(__('The entidades tipo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The entidades tipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EntidadesTipo.' . $this->EntidadesTipo->primaryKey => $id));
			$this->request->data = $this->EntidadesTipo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EntidadesTipo->id = $id;
		if (!$this->EntidadesTipo->exists()) {
			throw new NotFoundException(__('Invalid entidades tipo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EntidadesTipo->delete()) {
			$this->Flash->success(__('The entidades tipo has been deleted.'));
		} else {
			$this->Flash->error(__('The entidades tipo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
