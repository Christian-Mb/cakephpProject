<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SessionsTeacher[]|\Cake\Collection\CollectionInterface $sessionsTeachers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sessions Teacher'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Session'), ['controller' => 'Sessions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sessionsTeachers index large-9 medium-8 columns content">
    <h3><?= __('Sessions Teachers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sessions_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teachers_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hourscm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hourstd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hourstp') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sessionsTeachers as $sessionsTeacher): ?>
            <tr>
                <td><?= $this->Number->format($sessionsTeacher->id) ?></td>
                <td><?= $sessionsTeacher->has('session') ? $this->Html->link($sessionsTeacher->session->id, ['controller' => 'Sessions', 'action' => 'view', $sessionsTeacher->session->id]) : '' ?></td>
                <td><?= $sessionsTeacher->has('teacher') ? $this->Html->link($sessionsTeacher->teacher->id, ['controller' => 'Teachers', 'action' => 'view', $sessionsTeacher->teacher->id]) : '' ?></td>
                <td><?= $this->Number->format($sessionsTeacher->hourscm) ?></td>
                <td><?= $this->Number->format($sessionsTeacher->hourstd) ?></td>
                <td><?= $this->Number->format($sessionsTeacher->hourstp) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sessionsTeacher->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sessionsTeacher->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sessionsTeacher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sessionsTeacher->id)]) ?>
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
