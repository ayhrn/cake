<?php
// app/Controller/UsersController.php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
    
    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('logout');
        $this->Auth->allow('signup');
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->findById($id));
    }
    public function signup() {
        if ($this->request->is('post')) {
            //$this->User->create();
            $this->request->data['User']['role'] = "user";
            if ($this->User->save($this->request->data)) {
                $d = $this->request->data;
                $link = array('controller' => 'users', 'action' => 'activate', 
                    $this->User->id . '-' . md5($d['User']['password']));
                App::uses('CakeEmail','Network/Email');
                $email = new CakeEmail('gmail');
                $email->from('vladkimkim@gmail.com')
                        ->to($d['User']['email'])
                        ->subject('Confirmer Inscription')
                        ->emailFormat('html')
                        ->template('signup')
                        ->viewVars(array('username'=>$d['User']['username'], 
                            'link'=>$link))
                        ->send();
                //$this->Flash->success(__('The user has been saved'));
                $this->Session->setFlash(__('The user has been saved'), 'flash/success');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        }
    }
    
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Flash->success(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }
    
    function activate($token) {
        $token = explode('-',$token);
        $user = $this->User->find('first', array(
            'conditions' => array('id' => $token[0],'MD5(User.password)' => $token[1],
            'active' => 0)
            ));
            if(!empty($user)){
                $this->User->id = $user['User']['id'];
                $this->User->saveField('active',1);
                $this->Session->setFlash("Votre compte est activé", "flash/success");
                $this->Auth->login($user['User']);
            } else {
                $this->Session->setFlash("Lien d'activation invalide", "flash/error");
            }
            $this->redirect('/');
        die();
    }

}