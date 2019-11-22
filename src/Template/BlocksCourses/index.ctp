<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlocksCourse[]|\Cake\Collection\CollectionInterface $blocksCourses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Blocks Course'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blocks'), ['controller' => 'Blocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Block'), ['controller' => 'Blocks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blocksCourses index large-9 medium-8 columns content">
    <h3><?= __('Blocks Courses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('courses_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('blocks_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numep') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blocksCourses as $blocksCourse): ?>
            <tr>
                <td><?= $this->Number->format($blocksCourse->id) ?></td>
                <td><?= $blocksCourse->has('course') ? $this->Html->link($blocksCourse->course->name, ['controller' => 'Courses', 'action' => 'view', $blocksCourse->course->id]) : '' ?></td>
                <td><?= $blocksCourse->has('block') ? $this->Html->link($blocksCourse->block->name, ['controller' => 'Blocks', 'action' => 'view', $blocksCourse->block->id]) : '' ?></td>
                <td><?= h($blocksCourse->numep) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $blocksCourse->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blocksCourse->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blocksCourse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blocksCourse->id)]) ?>
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
