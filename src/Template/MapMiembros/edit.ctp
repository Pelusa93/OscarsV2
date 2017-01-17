<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mapMiembro->idMiembro],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mapMiembro->idMiembro)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Map Miembros'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mapMiembros form large-9 medium-8 columns content">
    <?= $this->Form->create($mapMiembro) ?>
    <fieldset>
        <legend><?= __('Edit Map Miembro') ?></legend>
        <?php
            echo $this->Form->input('fecha_inicio');
            echo $this->Form->input('fecha_fin', ['empty' => true]);
            echo $this->Form->input('vitalicio');
            echo $this->Form->input('fk_idPersona');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
