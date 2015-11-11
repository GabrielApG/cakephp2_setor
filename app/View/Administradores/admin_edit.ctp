<div class="administradores form">
<?php echo $this->Form->create('Administrador'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Administrador'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('login');
		echo $this->Form->input('senha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Administrador.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Administrador.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Administradores'), array('action' => 'index')); ?></li>
	</ul>
</div>
