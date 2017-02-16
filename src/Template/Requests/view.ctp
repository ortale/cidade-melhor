<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Request'), ['action' => 'edit', $request->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Request'), ['action' => 'delete', $request->id], ['confirm' => __('Are you sure you want to delete # {0}?', $request->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Requests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Request'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Request Types'), ['controller' => 'RequestTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Request Type'), ['controller' => 'RequestTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Request Statuses'), ['controller' => 'RequestStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Request Status'), ['controller' => 'RequestStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="requests view large-9 medium-8 columns content">
    <h3><?= h($request->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= h($request->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= h($request->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco Fisico') ?></th>
            <td><?= h($request->endereco_fisico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($request->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Request Type') ?></th>
            <td><?= $request->has('request_type') ? $this->Html->link($request->request_type->id, ['controller' => 'RequestTypes', 'action' => 'view', $request->request_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Request Status') ?></th>
            <td><?= $request->has('request_status') ? $this->Html->link($request->request_status->id, ['controller' => 'RequestStatuses', 'action' => 'view', $request->request_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $request->has('user') ? $this->Html->link($request->user->id, ['controller' => 'Users', 'action' => 'view', $request->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($request->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($request->created) ?></td>
        </tr>
    </table>
</div>
