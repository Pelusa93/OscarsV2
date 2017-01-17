<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Map Persona'), ['action' => 'edit', $mapPersona->idPersona]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Map Persona'), ['action' => 'delete', $mapPersona->idPersona], ['confirm' => __('Are you sure you want to delete # {0}?', $mapPersona->idPersona)]) ?> </li>
        <li><?= $this->Html->link(__('List Map Personas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map Persona'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Map Lugar Direccions'), ['controller' => 'MapLugarDireccions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map Lugar Direccion'), ['controller' => 'MapLugarDireccions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mapPersonas view large-9 medium-8 columns content">
    <h3><?= h($mapPersona->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre1') ?></th>
            <td><?= h($mapPersona->nombre1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre2') ?></th>
            <td><?= h($mapPersona->nombre2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido1') ?></th>
            <td><?= h($mapPersona->apellido1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido2') ?></th>
            <td><?= h($mapPersona->apellido2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Biografia') ?></th>
            <td><?= h($mapPersona->biografia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Artistico') ?></th>
            <td><?= h($mapPersona->nombre_artistico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Map Lugar Direccion') ?></th>
            <td><?= $mapPersona->has('map_lugar_direccion') ? $this->Html->link($mapPersona->map_lugar_direccion->nombre, ['controller' => 'MapLugarDireccions', 'action' => 'view', $mapPersona->map_lugar_direccion->idLugar_Direccion]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdPersona') ?></th>
            <td><?= $this->Number->format($mapPersona->idPersona) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fnac') ?></th>
            <td><?= h($mapPersona->fnac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Muerte') ?></th>
            <td><?= h($mapPersona->fecha_muerte) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio Carrera') ?></th>
            <td><?= h($mapPersona->fecha_inicio_carrera) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Genero') ?></h4>
        <?= $this->Text->autoParagraph(h($mapPersona->genero)); ?>
    </div>
    <div class="row">
        <h4><?= __('Raza') ?></h4>
        <?= $this->Text->autoParagraph(h($mapPersona->raza)); ?>
    </div>
</div>
