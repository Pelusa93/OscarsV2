<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Map Area Categoria'), ['action' => 'edit', $mapAreaCategoria->idArea_Categoria]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Map Area Categoria'), ['action' => 'delete', $mapAreaCategoria->idArea_Categoria], ['confirm' => __('Are you sure you want to delete # {0}?', $mapAreaCategoria->idArea_Categoria)]) ?> </li>
        <li><?= $this->Html->link(__('List Map Area Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map Area Categoria'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mapAreaCategorias view large-9 medium-8 columns content">
    <h3><?= h($mapAreaCategoria->idArea_Categoria) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($mapAreaCategoria->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($mapAreaCategoria->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdArea Categoria') ?></th>
            <td><?= $this->Number->format($mapAreaCategoria->idArea_Categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fk IdCeremonia') ?></th>
            <td><?= $this->Number->format($mapAreaCategoria->fk_idCeremonia) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Rama') ?></h4>
        <?= $this->Text->autoParagraph(h($mapAreaCategoria->rama)); ?>
    </div>
</div>
