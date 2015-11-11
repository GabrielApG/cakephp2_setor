<h1>Cadastrar Banner</h1>

<?php 

	echo $this->Form->create('Banner', array('action' => 'add', 'type' => 'file')), //Necessário colocar p/ fazer upload de 																												arquivos
		 $this->Form->input('setor_id', array('empty' => 'Selecione um Setor')),
		 $this->Form->input('nome'),
		 $this->Form->input('arquivo', array('type' => 'file')), //se colocar array depois do array pode passar todo tipo de configurações array, classe
		 $this->Form->end('Cadastrar');	

 ?>