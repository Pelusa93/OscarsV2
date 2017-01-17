<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapPelDis Controller
 *
 * @property \App\Model\Table\MapPelDisTable $MapPelDis
 */
class MapPelDisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapPelDis = $this->paginate($this->MapPelDis);

        $this->set(compact('mapPelDis'));
        $this->set('_serialize', ['mapPelDis']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Pel Di id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapPelDi = $this->MapPelDis->get($id, [
            'contain' => []
        ]);

        $this->set('mapPelDi', $mapPelDi);
        $this->set('_serialize', ['mapPelDi']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapPelDi = $this->MapPelDis->newEntity();
        if ($this->request->is('post')) {
            $mapPelDi = $this->MapPelDis->patchEntity($mapPelDi, $this->request->data);
            if ($this->MapPelDis->save($mapPelDi)) {
                $this->Flash->success(__('The map pel di has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map pel di could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPelDi'));
        $this->set('_serialize', ['mapPelDi']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Pel Di id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapPelDi = $this->MapPelDis->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapPelDi = $this->MapPelDis->patchEntity($mapPelDi, $this->request->data);
            if ($this->MapPelDis->save($mapPelDi)) {
                $this->Flash->success(__('The map pel di has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map pel di could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPelDi'));
        $this->set('_serialize', ['mapPelDi']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Pel Di id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapPelDi = $this->MapPelDis->get($id);
        if ($this->MapPelDis->delete($mapPelDi)) {
            $this->Flash->success(__('The map pel di has been deleted.'));
        } else {
            $this->Flash->error(__('The map pel di could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
