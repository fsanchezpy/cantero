<div class="entidades form">
<?php echo $this->Form->create('Entidade'); ?>
	<fieldset>
		<legend><?php echo __('Add Entidade'); ?></legend>
	<?php
		echo $this->Form->input('ruc');
		echo $this->Form->input('razonSocial');
		echo $this->Form->input('fechaConstitucion');
		echo $this->Form->input('propietario');
		echo $this->Form->input('user_id');
		echo $this->Form->input('entidades_tipo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Entidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades Tipos'), array('controller' => 'entidades_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidades Tipo'), array('controller' => 'entidades_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
