<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Map Critica'), ['action' => 'edit', $mapCritica->idCritica]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Map Critica'), ['action' => 'delete', $mapCritica->idCritica], ['confirm' => __('Are you sure you want to delete # {0}?', $mapCritica->idCritica)]) ?> </li>
        <li><?= $this->Html->link(__('List Map Criticas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map Critica'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mapCriticas view large-9 medium-8 columns content">
    <h3><?= h($mapCritica->idCritica) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Texto') ?></th>
            <td><?= h($mapCritica->texto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCritica') ?></th>
            <td><?= $this->Number->format($mapCritica->idCritica) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fk IdPremio') ?></th>
            <td><?= $this->Number->format($mapCritica->fk_idPremio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fk IdPostulacion Premio') ?></th>
            <td><?= $this->Number->format($mapCritica->fk_idPostulacion_Premio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fk IdCeremonia') ?></th>
            <td><?= $this->Number->format($mapCritica->fk_idCeremonia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($mapCritica->fecha) ?></td>
        </tr>
    </table>
</div>
