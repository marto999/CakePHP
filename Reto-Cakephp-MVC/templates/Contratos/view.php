<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contrato'), ['action' => 'edit', $contrato->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contrato'), ['action' => 'delete', $contrato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contratos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contrato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contratos view content">
            <h3><?= h($contrato->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $contrato->has('cliente') ? $this->Html->link($contrato->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $contrato->cliente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Contratos') ?></th>
                    <td><?= h($contrato->contratos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contrato->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Montos') ?></th>
                    <td><?= $this->Number->format($contrato->montos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($contrato->fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
