<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapMiembros Controller
 *
 * @property \App\Model\Table\MapMiembrosTable $MapMiembros
 */
class MapMiembrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapMiembros = $this->paginate($this->MapMiembros);

        $this->set(compact('mapMiembros'));
        $this->set('_serialize', ['mapMiembros']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Miembro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapMiembro = $this->MapMiembros->get($id, [
            'contain' => []
        ]);

        $this->set('mapMiembro', $mapMiembro);
        $this->set('_serialize', ['mapMiembro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapMiembro = $this->MapMiembros->newEntity();
        if ($this->request->is('post')) {
            $mapMiembro = $this->MapMiembros->patchEntity($mapMiembro, $this->request->data);
            if ($this->MapMiembros->save($mapMiembro)) {
                $this->Flash->success(__('The map miembro has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map miembro could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapMiembro'));
        $this->set('_serialize', ['mapMiembro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Miembro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapMiembro = $this->MapMiembros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapMiembro = $this->MapMiembros->patchEntity($mapMiembro, $this->request->data);
            if ($this->MapMiembros->save($mapMiembro)) {
                $this->Flash->success(__('The map miembro has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map miembro could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapMiembro'));
        $this->set('_serialize', ['mapMiembro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Miembro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapMiembro = $this->MapMiembros->get($id);
        if ($this->MapMiembros->delete($mapMiembro)) {
            $this->Flash->success(__('The map miembro has been deleted.'));
        } else {
            $this->Flash->error(__('The map miembro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
