<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapPresPreCers Controller
 *
 * @property \App\Model\Table\MapPresPreCersTable $MapPresPreCers
 */
class MapPresPreCersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapPresPreCers = $this->paginate($this->MapPresPreCers);

        $this->set(compact('mapPresPreCers'));
        $this->set('_serialize', ['mapPresPreCers']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Pres Pre Cer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapPresPreCer = $this->MapPresPreCers->get($id, [
            'contain' => []
        ]);

        $this->set('mapPresPreCer', $mapPresPreCer);
        $this->set('_serialize', ['mapPresPreCer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapPresPreCer = $this->MapPresPreCers->newEntity();
        if ($this->request->is('post')) {
            $mapPresPreCer = $this->MapPresPreCers->patchEntity($mapPresPreCer, $this->request->data);
            if ($this->MapPresPreCers->save($mapPresPreCer)) {
                $this->Flash->success(__('The map pres pre cer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map pres pre cer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPresPreCer'));
        $this->set('_serialize', ['mapPresPreCer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Pres Pre Cer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapPresPreCer = $this->MapPresPreCers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapPresPreCer = $this->MapPresPreCers->patchEntity($mapPresPreCer, $this->request->data);
            if ($this->MapPresPreCers->save($mapPresPreCer)) {
                $this->Flash->success(__('The map pres pre cer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map pres pre cer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPresPreCer'));
        $this->set('_serialize', ['mapPresPreCer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Pres Pre Cer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapPresPreCer = $this->MapPresPreCers->get($id);
        if ($this->MapPresPreCers->delete($mapPresPreCer)) {
            $this->Flash->success(__('The map pres pre cer has been deleted.'));
        } else {
            $this->Flash->error(__('The map pres pre cer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
