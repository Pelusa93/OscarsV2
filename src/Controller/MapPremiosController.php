<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapPremios Controller
 *
 * @property \App\Model\Table\MapPremiosTable $MapPremios
 */
class MapPremiosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapPremios = $this->paginate($this->MapPremios);

        $this->set(compact('mapPremios'));
        $this->set('_serialize', ['mapPremios']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Premio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapPremio = $this->MapPremios->get($id, [
            'contain' => []
        ]);

        $this->set('mapPremio', $mapPremio);
        $this->set('_serialize', ['mapPremio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapPremio = $this->MapPremios->newEntity();
        if ($this->request->is('post')) {
            $mapPremio = $this->MapPremios->patchEntity($mapPremio, $this->request->data);
            if ($this->MapPremios->save($mapPremio)) {
                $this->Flash->success(__('The map premio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map premio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPremio'));
        $this->set('_serialize', ['mapPremio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Premio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapPremio = $this->MapPremios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapPremio = $this->MapPremios->patchEntity($mapPremio, $this->request->data);
            if ($this->MapPremios->save($mapPremio)) {
                $this->Flash->success(__('The map premio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map premio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPremio'));
        $this->set('_serialize', ['mapPremio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Premio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapPremio = $this->MapPremios->get($id);
        if ($this->MapPremios->delete($mapPremio)) {
            $this->Flash->success(__('The map premio has been deleted.'));
        } else {
            $this->Flash->error(__('The map premio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
