<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Map Lugar Direccion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Map Personas'), ['controller' => 'MapPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Map Persona'), ['controller' => 'MapPersonas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mapLugarDireccions index large-9 medium-8 columns content">
    <h3><?= __('Map Lugar Direccions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idLugar_Direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nacionalidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idioma') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fk_idLugar_Direccion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mapLugarDireccions as $mapLugarDireccion): ?>
            <tr>
                <td><?= $this->Number->format($mapLugarDireccion->idLugar_Direccion) ?></td>
                <td><?= h($mapLugarDireccion->nombre) ?></td>
                <td><?= h($mapLugarDireccion->descripcion) ?></td>
                <td><?= h($mapLugarDireccion->nacionalidad) ?></td>
                <td><?= h($mapLugarDireccion->idioma) ?></td>
                <td><?= $this->Number->format($mapLugarDireccion->fk_idLugar_Direccion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mapLugarDireccion->idLugar_Direccion]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mapLugarDireccion->idLugar_Direccion]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mapLugarDireccion->idLugar_Direccion], ['confirm' => __('Are you sure you want to delete # {0}?', $mapLugarDireccion->idLugar_Direccion)]) ?>
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
