<h1>Produtos</h1>


<table>
	<tr>
		<th>ID</th>
		<th><?php echo $produto['Produto']['id']?></th>
	</tr>
	<tr>
		<th>Nome</th>
		<th><?php echo $produto['Produto']['nome']?></th>
	</tr>
	<tr>
		<th>Descrição</th>
		<th><?php echo $produto['Produto']['descricao']?></th>
	</tr>
	<tr>
		<th>Preço</th>
		<th><?php echo $produto['Produto']['preco']?></th>
	</tr>
	<tr>
		<th>Criado</th>
		<th><?php echo $produto['Produto']['created']?></th>
	</tr>		
		<th>Modificado</th>
		<th><?php echo $produto['Produto']['modified']?></th>
	</tr>
	
</table>