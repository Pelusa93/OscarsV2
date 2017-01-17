<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Map Genero'), ['action' => 'edit', $mapGenero->idGenero]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Map Genero'), ['action' => 'delete', $mapGenero->idGenero], ['confirm' => __('Are you sure you want to delete # {0}?', $mapGenero->idGenero)]) ?> </li>
        <li><?= $this->Html->link(__('List Map Generos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map Genero'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mapGeneros view large-9 medium-8 columns content">
    <h3><?= h($mapGenero->idGenero) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($mapGenero->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($mapGenero->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdGenero') ?></th>
            <td><?= $this->Number->format($mapGenero->idGenero) ?></td>
        </tr>
    </table>
</div>
