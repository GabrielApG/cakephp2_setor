<?php
App::uses('AppModel', 'Model');
/**
 * Administrador Model
 *
 */
class Administrador extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Preencha este Campo!',
				'required' => true,
			
			),
			'minlength' => array(
				'rule' => array('minlength', '3'),
				'message' => 'Preencha este Campo!',
				'required' => true,
				),
		),
		'login' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Preencha este Campo!',
				'required' => true,
			),
			'email' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este não é um email válido',
				'required' => true,
				),
		),
		'senha' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Preencha este Campo!',
				'required' => true,
			),
		),
	);

	// Para Criptografar a senha
	public function beforeSave($options = array()){
		if ($this->data['Administrador']['senha']) {
			App::uses('Security', 'Utility');
			$this->data['Administrador']['senha'] = Security::hash($this->data['Administrador']['senha'], null, true);
		}
	}
	
}
