<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Map Persona'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Map Lugar Direccions'), ['controller' => 'MapLugarDireccions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Map Lugar Direccion'), ['controller' => 'MapLugarDireccions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mapPersonas index large-9 medium-10 columns content">
    <h3><?= __('Map Personas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idPersona') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fnac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('biografia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_muerte') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_artistico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_inicio_carrera') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fk_idLugar_Direccion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mapPersonas as $mapPersona): ?>
            <tr>
                <td><?= $this->Number->format($mapPersona->idPersona) ?></td>
                <td><?= h($mapPersona->nombre1) ?></td>
                <td><?= h($mapPersona->nombre2) ?></td>
                <td><?= h($mapPersona->apellido1) ?></td>
                <td><?= h($mapPersona->apellido2) ?></td>
                <td><?= h($mapPersona->fnac) ?></td>
                <td><?= h($mapPersona->biografia) ?></td>
                <td><?= h($mapPersona->fecha_muerte) ?></td>
                <td><?= h($mapPersona->nombre_artistico) ?></td>
                <td><?= h($mapPersona->fecha_inicio_carrera) ?></td>
                <td><?= $mapPersona->has('map_lugar_direccion') ? $this->Html->link($mapPersona->map_lugar_direccion->nombre, ['controller' => 'MapLugarDireccions', 'action' => 'view', $mapPersona->map_lugar_direccion->idLugar_Direccion]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mapPersona->idPersona]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mapPersona->idPersona]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mapPersona->idPersona], ['confirm' => __('Are you sure you want to delete # {0}?', $mapPersona->idPersona)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
