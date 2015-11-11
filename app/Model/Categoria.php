<?php
App::uses('AppModel', 'Model');
/**
 * Categoria Model
 *
 * @property Categoria $Categoria
 * @property Categoria $Categoria
 * @property Produto $Produto
 */
class Categoria extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Produto' => array(
			'className' => 'Produto',
			'joinTable' => 'categorias_produtos',
			'foreignKey' => 'categoria_id',
			'associationForeignKey' => 'produto_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
