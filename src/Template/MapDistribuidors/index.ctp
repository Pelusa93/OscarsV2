<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Map Distribuidor'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mapDistribuidors index large-9 medium-8 columns content">
    <h3><?= __('Map Distribuidors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idDistribuidor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fk_idLugar_Direccion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mapDistribuidors as $mapDistribuidor): ?>
            <tr>
                <td><?= $this->Number->format($mapDistribuidor->idDistribuidor) ?></td>
                <td><?= h($mapDistribuidor->nombre) ?></td>
                <td><?= $this->Number->format($mapDistribuidor->fk_idLugar_Direccion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mapDistribuidor->idDistribuidor]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mapDistribuidor->idDistribuidor]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mapDistribuidor->idDistribuidor], ['confirm' => __('Are you sure you want to delete # {0}?', $mapDistribuidor->idDistribuidor)]) ?>
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
