<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapCriticas Controller
 *
 * @property \App\Model\Table\MapCriticasTable $MapCriticas
 */
class MapCriticasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapCriticas = $this->paginate($this->MapCriticas);

        $this->set(compact('mapCriticas'));
        $this->set('_serialize', ['mapCriticas']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Critica id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapCritica = $this->MapCriticas->get($id, [
            'contain' => []
        ]);

        $this->set('mapCritica', $mapCritica);
        $this->set('_serialize', ['mapCritica']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapCritica = $this->MapCriticas->newEntity();
        if ($this->request->is('post')) {
            $mapCritica = $this->MapCriticas->patchEntity($mapCritica, $this->request->data);
            if ($this->MapCriticas->save($mapCritica)) {
                $this->Flash->success(__('The map critica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map critica could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapCritica'));
        $this->set('_serialize', ['mapCritica']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Critica id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapCritica = $this->MapCriticas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapCritica = $this->MapCriticas->patchEntity($mapCritica, $this->request->data);
            if ($this->MapCriticas->save($mapCritica)) {
                $this->Flash->success(__('The map critica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map critica could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapCritica'));
        $this->set('_serialize', ['mapCritica']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Critica id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapCritica = $this->MapCriticas->get($id);
        if ($this->MapCriticas->delete($mapCritica)) {
            $this->Flash->success(__('The map critica has been deleted.'));
        } else {
            $this->Flash->error(__('The map critica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
