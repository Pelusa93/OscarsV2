<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Map Area Categorias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mapAreaCategorias form large-9 medium-8 columns content">
    <?= $this->Form->create($mapAreaCategoria) ?>
    <fieldset>
        <legend><?= __('Add Map Area Categoria') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('rama');
            echo $this->Form->input('fk_idCeremonia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
