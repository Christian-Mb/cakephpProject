<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Specialty $specialty
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $specialty->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $specialty->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Specialties'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="specialties form large-9 medium-8 columns content">
    <?= $this->Form->create($specialty) ?>
    <fieldset>
        <legend><?= __('Edit Specialty') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('sites._ids', ['options' => $sites]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
