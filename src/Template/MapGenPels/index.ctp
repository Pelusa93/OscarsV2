<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Map Gen Pel'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mapGenPels index large-9 medium-8 columns content">
    <h3><?= __('Map Gen Pels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('fk_idGenero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fk_idPelicula') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mapGenPels as $mapGenPel): ?>
            <tr>
                <td><?= $this->Number->format($mapGenPel->fk_idGenero) ?></td>
                <td><?= $this->Number->format($mapGenPel->fk_idPelicula) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mapGenPel->fk_idGenero]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mapGenPel->fk_idGenero]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mapGenPel->fk_idGenero], ['confirm' => __('Are you sure you want to delete # {0}?', $mapGenPel->fk_idGenero)]) ?>
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
