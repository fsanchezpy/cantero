<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Add Persona'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('cip');
		echo $this->Form->input('fechaNacimiento');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
