<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array('Auth', 'Session');

	public function beforeFilter(){
		/*if ($this->params->prefix == 'admin') {
			$this->Auth->authenticate = array(
				'Form' => array(
					'userModel' => 'Administrador',
					'fields' => array('username' => 'login','password' => 'senha')
				)
			);

			$this->Auth->authorize = array('Controller');
			$this->Auth->autoRedirect = true;
			$this->Auth->loginAction = array('controller' => 'administradores','action' => 'login');
			$this->Auth->logoutRedirect = array('controller' => 'administradores','action' => 'login');
			$this->Auth->authError = __('Você não tem permissão para acessar esta página', true);

			//$this->layout = 'admin';
		*///} else {
			//$this->theme = 'SON';
			$this->Auth->allow();
		//}
	}	

	public function isAuthorized(){
		/*if ($this->Auth->user()) {
			$this->set('user', $this->Auth->user());
			return true;
		} else
			return false;
			*/
	}

}
