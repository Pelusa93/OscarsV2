<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Map Critica'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mapCriticas index large-9 medium-8 columns content">
    <h3><?= __('Map Criticas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idCritica') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('texto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fk_idPremio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fk_idPostulacion_Premio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fk_idCeremonia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mapCriticas as $mapCritica): ?>
            <tr>
                <td><?= $this->Number->format($mapCritica->idCritica) ?></td>
                <td><?= h($mapCritica->fecha) ?></td>
                <td><?= h($mapCritica->texto) ?></td>
                <td><?= $this->Number->format($mapCritica->fk_idPremio) ?></td>
                <td><?= $this->Number->format($mapCritica->fk_idPostulacion_Premio) ?></td>
                <td><?= $this->Number->format($mapCritica->fk_idCeremonia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mapCritica->idCritica]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mapCritica->idCritica]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mapCritica->idCritica], ['confirm' => __('Are you sure you want to delete # {0}?', $mapCritica->idCritica)]) ?>
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
