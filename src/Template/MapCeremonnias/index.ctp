<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Map Ceremonnia'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mapCeremonnias index large-9 medium-8 columns content">
    <h3><?= __('Map Ceremonnias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idCeremonia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fk_idHotel_Teatro') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mapCeremonnias as $mapCeremonnia): ?>
            <tr>
                <td><?= $this->Number->format($mapCeremonnia->idCeremonia) ?></td>
                <td><?= h($mapCeremonnia->fecha) ?></td>
                <td><?= h($mapCeremonnia->descripcion) ?></td>
                <td><?= $this->Number->format($mapCeremonnia->fk_idHotel_Teatro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mapCeremonnia->idCeremonia]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mapCeremonnia->idCeremonia]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mapCeremonnia->idCeremonia], ['confirm' => __('Are you sure you want to delete # {0}?', $mapCeremonnia->idCeremonia)]) ?>
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
