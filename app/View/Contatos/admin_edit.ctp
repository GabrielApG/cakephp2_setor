<div class="contatos form">
<?php echo $this->Form->create('Contato'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Contato'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Contato.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Contato.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contatos'), array('action' => 'index')); ?></li>
	</ul>
</div>
