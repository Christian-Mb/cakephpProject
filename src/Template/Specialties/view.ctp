<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Specialty $specialty
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Specialty'), ['action' => 'edit', $specialty->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Specialty'), ['action' => 'delete', $specialty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $specialty->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Specialties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Specialty'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="specialties view large-9 medium-8 columns content">
    <h3><?= h($specialty->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($specialty->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($specialty->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sites') ?></h4>
        <?php if (!empty($specialty->sites)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Adress') ?></th>
                <th scope="col"><?= __('Town') ?></th>
                <th scope="col"><?= __('Zipcode') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($specialty->sites as $sites): ?>
            <tr>
                <td><?= h($sites->id) ?></td>
                <td><?= h($sites->name) ?></td>
                <td><?= h($sites->adress) ?></td>
                <td><?= h($sites->town) ?></td>
                <td><?= h($sites->zipcode) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sites', 'action' => 'view', $sites->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sites', 'action' => 'edit', $sites->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sites', 'action' => 'delete', $sites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sites->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
