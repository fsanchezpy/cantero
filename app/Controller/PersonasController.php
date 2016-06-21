<?php

App::uses('AppController', 'Controller');

/**
 * Personas Controller
 *
 * @property Persona $Persona
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class PersonasController extends AppController {

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
        $this->Persona->recursive = 0;
        $this->set('personas', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Persona->exists($id)) {
            throw new NotFoundException(__('Invalid persona'));
        }
        $options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
        $this->set('persona', $this->Persona->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->layout = 'ajax';
        if ($this->request->is('post')) {
            $this->Persona->create();
            $this->request->data['Persona']['fechaNacimiento'] = DateTime::createFromFormat('d/m/Y', $this->request->data['Persona']['fechaNacimiento2'])->format('Y-m-d');
            if ($this->Persona->save($this->request->data)) {
                $this->Flash->success(__('The persona has been saved.'));
                // return $this->redirect(array('action' => 'index'));
                echo json_encode(array('status' => 'ok', 'msg' => 'Datos registrados con éxito.', 'url' => $this->name . '/' . 'index'));
            } else {
                //$this->Flash->error(__('The persona could not be saved. Please, try again.'));
                echo json_encode(array('msg' => 'No se pudo guardar los datos de la persona.'));
            }
            return $this->response;
        }
        $users = $this->Persona->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Persona->exists($id)) {
            throw new NotFoundException(__('Invalid persona'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Persona->save($this->request->data)) {
                $this->Flash->success(__('The persona has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The persona could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
            $this->request->data = $this->Persona->find('first', $options);
        }
        $users = $this->Persona->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Persona->id = $id;
        if (!$this->Persona->exists()) {
            throw new NotFoundException(__('Invalid persona'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Persona->delete()) {
            $this->Flash->success(__('The persona has been deleted.'));
        } else {
            $this->Flash->error(__('The persona could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
