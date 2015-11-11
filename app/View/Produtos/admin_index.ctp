<h1>Produtos</h1>

<table>
	<tr>
		<th><?php echo $this->Paginator->sort('id', 'ID');?></th>
		<th><?php echo $this->Paginator->sort('nome', 'Nome');?></th>
		<th><?php echo $this->Paginator->sort('preco', 'Preço');?></th>
		<th><?php echo $this->Paginator->sort('created', 'Criado');?></th>
		<th><?php echo $this->Paginator->sort('modified', 'Modificado');?></th>
		<th>Ações</th>
	</tr>
	<?php foreach ($produtos as $produto):?>
			<tr>
				<td><?php echo $produto['Produto']['id']?></td>
				<td><?php echo $produto['Produto']['nome']?></td>
				<td><?php echo $produto['Produto']['preco']?></td>
				<td><?php echo $produto['Produto']['created']?></td>
				<td><?php echo $produto['Produto']['modified']?></td>
				<td>
					<?php echo $this->Html->link('Editar', array('controller' => 'produtos', 'action' => 'edit', $produto['Produto']['id']));?>
					<?php echo $this->Html->link('Excluir', array('controller' => 'produtos', 'action' => 'remover', $produto['Produto']['id']), null, 'Deseja remover este produto?');?>
					<?php echo $this->Html->link('Visualizar', array('controller' => 'produtos', 'action' => 'view', $produto['Produto']['id']));?>
				</td>
			</tr>
	<?php endforeach;?>
</table>

<br>
<?php echo $this->Paginator->prev('<< Anterior');?>
<?php echo $this->Paginator->numbers(array('separator' => ' - '));?>
<?php echo $this->Paginator->next('Próximo >>');?>