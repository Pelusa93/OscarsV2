<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapMiemPremios Controller
 *
 * @property \App\Model\Table\MapMiemPremiosTable $MapMiemPremios
 */
class MapMiemPremiosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapMiemPremios = $this->paginate($this->MapMiemPremios);

        $this->set(compact('mapMiemPremios'));
        $this->set('_serialize', ['mapMiemPremios']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Miem Premio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapMiemPremio = $this->MapMiemPremios->get($id, [
            'contain' => []
        ]);

        $this->set('mapMiemPremio', $mapMiemPremio);
        $this->set('_serialize', ['mapMiemPremio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapMiemPremio = $this->MapMiemPremios->newEntity();
        if ($this->request->is('post')) {
            $mapMiemPremio = $this->MapMiemPremios->patchEntity($mapMiemPremio, $this->request->data);
            if ($this->MapMiemPremios->save($mapMiemPremio)) {
                $this->Flash->success(__('The map miem premio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map miem premio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapMiemPremio'));
        $this->set('_serialize', ['mapMiemPremio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Miem Premio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapMiemPremio = $this->MapMiemPremios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapMiemPremio = $this->MapMiemPremios->patchEntity($mapMiemPremio, $this->request->data);
            if ($this->MapMiemPremios->save($mapMiemPremio)) {
                $this->Flash->success(__('The map miem premio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map miem premio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapMiemPremio'));
        $this->set('_serialize', ['mapMiemPremio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Miem Premio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapMiemPremio = $this->MapMiemPremios->get($id);
        if ($this->MapMiemPremios->delete($mapMiemPremio)) {
            $this->Flash->success(__('The map miem premio has been deleted.'));
        } else {
            $this->Flash->error(__('The map miem premio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
