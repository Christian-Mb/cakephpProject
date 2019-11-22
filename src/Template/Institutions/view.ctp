<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Institution $institution
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Institution'), ['action' => 'edit', $institution->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Institution'), ['action' => 'delete', $institution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institution->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Institutions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Institution'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="institutions view large-9 medium-8 columns content">
    <h3><?= h($institution->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($institution->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($institution->id) ?></td>
        </tr>
    </table>
</div>
