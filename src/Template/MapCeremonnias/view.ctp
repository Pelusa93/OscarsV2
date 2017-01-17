<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Map Ceremonnia'), ['action' => 'edit', $mapCeremonnia->idCeremonia]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Map Ceremonnia'), ['action' => 'delete', $mapCeremonnia->idCeremonia], ['confirm' => __('Are you sure you want to delete # {0}?', $mapCeremonnia->idCeremonia)]) ?> </li>
        <li><?= $this->Html->link(__('List Map Ceremonnias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map Ceremonnia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mapCeremonnias view large-9 medium-8 columns content">
    <h3><?= h($mapCeremonnia->idCeremonia) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($mapCeremonnia->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCeremonia') ?></th>
            <td><?= $this->Number->format($mapCeremonnia->idCeremonia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fk IdHotel Teatro') ?></th>
            <td><?= $this->Number->format($mapCeremonnia->fk_idHotel_Teatro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($mapCeremonnia->fecha) ?></td>
        </tr>
    </table>
</div>
