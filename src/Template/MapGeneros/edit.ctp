<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mapGenero->idGenero],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mapGenero->idGenero)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Map Generos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mapGeneros form large-9 medium-8 columns content">
    <?= $this->Form->create($mapGenero) ?>
    <fieldset>
        <legend><?= __('Edit Map Genero') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
