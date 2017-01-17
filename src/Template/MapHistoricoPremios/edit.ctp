<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mapHistoricoPremio->fecha_inicio],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mapHistoricoPremio->fecha_inicio)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Map Historico Premios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mapHistoricoPremios form large-9 medium-8 columns content">
    <?= $this->Form->create($mapHistoricoPremio) ?>
    <fieldset>
        <legend><?= __('Edit Map Historico Premio') ?></legend>
        <?php
            echo $this->Form->input('fecha_fin', ['empty' => true]);
            echo $this->Form->input('nombre_durante_periodo');
            echo $this->Form->input('fk_idPremio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
