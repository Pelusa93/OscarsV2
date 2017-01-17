<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Map Lugar Direccion'), ['action' => 'edit', $mapLugarDireccion->idLugar_Direccion]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Map Lugar Direccion'), ['action' => 'delete', $mapLugarDireccion->idLugar_Direccion], ['confirm' => __('Are you sure you want to delete # {0}?', $mapLugarDireccion->idLugar_Direccion)]) ?> </li>
        <li><?= $this->Html->link(__('List Map Lugar Direccions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map Lugar Direccion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Map Personas'), ['controller' => 'MapPersonas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map Persona'), ['controller' => 'MapPersonas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mapLugarDireccions view large-9 medium-8 columns content">
    <h3><?= h($mapLugarDireccion->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($mapLugarDireccion->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($mapLugarDireccion->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nacionalidad') ?></th>
            <td><?= h($mapLugarDireccion->nacionalidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idioma') ?></th>
            <td><?= h($mapLugarDireccion->idioma) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdLugar Direccion') ?></th>
            <td><?= $this->Number->format($mapLugarDireccion->idLugar_Direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fk IdLugar Direccion') ?></th>
            <td><?= $this->Number->format($mapLugarDireccion->fk_idLugar_Direccion) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Tipo') ?></h4>
        <?= $this->Text->autoParagraph(h($mapLugarDireccion->tipo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Map Personas') ?></h4>
        <?php if (!empty($mapLugarDireccion->map_personas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('IdPersona') ?></th>
                <th scope="col"><?= __('Nombre1') ?></th>
                <th scope="col"><?= __('Nombre2') ?></th>
                <th scope="col"><?= __('Apellido1') ?></th>
                <th scope="col"><?= __('Apellido2') ?></th>
                <th scope="col"><?= __('Fnac') ?></th>
                <th scope="col"><?= __('Biografia') ?></th>
                <th scope="col"><?= __('Genero') ?></th>
                <th scope="col"><?= __('Raza') ?></th>
                <th scope="col"><?= __('Fecha Muerte') ?></th>
                <th scope="col"><?= __('Nombre Artistico') ?></th>
                <th scope="col"><?= __('Fecha Inicio Carrera') ?></th>
                <th scope="col"><?= __('Fk IdLugar Direccion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($mapLugarDireccion->map_personas as $mapPersonas): ?>
            <tr>
                <td><?= h($mapPersonas->idPersona) ?></td>
                <td><?= h($mapPersonas->nombre1) ?></td>
                <td><?= h($mapPersonas->nombre2) ?></td>
                <td><?= h($mapPersonas->apellido1) ?></td>
                <td><?= h($mapPersonas->apellido2) ?></td>
                <td><?= h($mapPersonas->fnac) ?></td>
                <td><?= h($mapPersonas->biografia) ?></td>
                <td><?= h($mapPersonas->genero) ?></td>
                <td><?= h($mapPersonas->raza) ?></td>
                <td><?= h($mapPersonas->fecha_muerte) ?></td>
                <td><?= h($mapPersonas->nombre_artistico) ?></td>
                <td><?= h($mapPersonas->fecha_inicio_carrera) ?></td>
                <td><?= h($mapPersonas->fk_idLugar_Direccion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MapPersonas', 'action' => 'view', $mapPersonas->idPersona]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MapPersonas', 'action' => 'edit', $mapPersonas->idPersona]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MapPersonas', 'action' => 'delete', $mapPersonas->idPersona], ['confirm' => __('Are you sure you want to delete # {0}?', $mapPersonas->idPersona)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
