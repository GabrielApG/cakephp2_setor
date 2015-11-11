<h1>Cadastrar Setor</h1>

<?php 

	echo $this->Form->create('Setor', array('action'=>'add')),
		 $this->Form->input('setor'),
		 $this->Form->end('Cadastrar')	

 ?>