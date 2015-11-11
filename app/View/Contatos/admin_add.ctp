<div class="contatos form">
<?php echo $this->Form->create('Contato'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Contato'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('email');
		echo $this->Form->input('assunto');
		echo $this->Form->input('mensagem');
		echo $this->Form->input('visualizado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contatos'), array('action' => 'index')); ?></li>
	</ul>
</div>
