<!DOCTYPE html>
<html>
<head>

	<?php echo $this->Html->css('bootstrap.min') ?>
	<?php echo $this->Html->css('admin/style') ?>		
	<?php echo $this->Html->script('bootstrap.min') ?>
	
	<title>Painel Administrativo</title>
</head>

<body>
	
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>

</body>
</html>