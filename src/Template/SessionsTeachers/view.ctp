<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SessionsTeacher $sessionsTeacher
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sessions Teacher'), ['action' => 'edit', $sessionsTeacher->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sessions Teacher'), ['action' => 'delete', $sessionsTeacher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sessionsTeacher->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sessions Teachers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sessions Teacher'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Session'), ['controller' => 'Sessions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sessionsTeachers view large-9 medium-8 columns content">
    <h3><?= h($sessionsTeacher->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Session') ?></th>
            <td><?= $sessionsTeacher->has('session') ? $this->Html->link($sessionsTeacher->session->id, ['controller' => 'Sessions', 'action' => 'view', $sessionsTeacher->session->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teacher') ?></th>
            <td><?= $sessionsTeacher->has('teacher') ? $this->Html->link($sessionsTeacher->teacher->id, ['controller' => 'Teachers', 'action' => 'view', $sessionsTeacher->teacher->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sessionsTeacher->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hourscm') ?></th>
            <td><?= $this->Number->format($sessionsTeacher->hourscm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hourstd') ?></th>
            <td><?= $this->Number->format($sessionsTeacher->hourstd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hourstp') ?></th>
            <td><?= $this->Number->format($sessionsTeacher->hourstp) ?></td>
        </tr>
    </table>
</div>
