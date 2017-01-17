<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapPremioEsps Controller
 *
 * @property \App\Model\Table\MapPremioEspsTable $MapPremioEsps
 */
class MapPremioEspsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapPremioEsps = $this->paginate($this->MapPremioEsps);

        $this->set(compact('mapPremioEsps'));
        $this->set('_serialize', ['mapPremioEsps']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Premio Esp id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapPremioEsp = $this->MapPremioEsps->get($id, [
            'contain' => []
        ]);

        $this->set('mapPremioEsp', $mapPremioEsp);
        $this->set('_serialize', ['mapPremioEsp']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapPremioEsp = $this->MapPremioEsps->newEntity();
        if ($this->request->is('post')) {
            $mapPremioEsp = $this->MapPremioEsps->patchEntity($mapPremioEsp, $this->request->data);
            if ($this->MapPremioEsps->save($mapPremioEsp)) {
                $this->Flash->success(__('The map premio esp has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map premio esp could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPremioEsp'));
        $this->set('_serialize', ['mapPremioEsp']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Premio Esp id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapPremioEsp = $this->MapPremioEsps->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapPremioEsp = $this->MapPremioEsps->patchEntity($mapPremioEsp, $this->request->data);
            if ($this->MapPremioEsps->save($mapPremioEsp)) {
                $this->Flash->success(__('The map premio esp has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map premio esp could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPremioEsp'));
        $this->set('_serialize', ['mapPremioEsp']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Premio Esp id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapPremioEsp = $this->MapPremioEsps->get($id);
        if ($this->MapPremioEsps->delete($mapPremioEsp)) {
            $this->Flash->success(__('The map premio esp has been deleted.'));
        } else {
            $this->Flash->error(__('The map premio esp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
