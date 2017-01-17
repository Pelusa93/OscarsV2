<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapDistribuidors Controller
 *
 * @property \App\Model\Table\MapDistribuidorsTable $MapDistribuidors
 */
class MapDistribuidorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapDistribuidors = $this->paginate($this->MapDistribuidors);

        $this->set(compact('mapDistribuidors'));
        $this->set('_serialize', ['mapDistribuidors']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Distribuidor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapDistribuidor = $this->MapDistribuidors->get($id, [
            'contain' => []
        ]);

        $this->set('mapDistribuidor', $mapDistribuidor);
        $this->set('_serialize', ['mapDistribuidor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapDistribuidor = $this->MapDistribuidors->newEntity();
        if ($this->request->is('post')) {
            $mapDistribuidor = $this->MapDistribuidors->patchEntity($mapDistribuidor, $this->request->data);
            if ($this->MapDistribuidors->save($mapDistribuidor)) {
                $this->Flash->success(__('The map distribuidor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map distribuidor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapDistribuidor'));
        $this->set('_serialize', ['mapDistribuidor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Distribuidor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapDistribuidor = $this->MapDistribuidors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapDistribuidor = $this->MapDistribuidors->patchEntity($mapDistribuidor, $this->request->data);
            if ($this->MapDistribuidors->save($mapDistribuidor)) {
                $this->Flash->success(__('The map distribuidor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map distribuidor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapDistribuidor'));
        $this->set('_serialize', ['mapDistribuidor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Distribuidor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapDistribuidor = $this->MapDistribuidors->get($id);
        if ($this->MapDistribuidors->delete($mapDistribuidor)) {
            $this->Flash->success(__('The map distribuidor has been deleted.'));
        } else {
            $this->Flash->error(__('The map distribuidor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
