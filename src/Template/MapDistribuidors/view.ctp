<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Map Distribuidor'), ['action' => 'edit', $mapDistribuidor->idDistribuidor]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Map Distribuidor'), ['action' => 'delete', $mapDistribuidor->idDistribuidor], ['confirm' => __('Are you sure you want to delete # {0}?', $mapDistribuidor->idDistribuidor)]) ?> </li>
        <li><?= $this->Html->link(__('List Map Distribuidors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map Distribuidor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mapDistribuidors view large-9 medium-8 columns content">
    <h3><?= h($mapDistribuidor->idDistribuidor) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($mapDistribuidor->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdDistribuidor') ?></th>
            <td><?= $this->Number->format($mapDistribuidor->idDistribuidor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fk IdLugar Direccion') ?></th>
            <td><?= $this->Number->format($mapDistribuidor->fk_idLugar_Direccion) ?></td>
        </tr>
    </table>
</div>
