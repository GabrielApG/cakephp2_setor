<h1>Banners</h1>

<table>
	<tr>
		<th><?php echo $this->Paginator->sort('id', 'ID');?></th>
		<th><?php echo $this->Paginator->sort('setor_id', 'Setor');?></th>
		<th><?php echo $this->Paginator->sort('nome', 'Nome');?></th>
		<th><?php echo $this->Paginator->sort('created', 'Criado');?></th>
		<th><?php echo $this->Paginator->sort('modified', 'Modificado');?></th>
		<th>Ações</th>
	</tr>
	<?php foreach ($banners as $banner):?>
			<tr>
				<td><?php echo $banner['Banner']['id']?></td>
				<td><?php echo $banner['Setor']['setor']?></td>
				<td><?php echo $banner['Banner']['nome']?></td>
				<td><?php echo $banner['Banner']['created']?></td>
				<td><?php echo $banner['Banner']['modified']?></td>
				<td>
					<?php echo $this->Html->link('Editar', array('controller' => 'banners', 'action' => 'edit', $banner['Banner']['id']));?>
					<?php echo $this->Html->link('Excluir', array('controller' => 'banners', 'action' => 'remover', $banner['Banner']['id']), null, 'Deseja remover este banner?');?>
					<?php echo $this->Html->link('Visualizar', array('controller' => 'banners', 'action' => 'view', $banner['Banner']['id']));?>
				</td>
			</tr>
	<?php endforeach;?>
</table>

<br>
<?php echo $this->Paginator->prev('<< Anterior');?>
<?php echo $this->Paginator->numbers(array('separator' => ' - '));?>
<?php echo $this->Paginator->next('Próximo >>');?>