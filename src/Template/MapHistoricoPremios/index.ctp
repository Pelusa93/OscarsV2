<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Map Historico Premio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mapHistoricoPremios index large-9 medium-8 columns content">
    <h3><?= __('Map Historico Premios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('fecha_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_fin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_durante_periodo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fk_idPremio') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mapHistoricoPremios as $mapHistoricoPremio): ?>
            <tr>
                <td><?= h($mapHistoricoPremio->fecha_inicio) ?></td>
                <td><?= h($mapHistoricoPremio->fecha_fin) ?></td>
                <td><?= h($mapHistoricoPremio->nombre_durante_periodo) ?></td>
                <td><?= $this->Number->format($mapHistoricoPremio->fk_idPremio) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mapHistoricoPremio->fecha_inicio]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mapHistoricoPremio->fecha_inicio]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mapHistoricoPremio->fecha_inicio], ['confirm' => __('Are you sure you want to delete # {0}?', $mapHistoricoPremio->fecha_inicio)]) ?>
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
