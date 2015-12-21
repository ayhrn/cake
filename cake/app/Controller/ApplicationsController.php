<?php
App::uses('AppController', 'Controller');
/**
 * Applications Controller
 *
 * @property Application $Application
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ApplicationsController extends AppController {

        public $helpers = array('Js');
    
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
		$this->Application->recursive = 1;
		$this->set('applications', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Application->exists($id)) {
			throw new NotFoundException(__('Invalid application'));
		}
		$options = array('conditions' => array('Application.' . $this->Application->primaryKey => $id));
		$this->set('application', $this->Application->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Application->create();
                        $this->request->data['Application']['users_id'] = $this->Auth->user('id');
                        $this->request->data['Application']['date_submitted'] = date('Y-m-d H:i:s');;
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__('The application has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.'), 'flash/error');
			}
		}
                $this->loadModel('User');
		$users = $this->User->find('list');
		$categories = $this->Application->Category->find('list');
                //$subcategories = $this->Application->Subcategory->find('list');
                $subcategories = array('choisir categorie');
		$oSystems = $this->Application->OSystem->find('list');
		$this->set(compact('users', 'categories', 'oSystems', 'subcategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Application->id = $id;
		if (!$this->Application->exists($id)) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__('The application has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Application.' . $this->Application->primaryKey => $id));
			$this->request->data = $this->Application->find('first', $options);
		}
                $this->loadModel('User');
		$users = $this->User->find('list');
		$categories = $this->Application->Category->find('list');
                $category_id = $this->request->data['Application']['category_id'];
                $subcategories = $this->Application->Subcategory->find('list', array(
                    'conditions' => array('Subcategory.category_id' => $category_id),
                    'recursive' => -1
                    ));
		$oSystems = $this->Application->OSystem->find('list');
		$this->set(compact('users', 'categories', 'oSystems','subcategories'));
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
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->Application->delete()) {
			$this->Session->setFlash(__('Application deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Application was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
        
        public function isAuthorized($user) {
            // All registered users can add posts
            if ($this->action === 'add') {
                return true;
            }

            // The owner of a post can edit and delete it
            if (in_array($this->action, array('edit', 'delete'))) {
                $postId = (int) $this->request->params['pass'][0];
                if ($this->Application->isOwnedBy($postId, $user['id'])) {
                    return true;
                }
            }

            return parent::isAuthorized($user);
        }        
}
