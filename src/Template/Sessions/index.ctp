<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Session[]|\Cake\Collection\CollectionInterface $sessions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Session'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dates'), ['controller' => 'Dates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Date'), ['controller' => 'Dates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sessions index large-9 medium-8 columns content">
    <h3><?= __('Sessions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('groupscm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('groupstd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('groupstp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('courses_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dates_starts_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dates_ends_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teachers_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sessions as $session): ?>
            <tr>
                <td><?= $this->Number->format($session->id) ?></td>
                <td><?= $this->Number->format($session->groupscm) ?></td>
                <td><?= $this->Number->format($session->groupstd) ?></td>
                <td><?= $this->Number->format($session->groupstp) ?></td>
                <td><?= $session->has('course') ? $this->Html->link($session->course->name, ['controller' => 'Courses', 'action' => 'view', $session->course->id]) : '' ?></td>
                <td><?= h($session->dates_starts_id) ?></td>
                <td><?= $session->has('date') ? $this->Html->link($session->date->id, ['controller' => 'Dates', 'action' => 'view', $session->date->id]) : '' ?></td>
                <td><?= $session->has('teacher') ? $this->Html->link($session->teacher->id, ['controller' => 'Teachers', 'action' => 'view', $session->teacher->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $session->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $session->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $session->id], ['confirm' => __('Are you sure you want to delete # {0}?', $session->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
