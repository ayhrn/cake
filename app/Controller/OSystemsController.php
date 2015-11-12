<?php
App::uses('AppController', 'Controller');
/**
 * OSystems Controller
 *
 * @property OSystem $OSystem
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class OSystemsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OSystem->recursive = 0;
		$this->set('oSystems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OSystem->exists($id)) {
			throw new NotFoundException(__('Invalid o system'));
		}
		$options = array('conditions' => array('OSystem.' . $this->OSystem->primaryKey => $id));
		$this->set('oSystem', $this->OSystem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OSystem->create();
			if ($this->OSystem->save($this->request->data)) {
				$this->Session->setFlash(__('The o system has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The o system could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$fournisseurs = $this->OSystem->Fournisseur->find('list');
		$applications = $this->OSystem->Application->find('list');
		$this->set(compact('fournisseurs', 'applications'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->OSystem->id = $id;
		if (!$this->OSystem->exists($id)) {
			throw new NotFoundException(__('Invalid o system'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OSystem->save($this->request->data)) {
				$this->Session->setFlash(__('The o system has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The o system could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('OSystem.' . $this->OSystem->primaryKey => $id));
			$this->request->data = $this->OSystem->find('first', $options);
		}
		$fournisseurs = $this->OSystem->Fournisseur->find('list');
		$applications = $this->OSystem->Application->find('list');
		$this->set(compact('fournisseurs', 'applications'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->OSystem->id = $id;
		if (!$this->OSystem->exists()) {
			throw new NotFoundException(__('Invalid o system'));
		}
		if ($this->OSystem->delete()) {
			$this->Session->setFlash(__('O system deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O system was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}    
        
}
