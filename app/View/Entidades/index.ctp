<div class="entidades index">
	<h2><?php echo __('Entidades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ruc'); ?></th>
			<th><?php echo $this->Paginator->sort('razonSocial'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaConstitucion'); ?></th>
			<th><?php echo $this->Paginator->sort('propietario'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('entidades_tipo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($entidades as $entidade): ?>
	<tr>
		<td><?php echo h($entidade['Entidade']['id']); ?>&nbsp;</td>
		<td><?php echo h($entidade['Entidade']['ruc']); ?>&nbsp;</td>
		<td><?php echo h($entidade['Entidade']['razonSocial']); ?>&nbsp;</td>
		<td><?php echo h($entidade['Entidade']['fechaConstitucion']); ?>&nbsp;</td>
		<td><?php echo h($entidade['Entidade']['propietario']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($entidade['User']['id'], array('controller' => 'users', 'action' => 'view', $entidade['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($entidade['EntidadesTipo']['id'], array('controller' => 'entidades_tipos', 'action' => 'view', $entidade['EntidadesTipo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $entidade['Entidade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $entidade['Entidade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entidade['Entidade']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $entidade['Entidade']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Entidade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades Tipos'), array('controller' => 'entidades_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidades Tipo'), array('controller' => 'entidades_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
