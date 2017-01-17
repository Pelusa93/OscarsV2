<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Map Miem Premio'), ['action' => 'edit', $mapMiemPremio->fk_idPremio]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Map Miem Premio'), ['action' => 'delete', $mapMiemPremio->fk_idPremio], ['confirm' => __('Are you sure you want to delete # {0}?', $mapMiemPremio->fk_idPremio)]) ?> </li>
        <li><?= $this->Html->link(__('List Map Miem Premios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map Miem Premio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mapMiemPremios view large-9 medium-8 columns content">
    <h3><?= h($mapMiemPremio->fk_idPremio) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fk IdPremio') ?></th>
            <td><?= $this->Number->format($mapMiemPremio->fk_idPremio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fk IdMiembro') ?></th>
            <td><?= $this->Number->format($mapMiemPremio->fk_idMiembro) ?></td>
        </tr>
    </table>
</div>
