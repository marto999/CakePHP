<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientes view content">
            <h3><?= h($cliente->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($cliente->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Contratos') ?></h4>
                <?php if (!empty($cliente->contratos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Contratos') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Montos') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cliente->contratos as $contratos) : ?>
                        <tr>
                            <td><?= h($contratos->id) ?></td>
                            <td><?= h($contratos->cliente_id) ?></td>
                            <td><?= h($contratos->contratos) ?></td>
                            <td><?= h($contratos->fecha) ?></td>
                            <td><?= h($contratos->montos) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Contratos', 'action' => 'view', $contratos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Contratos', 'action' => 'edit', $contratos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contratos', 'action' => 'delete', $contratos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contratos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
