<h1>Banner</h1>

<table>
	<tr>
		<td>ID</td>
		<td><?php echo $banner['Banner']['id']?></td>
	</tr>
	<tr>
		<td>Setor</td>
		<td><?php echo $banner['Setor']['setor']?></td>
	</tr>
	<tr>
		<td>Nome</td>
		<td><?php echo $banner['Banner']['nome']?></td>
	</tr>
	<tr>
		<td>Banner</td>
		<td><?php echo $this->Html->image('banners/' . $banner['Banner']['arquivo']);?></td>
	</tr>
	<tr>
		<td>Criado</td>
		<td><?php echo $banner['Banner']['created']?></td>
	</tr>
	<tr>
		<td>Modificado</td>
		<td><?php echo $banner['Banner']['modified']?></td>
	</tr>
</table>