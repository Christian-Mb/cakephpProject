<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SessionsTeacher $sessionsTeacher
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sessions Teachers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Session'), ['controller' => 'Sessions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sessionsTeachers form large-9 medium-8 columns content">
    <?= $this->Form->create($sessionsTeacher) ?>
    <fieldset>
        <legend><?= __('Add Sessions Teacher') ?></legend>
        <?php
            echo $this->Form->control('hourscm');
            echo $this->Form->control('hourstd');
            echo $this->Form->control('hourstp');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
