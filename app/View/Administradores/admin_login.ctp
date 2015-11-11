<h1>Faça Login</h1>

<?php
	echo $this->Html->div('minha_classe',
			$this->Form->create('Administrador', array('action' => 'login')).
			$this->Form->input('login').
			$this->Form->input('senha', array('type' => 'password')).
			$this->Form->end('Logar'),
			array('id' => 'MEU_ID')
		 )
?>