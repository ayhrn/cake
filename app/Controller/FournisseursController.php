<?php
App::uses('AppController', 'Controller');
/**
 * Fournisseurs Controller
 *
 * @property Fournisseur $Fournisseur
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class FournisseursController extends AppController {

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
		$this->Fournisseur->recursive = 0;
		$this->set('fournisseurs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fournisseur->exists($id)) {
			throw new NotFoundException(__('Invalid fournisseur'));
		}
		$options = array('conditions' => array('Fournisseur.' . $this->Fournisseur->primaryKey => $id));
		$this->set('fournisseur', $this->Fournisseur->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fournisseur->create();
			if ($this->Fournisseur->save($this->request->data)) {
				$this->Session->setFlash(__('The fournisseur has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fournisseur could not be saved. Please, try again.'), 'flash/error');
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
        $this->Fournisseur->id = $id;
		if (!$this->Fournisseur->exists($id)) {
			throw new NotFoundException(__('Invalid fournisseur'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Fournisseur->save($this->request->data)) {
				$this->Session->setFlash(__('The fournisseur has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fournisseur could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Fournisseur.' . $this->Fournisseur->primaryKey => $id));
			$this->request->data = $this->Fournisseur->find('first', $options);
		}
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
		$this->Fournisseur->id = $id;
		if (!$this->Fournisseur->exists()) {
			throw new NotFoundException(__('Invalid fournisseur'));
		}
		if ($this->Fournisseur->delete()) {
			$this->Session->setFlash(__('Fournisseur deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fournisseur was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
