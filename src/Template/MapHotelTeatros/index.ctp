<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Map Hotel Teatro'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mapHotelTeatros index large-9 medium-8 columns content">
    <h3><?= __('Map Hotel Teatros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idHotel_Teatro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fk_idLugar_Direccion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mapHotelTeatros as $mapHotelTeatro): ?>
            <tr>
                <td><?= $this->Number->format($mapHotelTeatro->idHotel_Teatro) ?></td>
                <td><?= h($mapHotelTeatro->nombre) ?></td>
                <td><?= h($mapHotelTeatro->direccion) ?></td>
                <td><?= $this->Number->format($mapHotelTeatro->fk_idLugar_Direccion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mapHotelTeatro->idHotel_Teatro]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mapHotelTeatro->idHotel_Teatro]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mapHotelTeatro->idHotel_Teatro], ['confirm' => __('Are you sure you want to delete # {0}?', $mapHotelTeatro->idHotel_Teatro)]) ?>
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
