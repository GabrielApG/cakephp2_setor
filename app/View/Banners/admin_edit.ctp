<h1>Editar Banner</h1>

<?php
	echo $this->Form->create('Banner', array('action' => 'edit','type' => 'file')),
		 $this->Form->input('id'),
		 $this->Form->input('setor_id', array('empty' => 'Selecione um setor')),
		 $this->Form->input('nome'),
		 $this->Html->image('banners/' . $this->data['Banner']['arquivo']),
		 $this->Form->input('arquivo', array('type' => 'file')),
		 $this->Form->end('Editar');
?>