<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato[]|\Cake\Collection\CollectionInterface $contratos
 */
?>

<div class="contratos div1 index content">

<h2><?=__('Contratos')?></h2> 

<?=$this->Form->create(null, ['type' => 'get'])?>
<h5>Fecha inicio</h5>
<?=$this->Form->date('fi', ['label' => 'FechaInicio', 'value' => $this->request->getQuery('fi')])?>
<h5>Fecha Fin</h5>
<?=$this->Form->date('ff', ['label' => 'FechaFin', 'value' => $this->request->getQuery('ff')])?>
<?=$this->Form->button(__('Buscar'), array('id' => 'hide'))?>  
<?= $this->Html->link(__('Atras'), ['action' => 'index'], ['class' => 'button float-right']) ?>   
<?=$this->Form->end()?>

</div> 
<br>
<div class=" content index content" id="div2" >
    <h2><?=__('Total')?></h2> 
    <div   class="table-responsive" >
        <table>
            <thead> 
                <tr>
                    <th><?=$this->Paginator->sort('cliente_id')?></th>
                    <th><?=$this->Paginator->sort('Total')?></th>
                </tr> 
            </thead>
            <tbody>
                <?php foreach ($contratos as $contrato): ?>
                <tr> 
                <td><?=$contrato->has('cliente') ? $contrato->cliente->nombre: ''?></td>
                    <td><?=$this->Number->format($contrato->montos)?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table> 
    </div>     
</div> 
 
