<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Map Miembro'), ['action' => 'edit', $mapMiembro->idMiembro]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Map Miembro'), ['action' => 'delete', $mapMiembro->idMiembro], ['confirm' => __('Are you sure you want to delete # {0}?', $mapMiembro->idMiembro)]) ?> </li>
        <li><?= $this->Html->link(__('List Map Miembros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map Miembro'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mapMiembros view large-9 medium-8 columns content">
    <h3><?= h($mapMiembro->idMiembro) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdMiembro') ?></th>
            <td><?= $this->Number->format($mapMiembro->idMiembro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fk IdPersona') ?></th>
            <td><?= $this->Number->format($mapMiembro->fk_idPersona) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($mapMiembro->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Fin') ?></th>
            <td><?= h($mapMiembro->fecha_fin) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Vitalicio') ?></h4>
        <?= $this->Text->autoParagraph(h($mapMiembro->vitalicio)); ?>
    </div>
</div>
