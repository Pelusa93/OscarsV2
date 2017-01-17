<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Map Personas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Map Lugar Direccions'), ['controller' => 'MapLugarDireccions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Map Lugar Direccion'), ['controller' => 'MapLugarDireccions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mapPersonas form large-9 medium-8 columns content">
    <?= $this->Form->create($mapPersona) ?>
    <fieldset>
        <legend><?= __('Add Map Persona') ?></legend>
        <?php
            echo $this->Form->input('nombre1');
            echo $this->Form->input('nombre2');
            echo $this->Form->input('apellido1');
            echo $this->Form->input('apellido2');
            echo $this->Form->input('fnac');
            echo $this->Form->input('biografia');
            echo $this->Form->input('genero');
            echo $this->Form->input('raza');
            echo $this->Form->input('fecha_muerte', ['empty' => true]);
            echo $this->Form->input('nombre_artistico');
            echo $this->Form->input('fecha_inicio_carrera', ['empty' => true]);
            echo $this->Form->input('fk_idLugar_Direccion', ['options' => $mapLugarDireccions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
