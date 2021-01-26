<?php
declare (strict_types = 1);

namespace App\Controller;

/**
 * Contratos Controller
 *
 * @property \App\Model\Table\ContratosTable $Contratos
 * @method \App\Model\Entity\Contrato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContratosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        try {
            $this->paginate = [
                'contain' => ['Clientes'],
            ];
            $contratos = $this->paginate($this->Contratos);

            // Consulta por Fecha
            $fi = $this->request->getQuery('fi');
            $ff = $this->request->getQuery('ff');
            if ($fi and $ff) {

                if (($fi < $ff) and ($fi != $ff)) {

                    $query = $this->Contratos->find()->where([
                        'fecha BETWEEN :start AND :end',
                    ])
                        ->group('cliente_id')
                        ->bind(':start', $fi)
                        ->bind(':end', $ff);

                } else {
                    $this->Flash->error('Ingrese un rango de fecha valido !');
                }

            } else {

                $query = $this->Contratos;

            }
            $contratos = $this->paginate($query);
            $this->set(compact('contratos'));

        } catch (\Exception $e) {};

    }

    /**
     * View method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contrato = $this->Contratos->get($id, [
            'contain' => ['Clientes'],
        ]);

        $this->set(compact('contrato'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contrato = $this->Contratos->newEmptyEntity();
        if ($this->request->is('post')) {
            $contrato = $this->Contratos->patchEntity($contrato, $this->request->getData());
            if ($this->Contratos->save($contrato)) {
                $this->Flash->success(__('The contrato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contrato could not be saved. Please, try again.'));
        }
        $clientes = $this->Contratos->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('contrato', 'clientes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contrato = $this->Contratos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contrato = $this->Contratos->patchEntity($contrato, $this->request->getData());
            if ($this->Contratos->save($contrato)) {
                $this->Flash->success(__('The contrato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contrato could not be saved. Please, try again.'));
        }
        $clientes = $this->Contratos->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('contrato', 'clientes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contrato = $this->Contratos->get($id);
        if ($this->Contratos->delete($contrato)) {
            $this->Flash->success(__('The contrato has been deleted.'));
        } else {
            $this->Flash->error(__('The contrato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function search()
    {

        try {
            $this->paginate = [
                'contain' => ['Clientes'],
            ];
            $contratos = $this->paginate($this->Contratos);

            // Consulta por Fecha
            $fi = $this->request->getQuery('fi');
            $ff = $this->request->getQuery('ff');
            if ($fi and $ff) {

                if (($fi < $ff) and ($fi != $ff)) {

                    $query = $this->Contratos->find('all', array('joins' => array(array('table' => 'Clientes',
                    'alias' => 'Clientes', 
                    'type' => 'INNER',
                    'conditions' => array('Contratos.cliente_id = Clientes.id')))))->where([
                        'fecha BETWEEN :start AND :end',
                    ])
                        ->group('cliente_id')
                        ->bind(':start', $fi)
                        ->bind(':end', $ff);
                    $query->select(['Contratos.cliente_id','Clientes.nombre' ,'montos' => $query->func()->sum('Contratos.montos')]) 
                    ->group('Contratos.cliente_id')   
                    ;
                } else {
                    $this->Flash->error('Ingrese un rango de fecha valido !');
                }

            } else {

                $query = $this->Contratos->find('all', array('joins' => array(array('table' => 'Clientes',
                'alias' => 'Clientes', 
                'type' => 'INNER',
                'conditions' => array('Contratos.cliente_id = Clientes.id')))));
                $query->select(['Contratos.cliente_id','Contratos.montos','Clientes.nombre']) ;
                
              

            }
            $contratos = $this->paginate($query);
            $this->set(compact('contratos'));

        } catch (\Exception $e) {};

    }

}
