<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Requests'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Request Types'), ['controller' => 'RequestTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Request Type'), ['controller' => 'RequestTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Request Statuses'), ['controller' => 'RequestStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Request Status'), ['controller' => 'RequestStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requests form large-9 medium-8 columns content">
    <?= $this->Form->create($request) ?>
    <fieldset>
        <legend><?= __('Add Request') ?></legend>
        <?php
            echo $this->Form->input('latitude');
            echo $this->Form->input('longitude');
            echo $this->Form->input('endereco_fisico');
            echo $this->Form->input('image');
            echo $this->Form->input('request_type_id', ['options' => $requestTypes]);
            echo $this->Form->input('request_status_id', ['options' => $requestStatuses]);
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
