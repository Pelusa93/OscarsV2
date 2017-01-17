<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapGenPels Controller
 *
 * @property \App\Model\Table\MapGenPelsTable $MapGenPels
 */
class MapGenPelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapGenPels = $this->paginate($this->MapGenPels);

        $this->set(compact('mapGenPels'));
        $this->set('_serialize', ['mapGenPels']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Gen Pel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapGenPel = $this->MapGenPels->get($id, [
            'contain' => []
        ]);

        $this->set('mapGenPel', $mapGenPel);
        $this->set('_serialize', ['mapGenPel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapGenPel = $this->MapGenPels->newEntity();
        if ($this->request->is('post')) {
            $mapGenPel = $this->MapGenPels->patchEntity($mapGenPel, $this->request->data);
            if ($this->MapGenPels->save($mapGenPel)) {
                $this->Flash->success(__('The map gen pel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map gen pel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapGenPel'));
        $this->set('_serialize', ['mapGenPel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Gen Pel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapGenPel = $this->MapGenPels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapGenPel = $this->MapGenPels->patchEntity($mapGenPel, $this->request->data);
            if ($this->MapGenPels->save($mapGenPel)) {
                $this->Flash->success(__('The map gen pel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map gen pel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapGenPel'));
        $this->set('_serialize', ['mapGenPel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Gen Pel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapGenPel = $this->MapGenPels->get($id);
        if ($this->MapGenPels->delete($mapGenPel)) {
            $this->Flash->success(__('The map gen pel has been deleted.'));
        } else {
            $this->Flash->error(__('The map gen pel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
