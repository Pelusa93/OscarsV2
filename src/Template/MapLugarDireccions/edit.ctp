<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mapLugarDireccion->idLugar_Direccion],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mapLugarDireccion->idLugar_Direccion)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Map Lugar Direccions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Map Personas'), ['controller' => 'MapPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Map Persona'), ['controller' => 'MapPersonas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mapLugarDireccions form large-9 medium-8 columns content">
    <?= $this->Form->create($mapLugarDireccion) ?>
    <fieldset>
        <legend><?= __('Edit Map Lugar Direccion') ?></legend>
        <?php
            echo $this->Form->input('tipo');
            echo $this->Form->input('nombre');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('nacionalidad');
            echo $this->Form->input('idioma');
            echo $this->Form->input('fk_idLugar_Direccion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
