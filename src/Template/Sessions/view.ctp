<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Session $session
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Session'), ['action' => 'edit', $session->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Session'), ['action' => 'delete', $session->id], ['confirm' => __('Are you sure you want to delete # {0}?', $session->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sessions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Session'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dates'), ['controller' => 'Dates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Date'), ['controller' => 'Dates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sessions view large-9 medium-8 columns content">
    <h3><?= h($session->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $session->has('course') ? $this->Html->link($session->course->name, ['controller' => 'Courses', 'action' => 'view', $session->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= $session->has('date') ? $this->Html->link($session->date->id, ['controller' => 'Dates', 'action' => 'view', $session->date->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teacher') ?></th>
            <td><?= $session->has('teacher') ? $this->Html->link($session->teacher->id, ['controller' => 'Teachers', 'action' => 'view', $session->teacher->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($session->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Groupscm') ?></th>
            <td><?= $this->Number->format($session->groupscm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Groupstd') ?></th>
            <td><?= $this->Number->format($session->groupstd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Groupstp') ?></th>
            <td><?= $this->Number->format($session->groupstp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dates Starts Id') ?></th>
            <td><?= h($session->dates_starts_id) ?></td>
        </tr>
    </table>
</div>
