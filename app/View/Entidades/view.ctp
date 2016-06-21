<div class="entidades view">
<h2><?php echo __('Entidade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entidade['Entidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ruc'); ?></dt>
		<dd>
			<?php echo h($entidade['Entidade']['ruc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RazonSocial'); ?></dt>
		<dd>
			<?php echo h($entidade['Entidade']['razonSocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaConstitucion'); ?></dt>
		<dd>
			<?php echo h($entidade['Entidade']['fechaConstitucion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propietario'); ?></dt>
		<dd>
			<?php echo h($entidade['Entidade']['propietario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entidade['User']['id'], array('controller' => 'users', 'action' => 'view', $entidade['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidades Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entidade['EntidadesTipo']['id'], array('controller' => 'entidades_tipos', 'action' => 'view', $entidade['EntidadesTipo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entidade'), array('action' => 'edit', $entidade['Entidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entidade'), array('action' => 'delete', $entidade['Entidade']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $entidade['Entidade']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades Tipos'), array('controller' => 'entidades_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidades Tipo'), array('controller' => 'entidades_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
