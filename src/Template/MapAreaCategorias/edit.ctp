<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mapAreaCategoria->idArea_Categoria],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mapAreaCategoria->idArea_Categoria)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Map Area Categorias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mapAreaCategorias form large-9 medium-8 columns content">
    <?= $this->Form->create($mapAreaCategoria) ?>
    <fieldset>
        <legend><?= __('Edit Map Area Categoria') ?></legend>
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
