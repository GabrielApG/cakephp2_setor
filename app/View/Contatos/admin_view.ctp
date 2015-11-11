<div class="contatos view">
<h2><?php echo __('Contato'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assunto'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['assunto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensagem'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['mensagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visualizado'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['visualizado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contato'), array('action' => 'edit', $contato['Contato']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contato'), array('action' => 'delete', $contato['Contato']['id']), array(), __('Are you sure you want to delete # %s?', $contato['Contato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contatos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contato'), array('action' => 'add')); ?> </li>
	</ul>
</div>
