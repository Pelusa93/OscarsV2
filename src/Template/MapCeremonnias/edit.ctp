<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mapCeremonnia->idCeremonia],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mapCeremonnia->idCeremonia)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Map Ceremonnias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mapCeremonnias form large-9 medium-8 columns content">
    <?= $this->Form->create($mapCeremonnia) ?>
    <fieldset>
        <legend><?= __('Edit Map Ceremonnia') ?></legend>
        <?php
            echo $this->Form->input('fecha');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('fk_idHotel_Teatro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
