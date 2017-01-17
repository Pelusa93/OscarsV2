<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Map Miem Premio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mapMiemPremios index large-9 medium-8 columns content">
    <h3><?= __('Map Miem Premios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('fk_idPremio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fk_idMiembro') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mapMiemPremios as $mapMiemPremio): ?>
            <tr>
                <td><?= $this->Number->format($mapMiemPremio->fk_idPremio) ?></td>
                <td><?= $this->Number->format($mapMiemPremio->fk_idMiembro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mapMiemPremio->fk_idPremio]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mapMiemPremio->fk_idPremio]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mapMiemPremio->fk_idPremio], ['confirm' => __('Are you sure you want to delete # {0}?', $mapMiemPremio->fk_idPremio)]) ?>
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
