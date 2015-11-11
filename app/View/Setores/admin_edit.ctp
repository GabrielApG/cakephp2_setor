<h1>Edit Setor</h1>

<?php 

	echo $this->Form->create('Setor', array('action'=>'edit')),
		 //Se quiser esconder um campo que não seja chave primaria ex:
		 //$this->Form->hidden('id'),

		$this->Form->input('id'),
		 $this->Form->input('setor'),
		 $this->Form->end('Editar')	

 ?>

 