<div class="contatos index">
	<h2><?php echo __('Contatos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('assunto'); ?></th>
			<th><?php echo $this->Paginator->sort('mensagem'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('visualizado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($contatos as $contato): ?>
	<tr>
		<td><?php echo h($contato['Contato']['id']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['nome']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['email']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['assunto']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['mensagem']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['created']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['modified']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['visualizado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contato['Contato']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contato['Contato']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contato['Contato']['id']), array(), __('Are you sure you want to delete # %s?', $contato['Contato']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Contato'), array('action' => 'add')); ?></li>
	</ul>
</div>
