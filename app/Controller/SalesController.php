<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 * @property User $User
 */
class SalesController extends AppController {

/**
 * Module name
 * @var string
 */
    public $name = 'Sales';

/**
 * Use Model
 * @var array
 */
    public $uses = array('Sale');

/**
 * beforeFilter method
 * @return void
 */
    public function beforeFilter() {
        /** ログインしていない時に許可するアクション */
        $this->Auth->autoRedirect = false;
        $this->Auth->allow('login', 'add');
        //$this->layout = 'login';
        $this->layout = 'default';
        parent::beforeFilter();
    }

/**
 * login method
 * @return void
 */
    public function login() {
        /** POST 送信時にログイン認証処理を行う */
        if ($this->request->is('post')) {
            /** ログイン認証処理 */
            if ($this->Auth->login()) {
                /** 取得順序を設定 */
                $options = array(
                    'conditions' => "Sale.name = '".$this->request->data['Sale']['name']."'",
                    'fields' => 'User.twitter_consumer_key, User.twitter_consumer_secret, User.facebook_appid, User.facebook_appsecret'
                );
                $input_user = $this->Sale->find('first', $options);
            } else {
                /** 認証エラーメッセージ出力 */
                $this->Session->setFlash(__('ログインに失敗しました。'));
            }
        }else{
            /** ログイン認証済の場合、顧客画面へ遷移 */
            if ($this->Auth->login()) {
                $this->redirectlogin();
            }
        }
    }

/**
 * redirectlogin method
 * @return boolean
 */
    public function redirectlogin($type = null) {
        try {
            /** 二度呼ぶと値が書き変わる為、変数に格納する */
            $redirectUrl = $this->Auth->redirect();
            $this->redirect($redirectUrl);
        } catch (Exception $e) {
            /** エラー（ログアウト） */
            $this->Auth->logout();
            /** 認証エラーメッセージ出力 */
            $this->Session->setFlash(__('ログインに失敗しました。'));
        }
    }

/**
 * logout method
 * @return void
 */
    public function logout() {
        $this->Session->destroy();
        $this->redirect($this->Auth->logout());
    }

/**
 * index method
 * @return void
 */
    public function index() {
        $this->Sale->recursive = 0;
        $this->set('sales', $this->paginate());
    }
    
/**
 * add method
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->Sale->create();
            if ($this->Sale->save($this->request->data)) {
                $this->Session->setFlash(__('The sales has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The sales could not be saved. Please, try again.'));
            }
        }
    }

/**
 * edit method
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
        $this->Sale->id = $id;
        if (!$this->Sale->exists()) {
            throw new NotFoundException(__('Invalid sales'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Sale->save($this->request->data)) {
                $this->Session->setFlash(__('The sales has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The sales could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Sale->read(null, $id);
        }
    }

/**
 * delete method
 * @param string $id
 * @return void
 */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Sale->id = $id;
        if (!$this->Sale->exists()) {
            throw new NotFoundException(__('Invalid sales'));
        }
        if ($this->Sale->delete()) {
            $this->Session->setFlash(__('Sale deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Sale was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}

