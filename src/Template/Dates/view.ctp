<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Date $date
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Date'), ['action' => 'edit', $date->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Date'), ['action' => 'delete', $date->id], ['confirm' => __('Are you sure you want to delete # {0}?', $date->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Date'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dates view large-9 medium-8 columns content">
    <h3><?= h($date->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($date->id) ?></td>
        </tr>
    </table>
</div>
