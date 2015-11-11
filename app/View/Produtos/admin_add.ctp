<h1>Cadastrar Produto</h1>

<?php 

	echo $this->Form->create('Produto', array('action'=>'add', 'type' => 'file')),
		 $this->Form->input('Categoria'),	// Escrever como o nome da Model
		 $this->Form->input('nome'),
		 $this->Form->input('descricao', array('label'=>'Descrição')),
		 $this->Form->input('preco', array('label' => 'Preço')),
		 $this->Form->input('Foto.arquivo.', array('type' => 'file')), // Utilizando ' . ' insere uma chave vazia podendo 
		 $this->Form->input('Foto.arquivo.', array('type' => 'file')), //enviar mais de um;
		 $this->Form->input('Foto.arquivo.', array('type' => 'file')), // Usando o Foto.arquivo faz referencia table foto
		 $this->Form->input('Foto.arquivo.', array('type' => 'file')),
 	  	 $this->Form->end('Cadastrar');		

 ?>