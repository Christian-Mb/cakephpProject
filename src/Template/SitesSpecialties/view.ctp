<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SitesSpecialty $sitesSpecialty
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sites Specialty'), ['action' => 'edit', $sitesSpecialty->sites_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sites Specialty'), ['action' => 'delete', $sitesSpecialty->sites_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sitesSpecialty->sites_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sites Specialties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sites Specialty'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Specialties'), ['controller' => 'Specialties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Specialty'), ['controller' => 'Specialties', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sitesSpecialties view large-9 medium-8 columns content">
    <h3><?= h($sitesSpecialty->sites_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Site') ?></th>
            <td><?= $sitesSpecialty->has('site') ? $this->Html->link($sitesSpecialty->site->name, ['controller' => 'Sites', 'action' => 'view', $sitesSpecialty->site->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Specialty') ?></th>
            <td><?= $sitesSpecialty->has('specialty') ? $this->Html->link($sitesSpecialty->specialty->name, ['controller' => 'Specialties', 'action' => 'view', $sitesSpecialty->specialty->id]) : '' ?></td>
        </tr>
    </table>
</div>
