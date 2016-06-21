<div class="users view">
    <h2><?php echo __('User'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($user['User']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Username'); ?></dt>
        <dd>
            <?php echo h($user['User']['username']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Password'); ?></dt>
        <dd>
            <?php echo h($user['User']['password']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Role'); ?></dt>
        <dd>
            <?php echo h($user['User']['role']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($user['User']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($user['User']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Persona'); ?></dt>
        <dd>
            <?php echo $this->Html->link($user['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $user['Persona']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Img'); ?></dt>
        <dd>
            <?php echo h($user['User']['img']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
    </ul>
</div>
 

<div class="related">
    <h3><?php echo __('Related Entidades'); ?></h3>
    <?php if (!empty($user['Entidade'])): ?>
        <?php print_r($user['Entidade']); ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Ruc'); ?></th>
                <th><?php echo __('RazonSocial'); ?></th>
                <th><?php echo __('FechaConstitucion'); ?></th>
                <th><?php echo __('Propietario'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th><?php echo __('Entidades Tipo Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($user['Entidade'] as $entidade): ?>
                <tr>
                    <td><?php echo $entidade['id']; ?></td>
                    <td><?php echo $entidade['ruc']; ?></td>
                    <td><?php echo $entidade['razonSocial']; ?></td>
                    <td><?php echo $entidade['fechaConstitucion']; ?></td>
                    <td><?php echo $entidade['propietario']; ?></td>
                    <td><?php echo $entidade['user_id']; ?></td>
                    <td><?php echo $entidade['entidades_tipo_id']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'entidades', 'action' => 'view', $entidade['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'entidades', 'action' => 'edit', $entidade['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'entidades', 'action' => 'delete', $entidade['id']), array('confirm' => __('Are you sure you want to delete # %s?', $entidade['id']))); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<?php print_r($user['Persona']);
foreach ($user['Persona'] as $persona):
    print_r($persona);   
endforeach;
?>

<div class="related">
    <h3><?php echo __('Related Personas'); ?></h3>
    <?php if (!empty($user['Persona'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Nombre'); ?></th>
                <th><?php echo __('Apellido'); ?></th>
                <th><?php echo __('Cip'); ?></th>
                <th><?php echo __('FechaNacimiento'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Updated'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php // foreach ($user['Persona'] as $persona): 
            $persona = $user['Persona'];
            ?>
                <tr>
                    <td><?php echo $persona['id']; ?></td>
                    <td><?php echo $persona['nombre']; ?></td>
                    <td><?php echo $persona['apellido']; ?></td>
                    <td><?php echo $persona['cip']; ?></td>
                    <td><?php echo $persona['fechaNacimiento']; ?></td>
                    <td><?php echo $persona['created']; ?></td>
                    <td><?php echo $persona['updated']; ?></td>
                    <td><?php echo $persona['user_id']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'personas', 'action' => 'view', $persona['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'personas', 'action' => 'edit', $persona['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personas', 'action' => 'delete', $persona['id']), array('confirm' => __('Are you sure you want to delete # %s?', $persona['id']))); ?>
                    </td>
                </tr>
            <?php //endforeach; 
            ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
