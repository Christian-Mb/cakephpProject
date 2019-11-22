<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlocksCourse $blocksCourse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Blocks Course'), ['action' => 'edit', $blocksCourse->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Blocks Course'), ['action' => 'delete', $blocksCourse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blocksCourse->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Blocks Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blocks Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blocks'), ['controller' => 'Blocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block'), ['controller' => 'Blocks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="blocksCourses view large-9 medium-8 columns content">
    <h3><?= h($blocksCourse->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $blocksCourse->has('course') ? $this->Html->link($blocksCourse->course->name, ['controller' => 'Courses', 'action' => 'view', $blocksCourse->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Block') ?></th>
            <td><?= $blocksCourse->has('block') ? $this->Html->link($blocksCourse->block->name, ['controller' => 'Blocks', 'action' => 'view', $blocksCourse->block->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numep') ?></th>
            <td><?= h($blocksCourse->numep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($blocksCourse->id) ?></td>
        </tr>
    </table>
</div>
