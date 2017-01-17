<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Map Distribuidors'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mapDistribuidors form large-9 medium-8 columns content">
    <?= $this->Form->create($mapDistribuidor) ?>
    <fieldset>
        <legend><?= __('Add Map Distribuidor') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('fk_idLugar_Direccion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
