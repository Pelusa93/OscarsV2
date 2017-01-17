<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mapCritica->idCritica],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mapCritica->idCritica)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Map Criticas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mapCriticas form large-9 medium-8 columns content">
    <?= $this->Form->create($mapCritica) ?>
    <fieldset>
        <legend><?= __('Edit Map Critica') ?></legend>
        <?php
            echo $this->Form->input('fecha');
            echo $this->Form->input('texto');
            echo $this->Form->input('fk_idPremio');
            echo $this->Form->input('fk_idPostulacion_Premio');
            echo $this->Form->input('fk_idCeremonia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
