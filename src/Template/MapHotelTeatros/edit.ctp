<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mapHotelTeatro->idHotel_Teatro],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mapHotelTeatro->idHotel_Teatro)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Map Hotel Teatros'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mapHotelTeatros form large-9 medium-8 columns content">
    <?= $this->Form->create($mapHotelTeatro) ?>
    <fieldset>
        <legend><?= __('Edit Map Hotel Teatro') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('direccion');
            echo $this->Form->input('fk_idLugar_Direccion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
