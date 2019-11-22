<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SitesSpecialty[]|\Cake\Collection\CollectionInterface $sitesSpecialties
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sites Specialty'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Specialties'), ['controller' => 'Specialties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Specialty'), ['controller' => 'Specialties', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sitesSpecialties index large-9 medium-8 columns content">
    <h3><?= __('Sites Specialties') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('sites_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('specialties_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sitesSpecialties as $sitesSpecialty): ?>
            <tr>
                <td><?= $sitesSpecialty->has('site') ? $this->Html->link($sitesSpecialty->site->name, ['controller' => 'Sites', 'action' => 'view', $sitesSpecialty->site->id]) : '' ?></td>
                <td><?= $sitesSpecialty->has('specialty') ? $this->Html->link($sitesSpecialty->specialty->name, ['controller' => 'Specialties', 'action' => 'view', $sitesSpecialty->specialty->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sitesSpecialty->sites_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sitesSpecialty->sites_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sitesSpecialty->sites_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sitesSpecialty->sites_id)]) ?>
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
