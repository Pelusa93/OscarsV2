<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapRols Controller
 *
 * @property \App\Model\Table\MapRolsTable $MapRols
 */
class MapRolsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapRols = $this->paginate($this->MapRols);

        $this->set(compact('mapRols'));
        $this->set('_serialize', ['mapRols']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Rol id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapRol = $this->MapRols->get($id, [
            'contain' => []
        ]);

        $this->set('mapRol', $mapRol);
        $this->set('_serialize', ['mapRol']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapRol = $this->MapRols->newEntity();
        if ($this->request->is('post')) {
            $mapRol = $this->MapRols->patchEntity($mapRol, $this->request->data);
            if ($this->MapRols->save($mapRol)) {
                $this->Flash->success(__('The map rol has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map rol could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapRol'));
        $this->set('_serialize', ['mapRol']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Rol id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapRol = $this->MapRols->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapRol = $this->MapRols->patchEntity($mapRol, $this->request->data);
            if ($this->MapRols->save($mapRol)) {
                $this->Flash->success(__('The map rol has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map rol could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapRol'));
        $this->set('_serialize', ['mapRol']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Rol id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapRol = $this->MapRols->get($id);
        if ($this->MapRols->delete($mapRol)) {
            $this->Flash->success(__('The map rol has been deleted.'));
        } else {
            $this->Flash->error(__('The map rol could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
