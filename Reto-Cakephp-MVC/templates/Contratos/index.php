<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato[]|\Cake\Collection\CollectionInterface $contratos
 */
?>


<div class="contratos div1 index content">


<h2>Contratos</h2>
<?= $this->Html->link(__('Buscar'), ['action' => 'search'], ['class' => 'button float-right']) ?>  
    <div  class="table-responsive" >
        <table>
            <thead>
                <tr>
                    <th><?=$this->Paginator->sort('id')?></th>
                    <th><?=$this->Paginator->sort('cliente_id')?></th>
                    <th><?=$this->Paginator->sort('contratos')?></th>
                    <th><?=$this->Paginator->sort('fecha')?></th>
                    <th><?=$this->Paginator->sort('montos')?></th>
                    <th class="actions"><?=__('Actions')?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contratos as $contrato): ?>
                <tr>
                    <td><?=$this->Number->format($contrato->id)?></td>
                    <td><?=$contrato->has('cliente') ? $this->Html->link($contrato->cliente->nombre, ['controller' => 'Clientes', 'action' => 'view', $contrato->cliente->id]) : ''?></td>
                    <td><?=h($contrato->contratos)?></td>
                    <td><?=h($contrato->fecha)?></td>
                    <td><?=$this->Number->format($contrato->montos)?></td>
                    <td class="actions">
                        <?=$this->Html->link(__('View'), ['action' => 'view', $contrato->id])?>
                        <?=$this->Html->link(__('Edit'), ['action' => 'edit', $contrato->id])?>
                        <?=$this->Form->postLink(__('Delete'), ['action' => 'delete', $contrato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->id)])?>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>

    <div class="paginator">
        <ul class="pagination">
            <?=$this->Paginator->first('<< ' . __('first'))?>
            <?=$this->Paginator->prev('< ' . __('previous'))?>
            <?=$this->Paginator->numbers()?>
            <?=$this->Paginator->next(__('next') . ' >')?>
            <?=$this->Paginator->last(__('last') . ' >>')?>
        </ul>
        <p><?=$this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'))?></p>
    </div>
</div>

<br>





