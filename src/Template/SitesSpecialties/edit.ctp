<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SitesSpecialty $sitesSpecialty
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sitesSpecialty->sites_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sitesSpecialty->sites_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sites Specialties'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Specialties'), ['controller' => 'Specialties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Specialty'), ['controller' => 'Specialties', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sitesSpecialties form large-9 medium-8 columns content">
    <?= $this->Form->create($sitesSpecialty) ?>
    <fieldset>
        <legend><?= __('Edit Sites Specialty') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
