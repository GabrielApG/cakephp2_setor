<h1>Editar Produto</h1>

<?php 

	echo $this->Form->create('Produto', array('action'=>'add')),
	 	 $this->Form->input('id'),
		 $this->Form->input('Categoria'),	// Escrever como o nome da Model
		 $this->Form->input('nome'),
		 $this->Form->input('descricao', array('label'=>'Descrição')),
		 $this->Form->input('preco', array('label' => 'Preço')),
 	  	 $this->Form->end('Editar');		

 ?>