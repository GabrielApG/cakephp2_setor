<?php

class Produto extends AppModel{

	public $hasAndBelongsToMany = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'joinTable' => 'categorias_produtos',
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'categoria_id',
			'unique' => 'keepExisting'
		)
	);

	public $hasMany = array(
		'Foto' => array(
			'className' => 'Foto',
			'foreignKey' => 'produto_id'
		)
	);

}
?>