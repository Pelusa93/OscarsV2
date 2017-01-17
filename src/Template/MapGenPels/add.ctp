<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Map Gen Pels'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mapGenPels form large-9 medium-8 columns content">
    <?= $this->Form->create($mapGenPel) ?>
    <fieldset>
        <legend><?= __('Add Map Gen Pel') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
