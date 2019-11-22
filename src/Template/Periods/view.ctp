<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Period $period
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Period'), ['action' => 'edit', $period->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Period'), ['action' => 'delete', $period->id], ['confirm' => __('Are you sure you want to delete # {0}?', $period->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Periods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Period'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="periods view large-9 medium-8 columns content">
    <h3><?= h($period->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($period->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($period->id) ?></td>
        </tr>
    </table>
</div>
