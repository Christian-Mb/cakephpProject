<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Date $date
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dates'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dates form large-9 medium-8 columns content">
    <?= $this->Form->create($date) ?>
    <fieldset>
        <legend><?= __('Add Date') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
