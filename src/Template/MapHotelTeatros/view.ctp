<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Map Hotel Teatro'), ['action' => 'edit', $mapHotelTeatro->idHotel_Teatro]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Map Hotel Teatro'), ['action' => 'delete', $mapHotelTeatro->idHotel_Teatro], ['confirm' => __('Are you sure you want to delete # {0}?', $mapHotelTeatro->idHotel_Teatro)]) ?> </li>
        <li><?= $this->Html->link(__('List Map Hotel Teatros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map Hotel Teatro'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mapHotelTeatros view large-9 medium-8 columns content">
    <h3><?= h($mapHotelTeatro->idHotel_Teatro) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($mapHotelTeatro->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($mapHotelTeatro->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdHotel Teatro') ?></th>
            <td><?= $this->Number->format($mapHotelTeatro->idHotel_Teatro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fk IdLugar Direccion') ?></th>
            <td><?= $this->Number->format($mapHotelTeatro->fk_idLugar_Direccion) ?></td>
        </tr>
    </table>
</div>
