<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapHistoricoPremios Controller
 *
 * @property \App\Model\Table\MapHistoricoPremiosTable $MapHistoricoPremios
 */
class MapHistoricoPremiosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapHistoricoPremios = $this->paginate($this->MapHistoricoPremios);

        $this->set(compact('mapHistoricoPremios'));
        $this->set('_serialize', ['mapHistoricoPremios']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Historico Premio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapHistoricoPremio = $this->MapHistoricoPremios->get($id, [
            'contain' => []
        ]);

        $this->set('mapHistoricoPremio', $mapHistoricoPremio);
        $this->set('_serialize', ['mapHistoricoPremio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapHistoricoPremio = $this->MapHistoricoPremios->newEntity();
        if ($this->request->is('post')) {
            $mapHistoricoPremio = $this->MapHistoricoPremios->patchEntity($mapHistoricoPremio, $this->request->data);
            if ($this->MapHistoricoPremios->save($mapHistoricoPremio)) {
                $this->Flash->success(__('The map historico premio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map historico premio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapHistoricoPremio'));
        $this->set('_serialize', ['mapHistoricoPremio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Historico Premio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapHistoricoPremio = $this->MapHistoricoPremios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapHistoricoPremio = $this->MapHistoricoPremios->patchEntity($mapHistoricoPremio, $this->request->data);
            if ($this->MapHistoricoPremios->save($mapHistoricoPremio)) {
                $this->Flash->success(__('The map historico premio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map historico premio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapHistoricoPremio'));
        $this->set('_serialize', ['mapHistoricoPremio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Historico Premio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapHistoricoPremio = $this->MapHistoricoPremios->get($id);
        if ($this->MapHistoricoPremios->delete($mapHistoricoPremio)) {
            $this->Flash->success(__('The map historico premio has been deleted.'));
        } else {
            $this->Flash->error(__('The map historico premio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
