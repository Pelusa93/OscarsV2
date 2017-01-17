<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Map Historico Premio'), ['action' => 'edit', $mapHistoricoPremio->fecha_inicio]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Map Historico Premio'), ['action' => 'delete', $mapHistoricoPremio->fecha_inicio], ['confirm' => __('Are you sure you want to delete # {0}?', $mapHistoricoPremio->fecha_inicio)]) ?> </li>
        <li><?= $this->Html->link(__('List Map Historico Premios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map Historico Premio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mapHistoricoPremios view large-9 medium-8 columns content">
    <h3><?= h($mapHistoricoPremio->fecha_inicio) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Durante Periodo') ?></th>
            <td><?= h($mapHistoricoPremio->nombre_durante_periodo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fk IdPremio') ?></th>
            <td><?= $this->Number->format($mapHistoricoPremio->fk_idPremio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($mapHistoricoPremio->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Fin') ?></th>
            <td><?= h($mapHistoricoPremio->fecha_fin) ?></td>
        </tr>
    </table>
</div>
