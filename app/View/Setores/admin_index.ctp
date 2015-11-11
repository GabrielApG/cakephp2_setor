<h1>  Setores </h1>

<table>
	<tr>
		<th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
		<th><?php echo $this->Paginator->sort('setor', 'Setor'); ?></th>
		<th><?php echo $this->Paginator->sort('created', 'Criação'); ?></th>
		<th>Atualizado</th>
		<th>Ações</th>
		<?php foreach ($setores as $setor): ?>
		<tr>
				<th><?php echo $setor['Setor']['id']; ?></th>
				<th><?php echo $setor['Setor']['setor']; ?></th>
				<th><?php echo $setor['Setor']['created']; ?></th>
				<th><?php echo $setor['Setor']['modified']; ?></th>
				<th>
				<!-- Se tivesse fora do controller usar 
 				echo $this->Hml->link('Editar', array('controller' => 'setores','action' => 'edit, $setor['Setor']['id']'));-->
					<?php echo $this->Html->link('Editar', array('action' => 'edit', $setor['Setor']['id']));?>
					<?php echo $this->Html->link('Deletar', array('action' => 'remover', $setor['Setor']['id']), null, 'Deseja remover este setor?');?>
					<?php echo $this->Html->link('Visualizar', array('action' => 'view', $setor['Setor']['id']));?>
				</th>
		</tr>
		<?php endforeach ?>
	</tr>
</table>

<br>

<?php echo $this->Paginator->prev('< Anterior '); ?>
<?php echo $this->Paginator->numbers(array('separator' =>' - ')); ?>
<?php echo $this->Paginator->next(' Próximo >'); ?>